REPLACE INTO `hunderacer-wp`.`wp_terms`
   (term_id, `name`, slug, term_group)
   SELECT DISTINCT
       d.tid, d.name, REPLACE(LOWER(d.name), ' ', '_'), 0
   FROM hunderacer_dr.drupal_term_data d
   INNER JOIN hunderacer_dr.drupal_term_hierarchy h
       USING(tid)
   INNER JOIN hunderacer_dr.drupal_term_node n
       USING(tid)
   WHERE (1
        # This helps eliminate spam tags from import; uncomment if necessary.
        # AND LENGTH(d.name) < 50
   );

   INSERT INTO `hunderacer-wp`.wp_term_taxonomy
   (term_id, taxonomy, description, parent)
   SELECT DISTINCT
       d.tid `term_id`,
       'post_tag' `taxonomy`,
       d.description `description`,
       h.parent `parent`
   FROM hunderacer_dr.drupal_term_data d
   INNER JOIN hunderacer_dr.drupal_term_hierarchy h
       USING(tid)
   INNER JOIN hunderacer_dr.drupal_term_node n
       USING(tid)
   WHERE (1
        # This helps eliminate spam tags from import; uncomment if necessary.
        # AND LENGTH(d.name) < 50
   );

   INSERT INTO `hunderacer-wp`.wp_posts
   (id, post_author, post_date, post_content, post_title, post_excerpt,
   post_name, post_modified, post_type, `post_status`)
   SELECT DISTINCT
       n.nid `id`,
       n.uid `post_author`,
       FROM_UNIXTIME(n.created) `post_date`,
       r.body `post_content`,
       n.title `post_title`,
       r.teaser `post_excerpt`,
       IF(SUBSTR(a.dst, 11, 1) = '/', SUBSTR(a.dst, 12), a.dst) `post_name`,
       FROM_UNIXTIME(n.changed) `post_modified`,
       n.type `post_type`,
       IF(n.status = 1, 'publish', 'private') `post_status`
   FROM hunderacer_dr.drupal_node n
   INNER JOIN hunderacer_dr.drupal_node_revisions r
       USING(vid)
   LEFT OUTER JOIN hunderacer_dr.drupal_url_alias a
       ON a.src = CONCAT('node/', n.nid)
   # Add more Drupal content types below if applicable.
   WHERE n.type IN ('ad', 'article', 'blog', 'event', 'free_blog', 'page', 'simplenews', 'story', 'userad', 'webform');

   INSERT INTO `hunderacer-wp`.wp_term_relationships (object_id, term_taxonomy_id)
   SELECT DISTINCT nid, tid FROM hunderacer_dr.drupal_term_node;

   UPDATE IGNORE `hunderacer-wp`.wp_term_relationships, `hunderacer-wp`.wp_term_taxonomy
   SET `hunderacer-wp`.wp_term_relationships.term_taxonomy_id = `hunderacer-wp`.wp_term_taxonomy.term_taxonomy_id
   WHERE `hunderacer-wp`.wp_term_relationships.term_taxonomy_id = `hunderacer-wp`.wp_term_taxonomy.term_id;

INSERT INTO `hunderacer-wp`.wp_comments
    (comment_post_ID, comment_date, comment_content, comment_parent, comment_author,
    comment_author_email, comment_author_url, comment_approved)
    SELECT DISTINCT
        nid, FROM_UNIXTIME(TIMESTAMP), COMMENT, thread, NAME,
        mail, homepage, ((STATUS + 1) % 2)
    FROM hunderacer_dr.drupal_comments;

    UPDATE `hunderacer-wp`.wp_posts
    SET `comment_count` = (
        SELECT COUNT(`comment_post_id`)
        FROM `hunderacer-wp`.wp_comments
        WHERE `hunderacer-wp`.wp_posts.`id` = `hunderacer-wp`.wp_comments.`comment_post_id`
    );

    INSERT IGNORE INTO `hunderacer-wp`.wp_terms (NAME, slug)
   VALUES
   ('Hunderacer', 'hunderacer'),
   ('Blog', 'blog'),
   ('Nyheder', 'nyheder');

      INSERT INTO `hunderacer-wp`.wp_term_taxonomy (term_id, taxonomy)
    VALUES
    ((SELECT term_id FROM wp_terms WHERE slug = 'hunderacer'), 'category'),
    ((SELECT term_id FROM wp_terms WHERE slug = 'blog'), 'category'),
    ((SELECT term_id FROM wp_terms WHERE slug = 'nyheder'), 'category');

    UPDATE wp_term_taxonomy tt
    SET `count` = (
        SELECT COUNT(tr.object_id)
        FROM wp_term_relationships tr
        WHERE tr.term_taxonomy_id = tt.term_taxonomy_id
    );

    INSERT IGNORE INTO `hunderacer-wp`.wp_users
    (ID, user_login, user_pass, user_nicename, user_email,
    user_registered, user_activation_key, user_status, display_name)
    SELECT DISTINCT
        u.uid, u.mail, NULL, u.name, u.mail,
        FROM_UNIXTIME(created), '', 0, u.name
    FROM hunderacer_dr.drupal_users u
    INNER JOIN hunderacer_dr.drupal_users_roles r
        USING (uid)
    WHERE (1);

    INSERT IGNORE INTO `hunderacer-wp`.wp_usermeta (user_id, meta_key, meta_value)
    SELECT DISTINCT
        u.uid, 'wp_capabilities', 'a:1:{s:6:"author";s:1:"1";}'
    FROM `hunderacer_dr`.drupal_users u
    INNER JOIN `hunderacer_dr`.drupal_users_roles r
        USING (uid)
    WHERE (1);

    INSERT IGNORE INTO `hunderacer-wp`.wp_usermeta (user_id, meta_key, meta_value)
    SELECT DISTINCT
        u.uid, 'wp_user_level', '2'
    FROM `hunderacer_dr`.drupal_users u
    INNER JOIN `hunderacer_dr`.drupal_users_roles r
        USING (uid)
    WHERE (1
        # Uncomment and enter any email addresses you want to exclude below.
        # AND u.mail NOT IN ('test@example.com')
    );

    UPDATE `hunderacer-wp`.wp_posts
    SET post_author = NULL
    WHERE post_author NOT IN (SELECT DISTINCT ID FROM `hunderacer-wp`.wp_users);

    UPDATE wordpress.wp_posts
    SET post_author = NULL
    WHERE post_author NOT IN (SELECT DISTINCT ID FROM wordpress.wp_users);