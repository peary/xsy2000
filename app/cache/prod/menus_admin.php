<?php 
return array (
  'admin' => 
  array (
    'name' => '后台',
    'parent' => NULL,
    'code' => 'admin',
    'weight' => 100,
    'children' => 
    array (
      0 => 'admin_user',
      1 => 'admin_course',
      2 => 'admin_operation',
      3 => 'admin_order',
      4 => 'admin_finance',
      5 => 'admin_app',
      6 => 'admin_system',
    ),
    'group' => 1,
  ),
  'admin_user' => 
  array (
    'name' => '用户',
    'parent' => 'admin',
    'code' => 'admin_user',
    'weight' => 200,
    'children' => 
    array (
      0 => 'admin_user_show',
      1 => 'admin_teacher',
      2 => 'admin_approval_approvals',
      3 => 'admin_message',
    ),
    'group' => 1,
  ),
  'admin_course' => 
  array (
    'name' => '课程',
    'parent' => 'admin',
    'code' => 'admin_course',
    'weight' => 300,
    'children' => 
    array (
      0 => 'admin_course_show',
      1 => 'admin_live_course',
      2 => 'admin_open_course_manage',
      3 => 'admin_classroom',
      4 => 'admin_course_thread',
      5 => 'admin_course_question',
      6 => 'admin_course_note',
      7 => 'admin_course_review',
      8 => 'admin_course_category',
      9 => 'admin_course_tag',
    ),
    'group' => 1,
  ),
  'admin_operation' => 
  array (
    'name' => '运营',
    'parent' => 'admin',
    'router_name' => 'admin_article',
    'code' => 'admin_operation',
    'weight' => 400,
    'children' => 
    array (
      0 => 'admin_operation_article',
      1 => 'admin_operation_group',
      2 => 'admin_operation_invite',
      3 => 'admin_announcement',
      4 => 'admin_batch_notification',
      5 => 'admin_operation_block',
      6 => 'admin_operation_content',
      7 => 'admin_operation_analysis_register',
      8 => 'admin_operation_mobile',
      9 => 'admin_operation_keyword',
    ),
    'group' => 1,
  ),
  'admin_order' => 
  array (
    'name' => '订单',
    'parent' => 'admin',
    'router_name' => 'admin_course_order_manage',
    'code' => 'admin_order',
    'weight' => 500,
    'children' => 
    array (
      0 => 'admin_course_order',
      1 => 'admin_classroom_order',
      2 => 'admin_coin_orders',
    ),
    'group' => 1,
  ),
  'admin_finance' => 
  array (
    'name' => '账务',
    'parent' => 'admin',
    'router_name' => 'admin_bill',
    'code' => 'admin_finance',
    'weight' => 600,
    'children' => 
    array (
      0 => 'admin_bills',
      1 => 'admin_coin_user',
      2 => 'admin_course_refunds',
      3 => 'admin_classroom_refunds',
    ),
    'group' => 1,
  ),
  'admin_app' => 
  array (
    'name' => '教育云',
    'parent' => 'admin',
    'router_name' => 'admin_my_cloud',
    'code' => 'admin_app',
    'weight' => 700,
    'children' => 
    array (
      0 => 'admin_my_cloud',
      1 => 'admin_cloud_video_setting',
      2 => 'admin_edu_cloud_sms',
      3 => 'admin_edu_cloud_search',
      4 => 'admin_edu_cloud_attachment',
      5 => 'admin_app_center_show',
      6 => 'admin_cloud_attachment',
      7 => 'admin_cloud_file',
      8 => 'admin_setting_cloud',
    ),
    'group' => 1,
  ),
  'admin_system' => 
  array (
    'name' => '系统',
    'parent' => 'admin',
    'router_name' => 'admin_setting_site',
    'code' => 'admin_system',
    'weight' => 800,
    'children' => 
    array (
      0 => 'admin_setting',
      1 => 'admin_setting_user',
      2 => 'admin_setting_course_setting',
      3 => 'admin_setting_operation',
      4 => 'admin_setting_finance',
      5 => 'admin_setting_mobile',
      6 => 'admin_optimize',
      7 => 'admin_jobs',
      8 => 'admin_setting_ip_blacklist',
      9 => 'admin_setting_post_num_rules',
      10 => 'admin_report_status',
      11 => 'admin_logs',
    ),
    'group' => 1,
  ),
  'admin_operation_article' => 
  array (
    'name' => '资讯管理',
    'parent' => 'admin_operation',
    'router_name' => 'admin_article',
    'code' => 'admin_operation_article',
    'weight' => 900,
    'children' => 
    array (
      0 => 'admin_operation_article_manage',
      1 => 'admin_operation_article_category',
    ),
    'group' => 1,
  ),
  'admin_operation_group' => 
  array (
    'name' => '小组管理',
    'parent' => 'admin_operation',
    'router_name' => 'admin_group',
    'code' => 'admin_operation_group',
    'weight' => 1000,
    'children' => 
    array (
      0 => 'admin_operation_group_manage',
      1 => 'admin_operation_group_thread',
    ),
    'group' => 1,
  ),
  'admin_operation_invite' => 
  array (
    'name' => '邀请管理',
    'parent' => 'admin_operation',
    'router_name' => 'admin_invite',
    'code' => 'admin_operation_invite',
    'weight' => 1100,
    'children' => 
    array (
      0 => 'admin_operation_invite_manage',
      1 => 'admin_operation_invite_coupon',
    ),
    'group' => 1,
  ),
  'admin_operation_mobile_banner_manage' => 
  array (
    'name' => '轮播图设置',
    'parent' => 'admin_operation_mobile',
    'router_name' => 'admin_operation_mobile',
    'code' => 'admin_operation_mobile_banner_manage',
    'weight' => 1200,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_operation_mobile_select_manage' => 
  array (
    'name' => '每周精选设置',
    'parent' => 'admin_operation_mobile',
    'router_name' => 'admin_operation_mobile_select',
    'code' => 'admin_operation_mobile_select_manage',
    'weight' => 1300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_discovery_column_index' => 
  array (
    'name' => '发现页栏目管理',
    'parent' => 'admin_operation_mobile',
    'code' => 'admin_discovery_column_index',
    'weight' => 1400,
    'children' => 
    array (
      0 => 'admin_discovery_column_create',
    ),
    'group' => 1,
  ),
  'admin_discovery_column_create' => 
  array (
    'name' => '添加栏目',
    'parent' => 'admin_discovery_column_index',
    'router_params_context' => 1,
    'group' => 2,
    'mode' => 'modal',
    'code' => 'admin_discovery_column_create',
    'weight' => 1500,
    'children' => 
    array (
    ),
  ),
  'admin_announcement' => 
  array (
    'name' => '网站公告管理',
    'parent' => 'admin_operation',
    'before' => 'admin_batch_notification',
    'group' => 2,
    'code' => 'admin_announcement',
    'weight' => 1598,
    'children' => 
    array (
      0 => 'admin_announcement_create',
    ),
  ),
  'admin_batch_notification' => 
  array (
    'name' => '全站站内通知',
    'parent' => 'admin_operation',
    'before' => 'admin_operation_block',
    'group' => 2,
    'code' => 'admin_batch_notification',
    'weight' => 1599,
    'children' => 
    array (
      0 => 'admin_batch_notification_create',
    ),
  ),
  'admin_operation_block' => 
  array (
    'name' => '编辑区管理',
    'parent' => 'admin_operation',
    'router_name' => 'admin_block',
    'router_params' => 
    array (
      'category' => 'all',
    ),
    'group' => 2,
    'code' => 'admin_operation_block',
    'weight' => 1600,
    'children' => 
    array (
      0 => 'admin_block_visual_edit',
      1 => 'admin_block_visual_edit_history',
    ),
  ),
  'admin_block_visual_edit' => 
  array (
    'name' => '编辑',
    'parent' => 'admin_operation_block',
    'router_params' => 
    array (
      'blockTemplateId' => 'block.blockTemplateId',
    ),
    'router_params_context' => 1,
    'code' => 'admin_block_visual_edit',
    'weight' => 1700,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_block_visual_edit_history' => 
  array (
    'name' => '历史记录',
    'parent' => 'admin_operation_block',
    'router_params' => 
    array (
      'blockTemplateId' => 'block.blockTemplateId',
    ),
    'router_params_context' => 1,
    'code' => 'admin_block_visual_edit_history',
    'weight' => 1800,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_operation_content' => 
  array (
    'name' => '自定义页面管理',
    'parent' => 'admin_operation',
    'router_name' => 'admin_content',
    'router_params' => 
    array (
      'type' => 'page',
    ),
    'group' => 2,
    'code' => 'admin_operation_content',
    'weight' => 1900,
    'children' => 
    array (
    ),
  ),
  'admin_operation_analysis_register' => 
  array (
    'name' => '数据统计',
    'parent' => 'admin_operation',
    'router_params' => 
    array (
      'tab' => 'trend',
      'analysisDateType' => 'register',
    ),
    'after' => 'admin_operation_content',
    'group' => 3,
    'code' => 'admin_operation_analysis_register',
    'weight' => 1901,
    'children' => 
    array (
    ),
  ),
  'admin_operation_mobile' => 
  array (
    'name' => '移动端内容管理',
    'parent' => 'admin_operation',
    'group' => 2,
    'code' => 'admin_operation_mobile',
    'weight' => 2000,
    'children' => 
    array (
      0 => 'admin_operation_mobile_banner_manage',
      1 => 'admin_operation_mobile_select_manage',
      2 => 'admin_discovery_column_index',
    ),
  ),
  'admin_operation_article_create' => 
  array (
    'name' => '添加资讯',
    'parent' => 'admin_operation_article_manage',
    'router_name' => 'admin_article_create',
    'group' => 2,
    'code' => 'admin_operation_article_create',
    'weight' => 2200,
    'children' => 
    array (
    ),
  ),
  'admin_operation_category_create' => 
  array (
    'name' => '新建栏目',
    'parent' => 'admin_operation_article_category',
    'router_name' => 'admin_article_category_create',
    'mode' => 'modal',
    'group' => 2,
    'code' => 'admin_operation_category_create',
    'weight' => 2300,
    'children' => 
    array (
    ),
  ),
  'admin_operation_article_manage' => 
  array (
    'name' => '资讯管理',
    'parent' => 'admin_operation_article',
    'router_name' => 'admin_article',
    'code' => 'admin_operation_article_manage',
    'weight' => 2400,
    'children' => 
    array (
      0 => 'admin_operation_article_create',
    ),
    'group' => 1,
  ),
  'admin_operation_article_category' => 
  array (
    'name' => '栏目管理',
    'parent' => 'admin_operation_article',
    'router_name' => 'admin_article_category',
    'code' => 'admin_operation_article_category',
    'weight' => 2500,
    'children' => 
    array (
      0 => 'admin_operation_category_create',
    ),
    'group' => 1,
  ),
  'admin_operation_group_create' => 
  array (
    'name' => '创建小组',
    'parent' => 'admin_operation_group_manage',
    'router_name' => 'group_add',
    'group' => 2,
    'blank' => 1,
    'code' => 'admin_operation_group_create',
    'weight' => 2600,
    'children' => 
    array (
    ),
  ),
  'admin_operation_group_manage' => 
  array (
    'name' => '小组管理',
    'parent' => 'admin_operation_group',
    'router_name' => 'admin_group',
    'code' => 'admin_operation_group_manage',
    'weight' => 2700,
    'children' => 
    array (
      0 => 'admin_operation_group_create',
    ),
    'group' => 1,
  ),
  'admin_operation_invite_manage' => 
  array (
    'name' => '邀请管理',
    'parent' => 'admin_operation_invite',
    'router_name' => 'admin_invite',
    'code' => 'admin_operation_invite_manage',
    'weight' => 2800,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_operation_invite_coupon' => 
  array (
    'name' => '奖励查询',
    'parent' => 'admin_operation_invite',
    'router_name' => 'admin_invite_coupon',
    'code' => 'admin_operation_invite_coupon',
    'weight' => 2900,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_operation_group_thread' => 
  array (
    'name' => '话题管理',
    'parent' => 'admin_operation_group',
    'router_name' => 'admin_groupThread',
    'code' => 'admin_operation_group_thread',
    'weight' => 3000,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_show' => 
  array (
    'name' => '课程管理',
    'parent' => 'admin_course',
    'router_name' => 'admin_course',
    'code' => 'admin_course_show',
    'weight' => 3100,
    'children' => 
    array (
      0 => 'admin_course_manage',
      1 => 'admin_course_recommend',
      2 => 'admin_course_data',
    ),
    'group' => 1,
  ),
  'admin_course_add' => 
  array (
    'name' => '创建课程',
    'parent' => 'admin_course_manage',
    'router_name' => 'course_create',
    'group' => 2,
    'blank' => 1,
    'code' => 'admin_course_add',
    'weight' => 3200,
    'children' => 
    array (
    ),
  ),
  'admin_live_course' => 
  array (
    'name' => '直播管理',
    'parent' => 'admin_course',
    'router_params' => 
    array (
      'status' => 'coming',
    ),
    'code' => 'admin_live_course',
    'weight' => 3300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_open_course_manage' => 
  array (
    'name' => '公开课管理',
    'parent' => 'admin_course',
    'router_name' => 'admin_open_course',
    'code' => 'admin_open_course_manage',
    'weight' => 3400,
    'children' => 
    array (
      0 => 'admin_open_course',
      1 => 'admin_open_course_recommend',
      2 => 'admin_opencourse_analysis',
    ),
    'group' => 1,
  ),
  'admin_open_course' => 
  array (
    'name' => '公开课管理',
    'parent' => 'admin_open_course_manage',
    'router_name' => 'admin_open_course',
    'code' => 'admin_open_course',
    'weight' => 3500,
    'children' => 
    array (
      0 => 'admin_open_course_add',
    ),
    'group' => 1,
  ),
  'admin_open_course_add' => 
  array (
    'name' => '创建课程',
    'parent' => 'admin_open_course',
    'router_name' => 'course_create',
    'group' => 2,
    'blank' => 1,
    'code' => 'admin_open_course_add',
    'weight' => 3600,
    'children' => 
    array (
    ),
  ),
  'admin_open_course_recommend' => 
  array (
    'name' => '公开课推荐',
    'parent' => 'admin_open_course_manage',
    'router_name' => 'admin_open_course_recommend_list',
    'code' => 'admin_open_course_recommend',
    'weight' => 3700,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_opencourse_analysis' => 
  array (
    'name' => '公开课统计',
    'parent' => 'admin_open_course_manage',
    'code' => 'admin_opencourse_analysis',
    'weight' => 3800,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_classroom' => 
  array (
    'name' => '班级管理',
    'parent' => 'admin_course',
    'before' => 'admin_course_thread',
    'code' => 'admin_classroom',
    'weight' => 3899,
    'children' => 
    array (
      0 => 'admin_classroom_manage',
      1 => 'admin_classroom_recommend',
    ),
    'group' => 1,
  ),
  'admin_course_thread' => 
  array (
    'name' => '话题管理',
    'parent' => 'admin_course',
    'router_name' => 'admin_thread',
    'code' => 'admin_course_thread',
    'weight' => 3900,
    'children' => 
    array (
      0 => 'admin_course_thread_manage',
      1 => 'admin_classroom_thread_manage',
    ),
    'group' => 1,
  ),
  'admin_course_thread_manage' => 
  array (
    'name' => '课程话题',
    'parent' => 'admin_course_thread',
    'router_name' => 'admin_thread',
    'code' => 'admin_course_thread_manage',
    'weight' => 4000,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_question' => 
  array (
    'name' => '问答管理',
    'parent' => 'admin_course',
    'router_name' => 'admin_question',
    'router_params' => 
    array (
      'postStatus' => 'unPosted',
    ),
    'code' => 'admin_course_question',
    'weight' => 4100,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_note' => 
  array (
    'name' => '笔记管理',
    'parent' => 'admin_course',
    'router_name' => 'admin_note',
    'code' => 'admin_course_note',
    'weight' => 4200,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_review' => 
  array (
    'name' => '评价管理',
    'parent' => 'admin_course',
    'router_name' => 'admin_review',
    'code' => 'admin_course_review',
    'weight' => 4300,
    'children' => 
    array (
      0 => 'admin_course_review_tab',
      1 => 'admin_classroom_review_tab',
    ),
    'group' => 1,
  ),
  'admin_course_category' => 
  array (
    'name' => '分类管理',
    'parent' => 'admin_course',
    'code' => 'admin_course_category',
    'weight' => 4400,
    'children' => 
    array (
      0 => 'admin_category_create',
    ),
    'group' => 1,
  ),
  'admin_category_create' => 
  array (
    'name' => '添加分类',
    'parent' => 'admin_course_category',
    'router_params' => 
    array (
      'groupId' => 'group.id',
    ),
    'router_params_context' => 1,
    'group' => 2,
    'mode' => 'modal',
    'code' => 'admin_category_create',
    'weight' => 4500,
    'children' => 
    array (
    ),
  ),
  'admin_course_tag' => 
  array (
    'name' => '标签管理',
    'parent' => 'admin_course',
    'router_name' => 'admin_tag',
    'code' => 'admin_course_tag',
    'weight' => 4600,
    'children' => 
    array (
      0 => 'admin_course_tag_manage',
      1 => 'admin_course_tag_add',
    ),
    'group' => 1,
  ),
  'admin_course_tag_manage' => 
  array (
    'name' => '管理',
    'parent' => 'admin_course_tag',
    'router_name' => 'admin_tag',
    'code' => 'admin_course_tag_manage',
    'weight' => 4700,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_tag_add' => 
  array (
    'name' => '新增标签',
    'parent' => 'admin_course_tag',
    'router_name' => 'admin_tag_create',
    'mode' => 'modal',
    'group' => 2,
    'code' => 'admin_course_tag_add',
    'weight' => 4800,
    'children' => 
    array (
    ),
  ),
  'admin_user_show' => 
  array (
    'name' => '用户管理',
    'parent' => 'admin_user',
    'router_name' => 'admin_user',
    'code' => 'admin_user_show',
    'weight' => 4900,
    'children' => 
    array (
      0 => 'admin_user_manage',
      1 => 'admin_login_record',
    ),
    'group' => 1,
  ),
  'admin_user_create' => 
  array (
    'name' => '添加新用户',
    'parent' => 'admin_user_manage',
    'mode' => 'modal',
    'group' => 2,
    'code' => 'admin_user_create',
    'weight' => 5000,
    'children' => 
    array (
    ),
  ),
  'admin_user_manage' => 
  array (
    'name' => '用户管理',
    'parent' => 'admin_user_show',
    'router_name' => 'admin_user',
    'code' => 'admin_user_manage',
    'weight' => 5100,
    'children' => 
    array (
      0 => 'admin_user_create',
    ),
    'group' => 1,
  ),
  'admin_login_record' => 
  array (
    'name' => '登录日志',
    'parent' => 'admin_user_show',
    'code' => 'admin_login_record',
    'weight' => 5200,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_teacher' => 
  array (
    'name' => '教师管理',
    'parent' => 'admin_user',
    'code' => 'admin_teacher',
    'weight' => 5300,
    'children' => 
    array (
      0 => 'admin_teacher_manage',
      1 => 'admin_teacher_promote',
    ),
    'group' => 1,
  ),
  'admin_teacher_manage' => 
  array (
    'name' => '教师管理',
    'parent' => 'admin_teacher',
    'router_name' => 'admin_teacher',
    'code' => 'admin_teacher_manage',
    'weight' => 5400,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_teacher_promote' => 
  array (
    'name' => '教师推荐',
    'parent' => 'admin_teacher',
    'router_name' => 'admin_teacher_promote_list',
    'code' => 'admin_teacher_promote',
    'weight' => 5500,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_approval_approvals' => 
  array (
    'name' => '实名认证管理',
    'parent' => 'admin_user',
    'router_params' => 
    array (
      'approvalStatus' => 'approving',
    ),
    'code' => 'admin_approval_approvals',
    'weight' => 5600,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_message' => 
  array (
    'name' => '私信管理',
    'parent' => 'admin_user',
    'code' => 'admin_message',
    'weight' => 5700,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_manage' => 
  array (
    'name' => '课程管理',
    'parent' => 'admin_course_show',
    'router_name' => 'admin_course',
    'code' => 'admin_course_manage',
    'weight' => 5800,
    'children' => 
    array (
      0 => 'admin_course_add',
    ),
    'group' => 1,
  ),
  'admin_course_recommend' => 
  array (
    'name' => '课程推荐',
    'parent' => 'admin_course_show',
    'router_name' => 'admin_course_recommend_list',
    'code' => 'admin_course_recommend',
    'weight' => 5900,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_data' => 
  array (
    'name' => '课程统计',
    'parent' => 'admin_course_show',
    'code' => 'admin_course_data',
    'weight' => 6000,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_order' => 
  array (
    'name' => '课程订单',
    'parent' => 'admin_order',
    'router_name' => 'admin_course_order_manage',
    'code' => 'admin_course_order',
    'weight' => 6100,
    'children' => 
    array (
      0 => 'admin_course_order_query',
    ),
    'group' => 1,
  ),
  'admin_classroom_order' => 
  array (
    'name' => '班级订单',
    'parent' => 'admin_order',
    'after' => 'admin_course_order',
    'code' => 'admin_classroom_order',
    'weight' => 6101,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_coin_orders' => 
  array (
    'name' => '虚拟币订单',
    'parent' => 'admin_order',
    'code' => 'admin_coin_orders',
    'weight' => 6200,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_coin_order_query' => 
  array (
    'name' => '查阅',
    'parent' => 'admin_coin_order',
    'router_name' => 'admin_coin_orders',
    'code' => 'admin_coin_order_query',
    'weight' => 6300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_order_query' => 
  array (
    'name' => '查阅',
    'parent' => 'admin_course_order',
    'router_name' => 'admin_course_order_manage',
    'code' => 'admin_course_order_query',
    'weight' => 6400,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_bills' => 
  array (
    'name' => '账单管理',
    'parent' => 'admin_finance',
    'router_name' => 'admin_bill',
    'code' => 'admin_bills',
    'weight' => 6500,
    'children' => 
    array (
      0 => 'admin_cash_bill',
      1 => 'admin_coin_records',
    ),
    'group' => 1,
  ),
  'admin_cash_bill' => 
  array (
    'name' => '现金账单',
    'parent' => 'admin_bills',
    'router_name' => 'admin_bill',
    'code' => 'admin_cash_bill',
    'weight' => 6600,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_coin_records' => 
  array (
    'name' => '虚拟币账单',
    'parent' => 'admin_bills',
    'code' => 'admin_coin_records',
    'weight' => 6700,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_coin_user' => 
  array (
    'name' => '虚拟币管理',
    'parent' => 'admin_finance',
    'router_name' => 'admin_coin_user_records',
    'code' => 'admin_coin_user',
    'weight' => 6800,
    'children' => 
    array (
      0 => 'admin_coin_user_records',
    ),
    'group' => 1,
  ),
  'admin_coin_user_records' => 
  array (
    'name' => '记录',
    'parent' => 'admin_coin_user',
    'router_name' => 'admin_coin_user_records',
    'code' => 'admin_coin_user_records',
    'weight' => 6900,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_course_refunds' => 
  array (
    'name' => '课程退款管理',
    'parent' => 'admin_finance',
    'router_name' => 'admin_order_refunds',
    'router_params' => 
    array (
      'targetType' => 'course',
      'status' => 'created',
    ),
    'code' => 'admin_course_refunds',
    'weight' => 7000,
    'children' => 
    array (
      0 => 'admin_course_refunds_manage',
    ),
    'group' => 1,
  ),
  'admin_classroom_refunds' => 
  array (
    'name' => '班级退款管理',
    'parent' => 'admin_finance',
    'router_name' => 'admin_order_refunds',
    'router_params' => 
    array (
      'targetType' => 'classroom',
      'status' => 'created',
    ),
    'after' => 'admin_course_refunds',
    'code' => 'admin_classroom_refunds',
    'weight' => 7001,
    'children' => 
    array (
      0 => 'admin_classroom_refunds_manage',
    ),
    'group' => 1,
  ),
  'admin_course_refunds_manage' => 
  array (
    'name' => '管理',
    'parent' => 'admin_course_refunds',
    'router_name' => 'admin_order_refunds',
    'router_params' => 
    array (
      'targetType' => 'course',
      'status' => 'created',
    ),
    'code' => 'admin_course_refunds_manage',
    'weight' => 7100,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting' => 
  array (
    'name' => '站点设置',
    'parent' => 'admin_system',
    'router_name' => 'admin_setting_site',
    'code' => 'admin_setting',
    'weight' => 7200,
    'children' => 
    array (
      0 => 'admin_setting_massage',
      1 => 'admin_setting_theme',
      2 => 'admin_setting_mailer',
      3 => 'admin_top_navigation',
      4 => 'admin_foot_navigation',
      5 => 'admin_friendlyLink_navigation',
      6 => 'admin_setting_consult_setting',
      7 => 'admin_setting_es_bar',
      8 => 'admin_setting_share',
    ),
    'group' => 1,
  ),
  'admin_setting_massage' => 
  array (
    'name' => '基础信息',
    'parent' => 'admin_setting',
    'router_name' => 'admin_setting_site',
    'code' => 'admin_setting_massage',
    'weight' => 7300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_theme' => 
  array (
    'name' => '主题',
    'parent' => 'admin_setting',
    'router_name' => 'admin_setting_theme',
    'code' => 'admin_setting_theme',
    'weight' => 7400,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_mailer' => 
  array (
    'name' => '邮件服务器设置',
    'parent' => 'admin_setting',
    'code' => 'admin_setting_mailer',
    'weight' => 7500,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_top_navigation' => 
  array (
    'name' => '顶部导航',
    'parent' => 'admin_setting',
    'router_name' => 'admin_navigation',
    'router_params' => 
    array (
      'type' => 'top',
    ),
    'code' => 'admin_top_navigation',
    'weight' => 7600,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_foot_navigation' => 
  array (
    'name' => '底部导航',
    'parent' => 'admin_setting',
    'router_name' => 'admin_navigation',
    'router_params' => 
    array (
      'type' => 'foot',
    ),
    'code' => 'admin_foot_navigation',
    'weight' => 7700,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_friendlyLink_navigation' => 
  array (
    'name' => '友情链接',
    'parent' => 'admin_setting',
    'router_name' => 'admin_navigation',
    'router_params' => 
    array (
      'type' => 'friendlyLink',
    ),
    'code' => 'admin_friendlyLink_navigation',
    'weight' => 7800,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_consult_setting' => 
  array (
    'name' => '客服',
    'parent' => 'admin_setting',
    'code' => 'admin_setting_consult_setting',
    'weight' => 7900,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_es_bar' => 
  array (
    'name' => '侧边栏',
    'parent' => 'admin_setting',
    'code' => 'admin_setting_es_bar',
    'weight' => 8000,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_share' => 
  array (
    'name' => '分享',
    'parent' => 'admin_setting',
    'code' => 'admin_setting_share',
    'weight' => 8100,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_user' => 
  array (
    'name' => '用户设置',
    'parent' => 'admin_system',
    'router_name' => 'admin_setting_auth',
    'code' => 'admin_setting_user',
    'weight' => 8200,
    'children' => 
    array (
      0 => 'admin_user_auth',
      1 => 'admin_setting_login_bind',
      2 => 'admin_setting_user_center',
      3 => 'admin_setting_user_fields',
      4 => 'admin_user_avatar',
    ),
    'group' => 1,
  ),
  'admin_user_auth' => 
  array (
    'name' => '注册',
    'parent' => 'admin_setting_user',
    'router_name' => 'admin_setting_auth',
    'code' => 'admin_user_auth',
    'weight' => 8300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_login_bind' => 
  array (
    'name' => '登录',
    'parent' => 'admin_setting_user',
    'code' => 'admin_setting_login_bind',
    'weight' => 8400,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_user_center' => 
  array (
    'name' => '用户中心',
    'parent' => 'admin_setting_user',
    'code' => 'admin_setting_user_center',
    'weight' => 8500,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_user_fields' => 
  array (
    'name' => '用户信息设置',
    'parent' => 'admin_setting_user',
    'code' => 'admin_setting_user_fields',
    'weight' => 8600,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_user_avatar' => 
  array (
    'name' => '默认头像',
    'parent' => 'admin_setting_user',
    'router_name' => 'admin_setting_avatar',
    'code' => 'admin_user_avatar',
    'weight' => 8700,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_course_setting' => 
  array (
    'name' => '课程设置',
    'parent' => 'admin_system',
    'code' => 'admin_setting_course_setting',
    'weight' => 8800,
    'children' => 
    array (
      0 => 'admin_setting_course',
      1 => 'admin_setting_live_course',
      2 => 'admin_classroom_setting',
      3 => 'admin_setting_questions_setting',
      4 => 'admin_setting_course_avatar',
    ),
    'group' => 1,
  ),
  'admin_setting_course' => 
  array (
    'name' => '课程',
    'parent' => 'admin_setting_course_setting',
    'router_name' => 'admin_setting_course_setting',
    'code' => 'admin_setting_course',
    'weight' => 8900,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_live_course' => 
  array (
    'name' => '直播',
    'parent' => 'admin_setting_course_setting',
    'router_name' => 'admin_setting_live_course_setting',
    'code' => 'admin_setting_live_course',
    'weight' => 9000,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_classroom_setting' => 
  array (
    'name' => '班级',
    'parent' => 'admin_setting_course_setting',
    'after' => 'admin_setting_live_course',
    'code' => 'admin_classroom_setting',
    'weight' => 9001,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_questions_setting' => 
  array (
    'name' => '题库',
    'parent' => 'admin_setting_course_setting',
    'code' => 'admin_setting_questions_setting',
    'weight' => 9100,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_course_avatar' => 
  array (
    'name' => '默认图片',
    'parent' => 'admin_setting_course_setting',
    'code' => 'admin_setting_course_avatar',
    'weight' => 9200,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_operation' => 
  array (
    'name' => '运营设置',
    'parent' => 'admin_system',
    'router_name' => 'admin_article_setting',
    'code' => 'admin_setting_operation',
    'weight' => 9300,
    'children' => 
    array (
      0 => 'admin_article_setting',
      1 => 'admin_group_set',
      2 => 'admin_invite_set',
    ),
    'group' => 1,
  ),
  'admin_article_setting' => 
  array (
    'name' => '资讯',
    'parent' => 'admin_setting_operation',
    'code' => 'admin_article_setting',
    'weight' => 9400,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_group_set' => 
  array (
    'name' => '小组',
    'parent' => 'admin_setting_operation',
    'code' => 'admin_group_set',
    'weight' => 9500,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_invite_set' => 
  array (
    'name' => '邀请码设置',
    'parent' => 'admin_setting_operation',
    'code' => 'admin_invite_set',
    'weight' => 9600,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_finance' => 
  array (
    'name' => '账务设置',
    'parent' => 'admin_system',
    'router_name' => 'admin_setting_payment',
    'code' => 'admin_setting_finance',
    'weight' => 9700,
    'children' => 
    array (
      0 => 'admin_payment',
      1 => '_admin_coin_settings',
      2 => 'admin_setting_refund',
    ),
    'group' => 1,
  ),
  'admin_payment' => 
  array (
    'name' => '支付',
    'parent' => 'admin_setting_finance',
    'router_name' => 'admin_setting_payment',
    'code' => 'admin_payment',
    'weight' => 9800,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  '_admin_coin_settings' => 
  array (
    'name' => '虚拟币',
    'parent' => 'admin_setting_finance',
    'router_name' => 'admin_coin_settings',
    'code' => '_admin_coin_settings',
    'weight' => 9900,
    'children' => 
    array (
      0 => 'admin_coin_settings',
      1 => 'admin_coin_model',
    ),
    'group' => 1,
  ),
  'admin_coin_settings' => 
  array (
    'name' => '虚拟币设置',
    'parent' => '_admin_coin_settings',
    'code' => 'admin_coin_settings',
    'weight' => 10000,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_coin_model' => 
  array (
    'name' => '使用方式',
    'fullname' => '虚拟币使用方式设置',
    'parent' => '_admin_coin_settings',
    'code' => 'admin_coin_model',
    'weight' => 10100,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_refund' => 
  array (
    'name' => '退款',
    'parent' => 'admin_setting_finance',
    'code' => 'admin_setting_refund',
    'weight' => 10200,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_setting_mobile' => 
  array (
    'name' => '移动端设置',
    'parent' => 'admin_system',
    'code' => 'admin_setting_mobile',
    'weight' => 10300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_optimize' => 
  array (
    'name' => '系统优化',
    'parent' => 'admin_system',
    'group' => 2,
    'code' => 'admin_optimize',
    'weight' => 10400,
    'children' => 
    array (
    ),
  ),
  'admin_jobs' => 
  array (
    'name' => '定时任务',
    'parent' => 'admin_system',
    'group' => 2,
    'code' => 'admin_jobs',
    'weight' => 10500,
    'children' => 
    array (
    ),
  ),
  'admin_setting_ip_blacklist' => 
  array (
    'name' => 'IP黑名单',
    'parent' => 'admin_system',
    'group' => 2,
    'code' => 'admin_setting_ip_blacklist',
    'weight' => 10600,
    'children' => 
    array (
    ),
  ),
  'admin_setting_post_num_rules' => 
  array (
    'name' => '发帖限制设置',
    'parent' => 'admin_system',
    'group' => 2,
    'code' => 'admin_setting_post_num_rules',
    'weight' => 10700,
    'children' => 
    array (
    ),
  ),
  'admin_report_status' => 
  array (
    'name' => '系统自检',
    'parent' => 'admin_system',
    'group' => 2,
    'code' => 'admin_report_status',
    'weight' => 10800,
    'children' => 
    array (
    ),
  ),
  'admin_logs' => 
  array (
    'name' => '系统日志',
    'parent' => 'admin_system',
    'group' => 2,
    'code' => 'admin_logs',
    'weight' => 10900,
    'children' => 
    array (
      0 => 'admin_logs_query',
      1 => 'admin_logs_prod',
    ),
  ),
  'admin_logs_query' => 
  array (
    'name' => '系统操作日志',
    'parent' => 'admin_logs',
    'router_name' => 'admin_logs',
    'code' => 'admin_logs_query',
    'weight' => 11000,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_logs_prod' => 
  array (
    'name' => '程序运行日志',
    'parent' => 'admin_logs',
    'code' => 'admin_logs_prod',
    'weight' => 11100,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_my_cloud' => 
  array (
    'name' => '账户概览',
    'parent' => 'admin_app',
    'code' => 'admin_my_cloud',
    'weight' => 11200,
    'children' => 
    array (
      0 => 'admin_cloud_bill',
    ),
    'group' => 1,
  ),
  'admin_cloud_video_setting' => 
  array (
    'name' => '云视频设置',
    'parent' => 'admin_app',
    'router_name' => 'admin_setting_cloud_video',
    'code' => 'admin_cloud_video_setting',
    'weight' => 11300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_edu_cloud_sms' => 
  array (
    'name' => '云短信设置',
    'parent' => 'admin_app',
    'code' => 'admin_edu_cloud_sms',
    'weight' => 11400,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_edu_cloud_search' => 
  array (
    'name' => '云搜索设置',
    'parent' => 'admin_app',
    'code' => 'admin_edu_cloud_search',
    'weight' => 11500,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_edu_cloud_attachment' => 
  array (
    'name' => '云附件设置',
    'parent' => 'admin_app',
    'code' => 'admin_edu_cloud_attachment',
    'weight' => 11600,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_app_center_show' => 
  array (
    'name' => 'ES应用',
    'parent' => 'admin_app',
    'router_name' => 'admin_app_center',
    'router_params' => 
    array (
      'postStatus' => 'all',
    ),
    'code' => 'admin_app_center_show',
    'weight' => 11700,
    'children' => 
    array (
      0 => 'admin_app_center',
      1 => 'admin_app_installed',
      2 => 'admin_app_upgrades',
      3 => 'admin_app_logs',
    ),
    'group' => 1,
  ),
  'admin_cloud_attachment' => 
  array (
    'name' => '云附件',
    'parent' => 'admin_app',
    'before' => 'admin_setting_cloud',
    'code' => 'admin_cloud_attachment',
    'weight' => 11799,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_cloud_file' => 
  array (
    'name' => '云资源',
    'parent' => 'admin_app',
    'before' => 'admin_setting_cloud',
    'code' => 'admin_cloud_file',
    'weight' => 11799,
    'children' => 
    array (
      0 => 'admin_cloud_file_manage',
    ),
    'group' => 1,
  ),
  'admin_setting_cloud' => 
  array (
    'name' => '授权信息',
    'parent' => 'admin_app',
    'code' => 'admin_setting_cloud',
    'weight' => 11800,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_app_center' => 
  array (
    'name' => '应用中心',
    'parent' => 'admin_app_center_show',
    'router_name' => 'admin_app_center',
    'router_params' => 
    array (
      'postStatus' => 'all',
    ),
    'code' => 'admin_app_center',
    'weight' => 11900,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_app_installed' => 
  array (
    'name' => '已购项目',
    'parent' => 'admin_app_center_show',
    'router_params' => 
    array (
      'postStatus' => 'all',
    ),
    'code' => 'admin_app_installed',
    'weight' => 12000,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_app_upgrades' => 
  array (
    'name' => '更新',
    'parent' => 'admin_app_center_show',
    'class' => 'app-upgrade',
    'code' => 'admin_app_upgrades',
    'weight' => 12100,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_app_logs' => 
  array (
    'name' => '更新日志',
    'parent' => 'admin_app_center_show',
    'code' => 'admin_app_logs',
    'weight' => 12200,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_cloud_bill' => 
  array (
    'name' => '云视频账单',
    'parent' => 'admin_my_cloud',
    'router_name' => 'admin_cloud_bill',
    'code' => 'admin_cloud_bill',
    'weight' => 12300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_batch_notification_create' => 
  array (
    'name' => '创建站内通知',
    'parent' => 'admin_batch_notification',
    'group' => 2,
    'code' => 'admin_batch_notification_create',
    'weight' => 12700,
    'children' => 
    array (
    ),
  ),
  'admin_announcement_create' => 
  array (
    'name' => '新增公告',
    'parent' => 'admin_announcement',
    'mode' => 'modal',
    'group' => 2,
    'code' => 'admin_announcement_create',
    'weight' => 12900,
    'children' => 
    array (
    ),
  ),
  'admin_course_review_tab' => 
  array (
    'name' => '课程评价',
    'parent' => 'admin_course_review',
    'router_name' => 'admin_review',
    'group' => 1,
    'code' => 'admin_course_review_tab',
    'weight' => 13000,
    'children' => 
    array (
    ),
  ),
  'admin_classroom_manage' => 
  array (
    'name' => '班级管理',
    'parent' => 'admin_classroom',
    'router_name' => 'admin_classroom',
    'code' => 'admin_classroom_manage',
    'weight' => 13200,
    'children' => 
    array (
      0 => 'admin_classroom_create',
    ),
    'group' => 1,
  ),
  'admin_classroom_recommend' => 
  array (
    'name' => '班级推荐',
    'parent' => 'admin_classroom',
    'router_name' => 'admin_classroom_recommend_list',
    'code' => 'admin_classroom_recommend',
    'weight' => 13300,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_classroom_create' => 
  array (
    'name' => '创建班级',
    'parent' => 'admin_classroom_manage',
    'group' => 2,
    'blank' => true,
    'code' => 'admin_classroom_create',
    'weight' => 13400,
    'children' => 
    array (
    ),
  ),
  'admin_classroom_thread_manage' => 
  array (
    'name' => '班级话题',
    'parent' => 'admin_course_thread',
    'router_name' => 'admin_classroom_thread',
    'code' => 'admin_classroom_thread_manage',
    'weight' => 13500,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_classroom_refunds_manage' => 
  array (
    'name' => '管理',
    'parent' => 'admin_classroom_refunds',
    'router_name' => 'admin_order_refunds',
    'router_params' => 
    array (
      'targetType' => 'classroom',
      'status' => 'created',
    ),
    'code' => 'admin_classroom_refunds_manage',
    'weight' => 13800,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_classroom_review_tab' => 
  array (
    'name' => '班级评价',
    'parent' => 'admin_course_review',
    'router_name' => 'admin_classroom_review',
    'group' => 1,
    'code' => 'admin_classroom_review_tab',
    'weight' => 14000,
    'children' => 
    array (
    ),
  ),
  'admin_cloud_file_manage' => 
  array (
    'name' => '资源管理',
    'parent' => 'admin_cloud_file',
    'code' => 'admin_cloud_file_manage',
    'weight' => 14100,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_operation_keyword' => 
  array (
    'name' => '敏感词管理',
    'parent' => 'admin_operation',
    'router_name' => 'admin_keyword',
    'group' => 4,
    'code' => 'admin_operation_keyword',
    'weight' => 14200,
    'children' => 
    array (
      0 => 'admin_operation_keyword_set',
      1 => 'admin_operation_keyword_banlogs',
    ),
  ),
  'admin_operation_keyword_set' => 
  array (
    'name' => '敏感词列表',
    'parent' => 'admin_operation_keyword',
    'router_name' => 'admin_keyword',
    'code' => 'admin_operation_keyword_set',
    'weight' => 14300,
    'children' => 
    array (
      0 => 'admin_operation_keyword_create',
    ),
    'group' => 1,
  ),
  'admin_operation_keyword_banlogs' => 
  array (
    'name' => '屏蔽记录',
    'parent' => 'admin_operation_keyword',
    'router_name' => 'admin_keyword_banlogs',
    'code' => 'admin_operation_keyword_banlogs',
    'weight' => 14400,
    'children' => 
    array (
    ),
    'group' => 1,
  ),
  'admin_operation_keyword_create' => 
  array (
    'name' => '添加敏感词',
    'parent' => 'admin_operation_keyword_set',
    'router_name' => 'admin_keyword_create',
    'mode' => 'modal',
    'group' => 2,
    'blank' => 1,
    'code' => 'admin_operation_keyword_create',
    'weight' => 14500,
    'children' => 
    array (
    ),
  ),
);