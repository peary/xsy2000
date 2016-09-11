<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
    2 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    3 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    4 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    5 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
    6 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    7 => 'Topxia\\Service\\RefererLog\\Event\\OrderRefererLogEventSubscriber',
    8 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    9 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    10 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
    11 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    12 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    13 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    14 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    15 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    16 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    17 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    18 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
    19 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    20 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    21 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'openCourse' => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
  ),
);