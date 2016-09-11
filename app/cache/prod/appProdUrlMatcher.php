<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // homepage_category
        if ($pathinfo === '/course/search') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\DefaultController::coursesCategoryAction',  '_route' => 'homepage_category',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // live_jump
            if ($pathinfo === '/live/jump') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\DefaultController::jumpAction',  '_route' => 'live_jump',);
            }

            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // login
                    if ($pathinfo === '/login') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginController::indexAction',  '_route' => 'login',);
                    }

                    // login_check
                    if ($pathinfo === '/login_check') {
                        return array('_route' => 'login_check');
                    }

                }

                // logout
                if ($pathinfo === '/logout') {
                    return array('_route' => 'logout');
                }

                if (0 === strpos($pathinfo, '/login')) {
                    // login_ajax
                    if ($pathinfo === '/login/ajax') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginController::ajaxAction',  '_route' => 'login_ajax',);
                    }

                    if (0 === strpos($pathinfo, '/login/bind')) {
                        // login_bind
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::indexAction',));
                        }

                        // login_bind_callback
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/callback$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_callback')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::callbackAction',));
                        }

                        // login_bind_choose
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/choose$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_choose')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::chooseAction',));
                        }

                        // login_bind_new
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/new$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_login_bind_new;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_new')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::newAction',));
                        }
                        not_login_bind_new:

                        // login_bind_newset
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/newset$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_login_bind_newset;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_newset')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::newSetAction',));
                        }
                        not_login_bind_newset:

                        // login_bind_exist
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/exist$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_login_bind_exist;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_exist')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::existAction',));
                        }
                        not_login_bind_exist:

                        // login_bind_existbind
                        if ($pathinfo === '/login/bind/weixinmob/existbind') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_login_bind_existbind;
                            }

                            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::existBindAction',  '_route' => 'login_bind_existbind',);
                        }
                        not_login_bind_existbind:

                    }

                    // login_bind_weixin
                    if ($pathinfo === '/login/weixinmob') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::weixinIndexAction',  '_route' => 'login_bind_weixin',);
                    }

                    // login_check_email
                    if ($pathinfo === '/login/check/email') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginController::checkEmailAction',  '_route' => 'login_check_email',);
                    }

                    // login_bind_change
                    if (0 === strpos($pathinfo, '/login/bind') && preg_match('#^/login/bind/(?P<type>[^/]++)/changetoexist$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_change')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::changeToExistAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/common')) {
            // common_qrcode
            if ($pathinfo === '/common/qrcode') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommonController::qrcodeAction',  '_route' => 'common_qrcode',);
            }

            // common_crontab
            if ($pathinfo === '/common/crontab') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommonController::crontabAction',  '_route' => 'common_crontab',);
            }

        }

        // user_terms
        if ($pathinfo === '/userterms') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::userTermsAction',  '_route' => 'user_terms',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::indexAction',  '_route' => 'register',);
            }

            if (0 === strpos($pathinfo, '/register/su')) {
                // register_success
                if ($pathinfo === '/register/success') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::successAction',  '_route' => 'register_success',);
                }

                // register_submited
                if (0 === strpos($pathinfo, '/register/submited') && preg_match('#^/register/submited/(?P<id>[^/]++)/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_submited')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::submitedAction',));
                }

            }

            if (0 === strpos($pathinfo, '/register/email')) {
                if (0 === strpos($pathinfo, '/register/email/reset')) {
                    // register_reset_email
                    if (preg_match('#^/register/email/reset/(?P<id>[^/]++)/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_reset_email')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::resetEmailAction',));
                    }

                    // register_reset_email_check
                    if ($pathinfo === '/register/email/reset/check') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::resetEmailCheckAction',  '_route' => 'register_reset_email_check',);
                    }

                    // register_reset_email_verify
                    if ($pathinfo === '/register/email/reset/verify') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_register_reset_email_verify;
                        }

                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::resetEmailVerifyAction',  '_route' => 'register_reset_email_verify',);
                    }
                    not_register_reset_email_verify:

                }

                // register_email_send
                if (0 === strpos($pathinfo, '/register/email/send') && preg_match('#^/register/email/send/(?P<id>[^/]++)/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_register_email_send;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_email_send')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::emailSendAction',));
                }
                not_register_email_send:

                // register_email_verify
                if (0 === strpos($pathinfo, '/register/email/verify') && preg_match('#^/register/email/verify/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_email_verify')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::emailVerifyAction',));
                }

                // register_email_check
                if ($pathinfo === '/register/email/check') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::emailCheckAction',  '_route' => 'register_email_check',);
                }

            }

            // register_mobile_check
            if ($pathinfo === '/register/mobile/check') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::mobileCheckAction',  '_route' => 'register_mobile_check',);
            }

            // register_email_or_mobile_check
            if ($pathinfo === '/register/email_or_mobile/check') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::emailOrMobileCheckAction',  '_route' => 'register_email_or_mobile_check',);
            }

            // register_nickname_check
            if ($pathinfo === '/register/nickname/check') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::nicknameCheckAction',  '_route' => 'register_nickname_check',);
            }

            // invitecode_check
            if ($pathinfo === '/register/invitecode/check') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::invitecodeCheckAction',  '_route' => 'invitecode_check',);
            }

            if (0 === strpos($pathinfo, '/register/captcha')) {
                // register_captcha_check
                if ($pathinfo === '/register/captcha/check') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::captchaCheckAction',  '_route' => 'register_captcha_check',);
                }

                // register_captcha_modal
                if ($pathinfo === '/register/captcha/modal') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::captchaModalAction',  '_route' => 'register_captcha_modal',);
                }

            }

            // register_analysis
            if ($pathinfo === '/register/analysis') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::analysisAction',  '_route' => 'register_analysis',);
            }

        }

        // register_captcha_num
        if ($pathinfo === '/captcha_num') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::captchaAction',  '_route' => 'register_captcha_num',);
        }

        if (0 === strpos($pathinfo, '/file')) {
            // file_upload
            if ($pathinfo === '/file/upload') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_file_upload;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\FileController::uploadAction',  '_route' => 'file_upload',);
            }
            not_file_upload:

            // file_img_crop
            if ($pathinfo === '/file/img/crop') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_file_img_crop;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\FileController::cropImgAction',  '_route' => 'file_img_crop',);
            }
            not_file_img_crop:

        }

        if (0 === strpos($pathinfo, '/attachment')) {
            // attachment_upload
            if ($pathinfo === '/attachment/upload') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_attachment_upload;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AttachmentController::uploadAction',  '_route' => 'attachment_upload',);
            }
            not_attachment_upload:

            // attachment_list
            if (0 === strpos($pathinfo, '/attachments') && preg_match('#^/attachments/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_attachment_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'attachment_list')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AttachmentController::listAction',));
            }
            not_attachment_list:

            // attachment_item_show
            if (0 === strpos($pathinfo, '/attachment/file') && preg_match('#^/attachment/file/(?P<fileId>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_attachment_item_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'attachment_item_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AttachmentController::fileShowAction',));
            }
            not_attachment_item_show:

            // attachment_preview
            if (preg_match('#^/attachment/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_attachment_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'attachment_preview')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AttachmentController::previewAction',));
            }
            not_attachment_preview:

            // attachment_download
            if (preg_match('#^/attachment/(?P<id>[^/]++)/download$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_attachment_download;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'attachment_download')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AttachmentController::downloadAction',));
            }
            not_attachment_download:

            // attachment_delete
            if (preg_match('#^/attachment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_attachment_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'attachment_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AttachmentController::deleteAction',));
            }
            not_attachment_delete:

            // attachment_form_fields
            if (preg_match('#^/attachment/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)/formFields$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_attachment_form_fields;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'attachment_form_fields')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AttachmentController::formFieldsAction',  'targetId' => 0,));
            }
            not_attachment_form_fields:

        }

        if (0 === strpos($pathinfo, '/upload')) {
            if (0 === strpos($pathinfo, '/uploader')) {
                // uploader_entry
                if ($pathinfo === '/uploader') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::entryAction',  '_route' => 'uploader_entry',);
                }

                // uploader_init
                if ($pathinfo === '/uploader/init') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_uploader_init;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::initAction',  '_route' => 'uploader_init',);
                }
                not_uploader_init:

                // uploader_auth
                if ($pathinfo === '/uploader/auth') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_uploader_auth;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::uploadAuthAction',  '_route' => 'uploader_auth',);
                }
                not_uploader_auth:

                // uploader_batch_uplod
                if ($pathinfo === '/uploader/batch_upload') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::batchUploadAction',  '_route' => 'uploader_batch_uplod',);
                }

                // uploader_finished
                if ($pathinfo === '/uploader/finished') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_uploader_finished;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::finishedAction',  '_route' => 'uploader_finished',);
                }
                not_uploader_finished:

                // uploader_upload_callback
                if ($pathinfo === '/uploader/upload_callback') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_uploader_upload_callback;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::uploadCallbackAction',  '_route' => 'uploader_upload_callback',);
                }
                not_uploader_upload_callback:

                // uploader_process_callback
                if ($pathinfo === '/uploader/process_callback') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_uploader_process_callback;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::processCallbackAction',  '_route' => 'uploader_process_callback',);
                }
                not_uploader_process_callback:

                if (0 === strpos($pathinfo, '/uploader/chunks')) {
                    // uploader_chunks_start
                    if ($pathinfo === '/uploader/chunks/start') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::chunksStartAction',  '_route' => 'uploader_chunks_start',);
                    }

                    // uploader_chunks_finish
                    if ($pathinfo === '/uploader/chunks/finish') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploaderController::chunksFinishAction',  '_route' => 'uploader_chunks_finish',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/uploadfile')) {
                // uploadfile_upload
                if ($pathinfo === '/uploadfile/upload') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_uploadfile_upload;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::uploadAction',  '_route' => 'uploadfile_upload',);
                }
                not_uploadfile_upload:

                // uploadfile_browser
                if ($pathinfo === '/uploadfile/browser') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::browserAction',  '_route' => 'uploadfile_browser',);
                }

                // uploadfile_params
                if ($pathinfo === '/uploadfile/params') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::paramsAction',  '_route' => 'uploadfile_params',);
                }

                // uploadfile_browsers
                if ($pathinfo === '/uploadfile/browsers') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::browsersAction',  '_route' => 'uploadfile_browsers',);
                }

                if (0 === strpos($pathinfo, '/uploadfile/cloud_c')) {
                    // uploadfile_cloud_callback
                    if ($pathinfo === '/uploadfile/cloud_callback') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::cloudCallbackAction',  '_route' => 'uploadfile_cloud_callback',);
                    }

                    if (0 === strpos($pathinfo, '/uploadfile/cloud_convertcallback')) {
                        // uploadfile_cloud_convert_callback
                        if ($pathinfo === '/uploadfile/cloud_convertcallback') {
                            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::cloudConvertCallbackAction',  '_route' => 'uploadfile_cloud_convert_callback',);
                        }

                        // uploadfile_cloud_convert_callback2
                        if ($pathinfo === '/uploadfile/cloud_convertcallback2') {
                            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::cloudConvertCallback2Action',  '_route' => 'uploadfile_cloud_convert_callback2',);
                        }

                        // uploadfile_cloud_convert_callback3
                        if ($pathinfo === '/uploadfile/cloud_convertcallback3') {
                            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::cloudConvertCallback3Action',  '_route' => 'uploadfile_cloud_convert_callback3',);
                        }

                    }

                }

                // uploadfile_cloud_get_media_info
                if (0 === strpos($pathinfo, '/uploadfile/get_media_info') && preg_match('#^/uploadfile/get_media_info/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'uploadfile_cloud_get_media_info')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::getMediaInfoAction',));
                }

            }

        }

        // hls_playlist
        if (0 === strpos($pathinfo, '/hls') && preg_match('#^/hls/(?P<id>[^/]++)/playlist/(?P<token>[^/\\.]++)\\.m3u8$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hls_playlist')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\HLSController::playlistAction',));
        }

        // player_local_media
        if (0 === strpos($pathinfo, '/player') && preg_match('#^/player/(?P<id>[^/]++)/file/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'player_local_media')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PlayerController::localMediaAction',));
        }

        if (0 === strpos($pathinfo, '/hls')) {
            // hls_stream
            if (preg_match('#^/hls/(?P<id>[^/]++)/stream/(?P<level>[^/]++)/(?P<token>[^/\\.]++)\\.m3u8$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hls_stream')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\HLSController::streamAction',));
            }

            // hls_clef
            if (preg_match('#^/hls/(?P<id>[^/]++)/clef/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hls_clef')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\HLSController::clefAction',));
            }

        }

        if (0 === strpos($pathinfo, '/editor')) {
            // editor_upload
            if ($pathinfo === '/editor/upload') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_editor_upload;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EditorController::uploadAction',  '_route' => 'editor_upload',);
            }
            not_editor_upload:

            // editor_download
            if ($pathinfo === '/editor/download') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_editor_download;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EditorController::downloadAction',  '_route' => 'editor_download',);
            }
            not_editor_download:

        }

        if (0 === strpos($pathinfo, '/live')) {
            // liveroom_ticket
            if (0 === strpos($pathinfo, '/liveroom') && preg_match('#^/liveroom/(?P<id>[^/]++)/ticket$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liveroom_ticket')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveroomController::ticketAction',));
            }

            // live_auth
            if ($pathinfo === '/live/auth') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveAuthController::indexAction',  '_route' => 'live_auth',);
            }

            // live_verify
            if ($pathinfo === '/live/verify') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::verifyAction',  '_route' => 'live_verify',);
            }

            // live_course_explore
            if ($pathinfo === '/live') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::exploreAction',  '_route' => 'live_course_explore',);
            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // live_course_play
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/live_entry$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_play')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::entryAction',));
            }

            // live_classroom_url
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/get_classroom_url$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_classroom_url')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::getClassroomUrlAction',));
            }

            // live_classroom_replay_url
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/replay/(?P<courseLessonReplayId>[^/]++)/get_replay_url$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_classroom_replay_url')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::getReplayUrlAction',));
            }

        }

        if (0 === strpos($pathinfo, '/live')) {
            if (0 === strpos($pathinfo, '/livecourse')) {
                // live_course_manage_replay
                if (preg_match('#^/livecourse/(?P<id>[^/]++)/manage/replay$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_manage_replay')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::replayManageAction',));
                }

                // live_course_lesson_replay_create
                if (preg_match('#^/livecourse/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/replay/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_lesson_replay_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::replayCreateAction',));
                }

                // live_course_lesson_replay_upload
                if (preg_match('#^/livecourse/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/replay/upload$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_lesson_replay_upload')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::uploadModalAction',));
                }

                // live_course_lesson_replay_entry
                if (preg_match('#^/livecourse/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/replay/(?P<courseLessonReplayId>[^/]++)/entry$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_lesson_replay_entry')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::entryReplayAction',));
                }

            }

            // live_capacity
            if (0 === strpos($pathinfo, '/live_capacity') && preg_match('#^/live_capacity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_capacity')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::liveCapacityAction',));
            }

        }

        // course_explore
        if (0 === strpos($pathinfo, '/course/explore') && preg_match('#^/course/explore(?:/(?P<category>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_explore')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::exploreAction',  'category' => '',));
        }

        if (0 === strpos($pathinfo, '/archive/course')) {
            // course_archive
            if ($pathinfo === '/archive/course') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::archiveAction',  '_route' => 'course_archive',);
            }

            // course_archive_show
            if (preg_match('#^/archive/course/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_archive_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::archiveCourseAction',));
            }

            // course_archive_lesson
            if (preg_match('#^/archive/course/(?P<id>[^/]++)/lesson(?:/(?P<lessonId>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_archive_lesson')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::archiveLessonAction',  'lessonId' => '',));
            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_create
            if ($pathinfo === '/course/create') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::createAction',  '_route' => 'course_create',);
            }

            // course_select
            if ($pathinfo === '/course/select') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::selectAction',  '_route' => 'course_select',);
            }

            // course_show
            if (preg_match('#^/course/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::showAction',));
            }

            // course_qrcode
            if (preg_match('#^/course/(?P<id>[^/]++)/qrcode$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_qrcode')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::qrcodeAction',));
            }

            // course_info
            if (preg_match('#^/course/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_info')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::infoAction',));
            }

            // course_lesson_list
            if (preg_match('#^/course/(?P<id>[^/]++)/lesson/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_list')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::lessonListAction',));
            }

            // course_notes
            if (preg_match('#^/course/(?P<courseId>[^/]++)/notes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_notes')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\Course\\NoteController::showListAction',));
            }

            // course_exit
            if (preg_match('#^/course/(?P<id>[^/]++)/exit$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_exit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_exit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::exitAction',));
            }
            not_course_exit:

            // course_become_use_member
            if (preg_match('#^/course/(?P<id>[^/]++)/become_use_member$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_become_use_member;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_become_use_member')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::becomeUseMemberAction',));
            }
            not_course_become_use_member:

            // course_member_ids
            if (preg_match('#^/course/(?P<id>[^/]++)/member_ids$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_member_ids')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::memberIdsAction',));
            }

            // course_rebuy
            if (preg_match('#^/course/(?P<courseId>[^/]++)/course_rebuy$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_rebuy')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::rebuyAction',));
            }

        }

        // coupon_check
        if (preg_match('#^/(?P<type>[^/]++)/(?P<id>[^/]++)/coupon/check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OrderController::couponCheckAction',));
        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_order_buy
            if (preg_match('#^/course/(?P<id>[^/]++)/order/buy$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_order_buy')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::buyAction',));
            }

            if (0 === strpos($pathinfo, '/course/order')) {
                // course_order_repay
                if ($pathinfo === '/course/order/repay') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::repayAction',  '_route' => 'course_order_repay',);
                }

                // course_order_detail
                if (preg_match('#^/course/order/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_order_detail')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::orderDetailAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/target')) {
            // order_refund
            if (preg_match('#^/target/(?P<id>[^/]++)/order/refund$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_refund')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OrderRefundController::refundAction',));
            }

            // order_cancel_refund
            if (preg_match('#^/target/(?P<id>[^/]++)/order/cancel_refund$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_order_cancel_refund;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_cancel_refund')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OrderRefundController::cancelRefundAction',));
            }
            not_order_cancel_refund:

        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_set_expiryday
            if (preg_match('#^/course/(?P<courseId>[^/]++)/set_expiryday/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_set_expiryday')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::addMemberExpiryDaysAction',));
            }

            // course_learn
            if (preg_match('#^/course/(?P<id>[^/]++)/learn$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_learn')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::learnAction',));
            }

            // course_learn_time
            if (preg_match('#^/course/(?P<lessonId>[^/]++)/learn/time/(?P<time>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_learn_time')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::recordLearningTimeAction',));
            }

            // course_watch_time
            if (preg_match('#^/course/(?P<lessonId>[^/]++)/watch/time/(?P<time>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_watch_time')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::recordWatchingTimeAction',));
            }

            // course_detail_data
            if (0 === strpos($pathinfo, '/course/detail/data') && preg_match('#^/course/detail/data/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_detail_data')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::detailDataAction',));
            }

            // course_lesson_detail_data
            if (0 === strpos($pathinfo, '/course/lesson/detail/data') && preg_match('#^/course/lesson/detail/data/(?P<courseId>[^/]++)/(?P<lessonId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_detail_data')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::detailDataAction',));
            }

            // course_lesson_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::showAction',));
            }

            // course_lesson_qrcode
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/qrcode$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_qrcode')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::qrcodeAction',));
            }

            // course_lesson_player
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/player$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_player')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::playerAction',));
            }

            // course_lesson_preview
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_preview')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::previewAction',));
            }

            // course_lessons_preview
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lessons/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lessons_preview')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::previewAction',));
            }

            // course_lesson_media
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/media$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_media')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::mediaAction',));
            }

            // course_lesson_media_download
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/media_download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_media_download')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::mediaDownloadAction',));
            }

            // course_lesson_ppt
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/ppt$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_ppt')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::pptAction',));
            }

            // course_lesson_document
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/document$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_document')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::documentAction',));
            }

            // course_lesson_flash
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/flash$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_flash')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::flashAction',));
            }

            // course_lesson_learn_status
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn/status$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_learn_status')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::learnStatusAction',));
            }

            // course_lesson_learn_start
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn/start$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_learn_start;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_learn_start')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::learnStartAction',));
            }
            not_course_lesson_learn_start:

            // course_lesson_learn_finish
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn/finish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_learn_finish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_learn_finish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::learnFinishAction',));
            }
            not_course_lesson_learn_finish:

            // course_lesson_learn_cancel
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn/cancel$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_learn_cancel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_learn_cancel')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::learnCancelAction',));
            }
            not_course_lesson_learn_cancel:

        }

        if (0 === strpos($pathinfo, '/lessonplugin')) {
            // course_lesson_plugin_lesson_list
            if ($pathinfo === '/lessonplugin/lesson/list') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonLessonPluginController::listAction',  '_route' => 'course_lesson_plugin_lesson_list',);
            }

            if (0 === strpos($pathinfo, '/lessonplugin/question')) {
                // course_lesson_plugin_question_init
                if ($pathinfo === '/lessonplugin/question/init') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::initAction',  '_route' => 'course_lesson_plugin_question_init',);
                }

                // course_lesson_plugin_question_list
                if ($pathinfo === '/lessonplugin/question/list') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::listAction',  '_route' => 'course_lesson_plugin_question_list',);
                }

                // course_lesson_plugin_question_show
                if ($pathinfo === '/lessonplugin/question/show') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::showAction',  '_route' => 'course_lesson_plugin_question_show',);
                }

                // course_lesson_plugin_question_ask
                if ($pathinfo === '/lessonplugin/question/ask') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::askAction',  '_route' => 'course_lesson_plugin_question_ask',);
                }

                // course_lesson_plugin_question_create
                if ($pathinfo === '/lessonplugin/question/create') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::createAction',  '_route' => 'course_lesson_plugin_question_create',);
                }

                // course_lesson_plugin_question_answer
                if ($pathinfo === '/lessonplugin/question/answer') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::answerAction',  '_route' => 'course_lesson_plugin_question_answer',);
                }

            }

            // course_lesson_plugin_material_init
            if ($pathinfo === '/lessonplugin/material/init') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonMaterialPluginController::initAction',  '_route' => 'course_lesson_plugin_material_init',);
            }

            if (0 === strpos($pathinfo, '/lessonplugin/note')) {
                // course_lesson_plugin_note_init
                if ($pathinfo === '/lessonplugin/note/init') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonNotePluginController::initAction',  '_route' => 'course_lesson_plugin_note_init',);
                }

                // course_lesson_plugin_note_save
                if ($pathinfo === '/lessonplugin/note/save') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_course_lesson_plugin_note_save;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonNotePluginController::saveAction',  '_route' => 'course_lesson_plugin_note_save',);
                }
                not_course_lesson_plugin_note_save:

            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_review_create
            if (preg_match('#^/course/(?P<id>[^/]++)/review/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_review_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_review_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseReviewController::createAction',));
            }
            not_course_review_create:

            // course_review_list
            if (preg_match('#^/course/(?P<id>[^/]++)/reviews/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'course_review_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_review_list')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseReviewController::listAction',));
            }

            // course_members
            if (preg_match('#^/course/(?P<id>[^/]++)/members$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_members')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::membersAction',));
            }

            // course_favorite
            if (preg_match('#^/course/(?P<id>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_favorite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_favorite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::favoriteAction',));
            }
            not_course_favorite:

            // course_unfavorite
            if (preg_match('#^/course/(?P<id>[^/]++)/unfavorite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_unfavorite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_unfavorite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::unfavoriteAction',));
            }
            not_course_unfavorite:

            // course_materials
            if (preg_match('#^/course/(?P<id>[^/]++)/material/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'course_materials');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_materials')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialController::indexAction',));
            }

            // course_material_download
            if (preg_match('#^/course/(?P<courseId>[^/]++)/material/(?P<materialId>[^/]++)/download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_material_download')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialController::downloadAction',));
            }

            // course_material_delete
            if (preg_match('#^/course/(?P<id>[^/]++)/material/(?P<materialId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_material_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_material_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialController::deleteAction',));
            }
            not_course_material_delete:

            // course_threads
            if (preg_match('#^/course/(?P<id>[^/]++)/thread$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_threads')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::indexAction',));
            }

            // course_thread_create
            if (preg_match('#^/course/(?P<id>[^/]++)/thread/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::createAction',));
            }

            // course_thread_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::showAction',));
            }

            // course_thread_post
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/post$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_post')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::postAction',));
            }

            // course_thread_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::editAction',));
            }

            // course_thread_post_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<threadId>[^/]++)/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_post_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_post_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::deletePostAction',));
            }
            not_course_thread_post_delete:

            // course_thread_post_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<threadId>[^/]++)/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_post_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::editPostAction',));
            }

            // course_thread_stick
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/stick$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_stick;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_stick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::stickAction',));
            }
            not_course_thread_stick:

            // course_thread_unstick
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/unstick$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_unstick;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_unstick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::unstickAction',));
            }
            not_course_thread_unstick:

            // course_thread_elite
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/elite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_elite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_elite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::eliteAction',));
            }
            not_course_thread_elite:

            // course_thread_unelite
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/unelite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_unelite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_unelite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::uneliteAction',));
            }
            not_course_thread_unelite:

            // course_thread_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::deleteAction',));
            }
            not_course_thread_delete:

            // course_manage
            if (preg_match('#^/course/(?P<id>[^/]++)/manage$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::indexAction',));
            }

            // course_manage_base
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/base$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_base')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::baseAction',));
            }

            // course_manage_detail
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_detail')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::detailAction',));
            }

            // course_manage_picture
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/picture$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_picture')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::pictureAction',));
            }

            // course_manage_picture_crop
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/picture/crop$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_picture_crop')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::pictureCropAction',));
            }

            // course_manage_price
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/price$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_price')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::priceAction',));
            }

            // course_manage_teachers
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/teachers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_teachers')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::teachersAction',));
            }

            // course_manage_data
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/data$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_data')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::dataAction',));
            }

            if (0 === strpos($pathinfo, '/course/manage/course/sync')) {
                // course_manage_course_sync
                if (preg_match('#^/course/manage/course/sync/(?P<id>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_course_sync')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::courseSyncAction',));
                }

                // course_manage_course_sync_edit
                if ($pathinfo === '/course/manage/course/sync/edit') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::courseSyncEditAction',  '_route' => 'course_manage_course_sync_edit',);
                }

            }

            // course_manage_order
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_order')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::orderAction',));
            }

            // course_manage_order_export_csv
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/order/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_order_export_csv')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::orderExportCsvAction',));
            }

            // course_manage_files
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/files$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_files')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::indexAction',));
            }

            // course_manage_file_show
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/file/(?P<fileId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_file_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::showAction',));
            }

            // course_manage_file_convert
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/file/(?P<fileId>[^/]++)/convert$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_file_convert;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_file_convert')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::convertAction',));
            }
            not_course_manage_file_convert:

            // course_manage_file_status
            if ($pathinfo === '/course/manage/file/status') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::fileStatusAction',  '_route' => 'course_manage_file_status',);
            }

            // course_manage_delete_materials
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/delete/materials$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_delete_materials;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_delete_materials')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::deleteCourseFilesAction',));
            }
            not_course_manage_delete_materials:

            // course_manage_delete_materials_show
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/show/delete/materials$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_delete_materials_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_delete_materials_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::deleteMaterialShowAction',));
            }
            not_course_manage_delete_materials_show:

            // course_manage_upload_course_files
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/upload/course/files/(?P<targetType>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_upload_course_files')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::uploadCourseFilesAction',));
            }

            // course_manage_students
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/students$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_students')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::indexAction',));
            }

            // course_manage_record
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/refund_record$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_record')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::refundRecordAction',));
            }

            // course_manage_students_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/students/(?P<userId>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_students_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::showAction',));
            }

            // course_manage_students_defined_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/students/(?P<userId>[^/]++)/defined_show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_students_defined_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::definedShowAction',));
            }

            // course_manage_student_create
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/student/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::createAction',));
            }

            // course_manage_student_export_csv
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/student/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_export_csv')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::exportCsvAction',));
            }

            // course_manage_student_remove
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/student/(?P<userId>[^/]++)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_student_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_remove')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::removeAction',));
            }
            not_course_manage_student_remove:

            // course_manage_student_remark
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/student/(?P<userId>[^/]++)/remark$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_remark')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::remarkAction',));
            }

            // course_manage_student_check
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/student_check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::checkStudentAction',));
            }

            // course_manage_student_import
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/student/import$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_import')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::importAction',));
            }

            // course_manage_student_to_base
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/student/importing$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_student_to_base;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_to_base')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::excelDataImportAction',));
            }
            not_course_manage_student_to_base:

            // course_manage_teachers_match
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/teachersMatch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_teachers_match')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::teachersMatchAction',));
            }

            // course_manage_live_open_time_set
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/live/open/time$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_live_open_time_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::liveOpenTimeSetAction',));
            }

            // course_manage_lesson
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::indexAction',));
            }

            // course_manage_lesson_create
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::createAction',));
            }

            // course_manage_lesson_file_status
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson/fileStatus$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_file_status')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::fileStatusAction',));
            }

            if (0 === strpos($pathinfo, '/course/draft')) {
                // course_draft_create
                if ($pathinfo === '/course/draft/create') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::draftCreateAction',  '_route' => 'course_draft_create',);
                }

                // course_draft_view
                if ($pathinfo === '/course/draft/view') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::viewDraftAction',  '_route' => 'course_draft_view',);
                }

            }

            // live_course_manage_lesson_create
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/live/lesson/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_manage_lesson_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::createAction',));
            }

            // live_course_manage_lesson_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/live/lesson/(?P<lessonId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_manage_lesson_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::editAction',));
            }

            // live_lesson_time_check
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/live/lesson/time/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_lesson_time_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::lessonTimeCheckAction',));
            }

            // live_lesson_calculate_left_capacity
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/livelesson/calculateLeftCapacity$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_lesson_calculate_left_capacity')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::calculateLeftCapacityAction',));
            }

            // course_manage_lesson_create_testpaper
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson/create/testpaper$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_create_testpaper')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::createTestpaperAction',));
            }

            // course_manage_lesson_sort
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson/sort$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_lesson_sort;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_sort')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::sortAction',));
            }
            not_course_manage_lesson_sort:

            // course_manage_lesson_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::editAction',));
            }

            // course_manage_lesson_edit_testpaper
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/edit/testpaper$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_edit_testpaper')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::editTestpaperAction',));
            }

            // course_manage_lesson_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_lesson_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::deleteAction',));
            }
            not_course_manage_lesson_delete:

            // course_manage_lesson_publish
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_lesson_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_publish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::publishAction',));
            }
            not_course_manage_lesson_publish:

            // course_manage_lesson_unpublish
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/unpublish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_lesson_unpublish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_unpublish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::unpublishAction',));
            }
            not_course_manage_lesson_unpublish:

        }

        // question_file_url
        if ($pathinfo === '/question_ajax/file_url') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionController::fileUrlAction',  '_route' => 'question_file_url',);
        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_manage_question
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::indexAction',));
            }

            // course_manage_question_create
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/create/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::createAction',));
            }

            // course_manage_question_update
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::updateAction',));
            }

            // course_manage_question_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::deleteAction',));
            }
            not_course_manage_question_delete:

            // course_manage_question_deletes
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/deletes$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_deletes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_deletes')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::deletesAction',));
            }
            not_course_manage_question_deletes:

            // course_manage_question_preview
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_preview')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::previewAction',));
            }

            // course_manage_upload_question_attachment
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/upload/question/attachment/(?P<targetType>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_upload_question_attachment')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::uploadAttachmentsAction',));
            }

            // course_manage_question_attachment_download
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/question/attachment/(?P<fileId>[^/]++)/download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_attachment_download')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::attachmentDownloadAction',));
            }

            // course_manage_question_category
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::indexAction',));
            }

            // course_manage_question_category_create
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::createAction',));
            }

            // course_manage_question_category_update
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::updateAction',));
            }

            // course_manage_question_category_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::deleteAction',));
            }
            not_course_manage_question_category_delete:

            // course_manage_question_category_sort
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category/sort$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_category_sort;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category_sort')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::sortAction',));
            }
            not_course_manage_question_category_sort:

        }

        // course_manage_real_time_testpaper_check
        if ($pathinfo === '/testpaper/real-time/check') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::realTimeCheckAction',  '_route' => 'course_manage_real_time_testpaper_check',);
        }

        if (0 === strpos($pathinfo, '/lesson')) {
            // course_lesson_do_test
            if (preg_match('#^/lesson/(?P<lessonId>[^/]++)/test/(?P<testId>[^/]++)/do$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_do_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::doTestpaperAction',));
            }

            // course_lesson_redo_test
            if (preg_match('#^/lesson/(?P<lessonId>[^/]++)/test/(?P<testId>[^/]++)/redo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_redo_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::reDoTestpaperAction',));
            }

        }

        if (0 === strpos($pathinfo, '/test')) {
            // course_manage_show_test
            if (preg_match('#^/test/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_show_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::showTestAction',));
            }

            // course_manage_preview_test
            if (preg_match('#^/test/(?P<testId>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_preview_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::previewTestAction',));
            }

            // course_manage_do_test_pause
            if ($pathinfo === '/test/pause') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::pauseTestAction',  '_route' => 'course_manage_do_test_pause',);
            }

            // course_manage_do_test_suspend
            if (preg_match('#^/test/(?P<id>[^/]++)/suspend$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_do_test_suspend')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::testSuspendAction',));
            }

            // course_manage_submit_test
            if (preg_match('#^/test/(?P<id>[^/]++)/submit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_submit_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::submitTestAction',));
            }

            // course_manage_finish_test
            if (preg_match('#^/test/(?P<id>[^/]++)/finish$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_finish_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::finishTestAction',));
            }

            // course_manage_test_results
            if (preg_match('#^/test/(?P<id>[^/]++)/result$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_test_results')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::testResultAction',));
            }

            // course_manage_test_teacher_check
            if (preg_match('#^/test/(?P<id>[^/]++)/teacher/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_test_teacher_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::teacherCheckAction',));
            }

        }

        if (0 === strpos($pathinfo, '/my/teacher')) {
            // course_manage_list_teacher_test_reviewing
            if ($pathinfo === '/my/teacher/reviewing/test/list') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::listReviewingTestAction',  '_route' => 'course_manage_list_teacher_test_reviewing',);
            }

            // course_manage_list_teacher_test_finished
            if ($pathinfo === '/my/teacher/finished/test/list') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::listFinishedTestAction',  '_route' => 'course_manage_list_teacher_test_finished',);
            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_manage_testpaper
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::indexAction',));
            }

            // course_manage_test_check
            if (0 === strpos($pathinfo, '/course/check') && preg_match('#^/course/check/(?P<id>[^/]++)/(?P<status>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_test_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::teacherCheckInCourseAction',));
            }

            // course_manage_testpaper_create
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::createAction',));
            }

            // course_manage_testpaper_build_check
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/build_check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_build_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::buildCheckAction',));
            }

            // course_manage_testpaper_update
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::updateAction',));
            }

            // course_manage_testpaper_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_testpaper_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::deleteAction',));
            }
            not_course_manage_testpaper_delete:

            // course_manage_testpaper_deletes
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/deletes$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_testpaper_deletes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_deletes')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::deletesAction',));
            }
            not_course_manage_testpaper_deletes:

            // course_manage_testpaper_publish
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_publish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::publishAction',));
            }

            // course_manage_testpaper_close
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_close')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::closeAction',));
            }

            // course_manage_testpaper_items
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/items$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_items')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemsAction',));
            }

            // course_manage_testpaper_items_get
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/items_get$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_items_get')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemsGetAction',));
            }

            // course_manage_testpaper_items_reset
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/items_reset$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_items_reset')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemsResetAction',));
            }

            // course_manage_testpaper_item_picker
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/item_picker$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_item_picker')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemPickerAction',));
            }

            // course_manage_testpaper_item_picked
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/item_picked$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_item_picked')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemPickedAction',));
            }

            // course_manage_testpaper_get_question_num
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/get_question_num$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_get_question_num')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::getQuestionCountGroupByTypesAction',));
            }

            // course_manage_chapter_create
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/chapter/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_chapter_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseChapterManageController::createAction',));
            }

            // course_manage_chapter_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/chapter/(?P<chapterId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_chapter_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseChapterManageController::editAction',));
            }

            // course_manage_chapter_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/chapter/(?P<chapterId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_chapter_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_chapter_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseChapterManageController::deleteAction',));
            }
            not_course_manage_chapter_delete:

            // course_manage_material
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/material$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_material')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialManageController::indexAction',));
            }

            // course_manage_material_upload
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/material/upload$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_material_upload;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_material_upload')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialManageController::uploadAction',));
            }
            not_course_manage_material_upload:

            // course_manage_material_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/material/(?P<materialId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_material_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_material_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialManageController::deleteAction',));
            }
            not_course_manage_material_delete:

            // course_manage_material_browser
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/material/browser$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_material_browser')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialManageController::browserAction',));
            }

            // course_manage_material_create
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/material/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_material_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialManageController::createAction',));
            }

            // course_manage_media_library
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/media/library$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_media_library')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMediaManageController::libraryAction',));
            }

            // course_manage_media_import
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/media/import$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_media_import')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMediaManageController::importAction',));
            }

            // course_manage_publish
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_publish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::publishAction',));
            }
            not_course_manage_publish:

            // course_lesson_marker_manage
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/marker/manage$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_marker_manage')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MarkerController::manageAction',));
            }

            if (0 === strpos($pathinfo, '/course/lesson')) {
                // course_lesson_marker_show
                if (preg_match('#^/course/lesson/(?P<lessonId>[^/]++)/marker/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_marker_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MarkerController::showMarkersAction',));
                }

                // course_lesson_marker_metas
                if (preg_match('#^/course/lesson/(?P<mediaId>[^/]++)/marker/metas$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_marker_metas')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MarkerController::markerMetasAction',));
                }

            }

            // course_lesson_marker_merge
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/marker/merge$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_marker_merge;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_marker_merge')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MarkerController::mergeAction',));
            }
            not_course_lesson_marker_merge:

            // course_lesson_marker_update
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/marker/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_marker_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_marker_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MarkerController::updateMarkerAction',));
            }
            not_course_lesson_marker_update:

            if (0 === strpos($pathinfo, '/course/lesson/m')) {
                // course_lesson_question_markers_show
                if (0 === strpos($pathinfo, '/course/lesson/media') && preg_match('#^/course/lesson/media/(?P<mediaId>[^/]++)/question_markers/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_question_markers_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionMarkerController::showQuestionMakersAction',));
                }

                // course_lesson_question_marker_finish
                if (0 === strpos($pathinfo, '/course/lesson/marker') && preg_match('#^/course/lesson/marker/(?P<markerId>[^/]++)/question_marker/(?P<questionMarkerId>[^/]++)/finish$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_course_lesson_question_marker_finish;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_question_marker_finish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionMarkerController::finishQuestionMarkerAction',));
                }
                not_course_lesson_question_marker_finish:

            }

            // course_lesson_question_marker_add
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/question_marker/add$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_question_marker_add;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_question_marker_add')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionMarkerController::addQuestionMarkerAction',));
            }
            not_course_lesson_question_marker_add:

            // course_lesson_question_marker_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/question_marker/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_question_marker_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_question_marker_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionMarkerController::deleteQuestionMarkerAction',));
            }
            not_course_lesson_question_marker_delete:

            // course_lesson_question_marker_sort
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/question_marker/sort$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_question_marker_sort;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_question_marker_sort')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionMarkerController::sortQuestionMarkerAction',));
            }
            not_course_lesson_question_marker_sort:

            // course_lesson_question_marker_list
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/question_marker/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_question_marker_list')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionMarkerController::questionAction',));
            }

            // course_lesson_question_marker_search
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/question_marker/search$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_question_marker_search')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionMarkerController::searchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/announcement')) {
            // announcement_list
            if (preg_match('#^/announcement/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announcement_list')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AnnouncementController::listAction',));
            }

            // announcement_show_all
            if (preg_match('#^/announcement/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)/all$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announcement_show_all')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AnnouncementController::showAllAction',));
            }

            // announcement_add
            if (preg_match('#^/announcement/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announcement_add')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AnnouncementController::createAction',));
            }

            // announcement_show
            if (preg_match('#^/announcement/(?P<id>[^/]++)/(?P<targetId>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announcement_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AnnouncementController::showAction',));
            }

            // announcement_manage
            if (preg_match('#^/announcement/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)/manage$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announcement_manage')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AnnouncementController::manageAction',));
            }

            // announcement_update
            if (preg_match('#^/announcement/(?P<id>[^/]++)/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announcement_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AnnouncementController::updateAction',));
            }

            // announcement_delete
            if (preg_match('#^/announcement/(?P<id>[^/]++)/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_announcement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announcement_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AnnouncementController::deleteAction',));
            }
            not_announcement_delete:

        }

        // testpaper_user_result_json
        if (0 === strpos($pathinfo, '/testpaper') && preg_match('#^/testpaper/(?P<id>[^/]++)/user_result/json$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'testpaper_user_result_json')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::userResultJsonAction',));
        }

        // search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SearchController::indexAction',  '_route' => 'search',);
        }

        // cloud_search
        if ($pathinfo === '/cloud/search') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SearchController::cloudSearchAction',  '_route' => 'cloud_search',);
        }

        if (0 === strpos($pathinfo, '/settings')) {
            // settings
            if (rtrim($pathinfo, '/') === '/settings') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'settings');
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::profileAction',  '_route' => 'settings',);
            }

            if (0 === strpos($pathinfo, '/settings/avatar')) {
                // settings_avatar
                if ($pathinfo === '/settings/avatar') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::avatarAction',  '_route' => 'settings_avatar',);
                }

                if (0 === strpos($pathinfo, '/settings/avatar/crop')) {
                    // settings_avatar_crop
                    if ($pathinfo === '/settings/avatar/crop') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::avatarCropAction',  '_route' => 'settings_avatar_crop',);
                    }

                    // settings_avatar_crop_modal
                    if ($pathinfo === '/settings/avatar/crop/modal') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::avatarCropModalAction',  '_route' => 'settings_avatar_crop_modal',);
                    }

                }

                // settings_avatar_fetch_partner
                if ($pathinfo === '/settings/avatar/fetch_partner') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_settings_avatar_fetch_partner;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::avatarFetchPartnerAction',  '_route' => 'settings_avatar_fetch_partner',);
                }
                not_settings_avatar_fetch_partner:

            }

            if (0 === strpos($pathinfo, '/settings/se')) {
                // settings_security
                if ($pathinfo === '/settings/security') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::securityAction',  '_route' => 'settings_security',);
                }

                if (0 === strpos($pathinfo, '/settings/set_pa')) {
                    // settings_set_pay_password
                    if ($pathinfo === '/settings/set_pay_password') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::setPayPasswordAction',  '_route' => 'settings_set_pay_password',);
                    }

                    // settings_set_password
                    if ($pathinfo === '/settings/set_password') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::setPasswordAction',  '_route' => 'settings_set_password',);
                    }

                }

            }

            // settings_pay_password
            if ($pathinfo === '/settings/pay_password') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::payPasswordAction',  '_route' => 'settings_pay_password',);
            }

            // settings_reset_pay_password
            if ($pathinfo === '/settings/reset_pay_password') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::resetPayPasswordAction',  '_route' => 'settings_reset_pay_password',);
            }

            // settings_find_pay_password
            if ($pathinfo === '/settings/find_pay_password') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::findPayPasswordAction',  '_route' => 'settings_find_pay_password',);
            }

            // settings_update_pay_password
            if ($pathinfo === '/settings/update_pay_password') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::updatePayPasswordAction',  '_route' => 'settings_update_pay_password',);
            }

            // settings_security_questions
            if ($pathinfo === '/settings/security_questions') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::securityQuestionsAction',  '_route' => 'settings_security_questions',);
            }

            if (0 === strpos($pathinfo, '/settings/nickname')) {
                // setting_nickname
                if ($pathinfo === '/settings/nickname') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::nicknameAction',  '_route' => 'setting_nickname',);
                }

                // update_nickname_check
                if ($pathinfo === '/settings/nickname/check') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::nicknameCheckAction',  '_route' => 'update_nickname_check',);
                }

            }

            // settings_password
            if ($pathinfo === '/settings/password') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::passwordAction',  '_route' => 'settings_password',);
            }

            if (0 === strpos($pathinfo, '/settings/email')) {
                // settings_email
                if ($pathinfo === '/settings/email') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::emailAction',  '_route' => 'settings_email',);
                }

                // settings_email_verify
                if ($pathinfo === '/settings/email/verify') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_settings_email_verify;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::emailVerifyAction',  '_route' => 'settings_email_verify',);
                }
                not_settings_email_verify:

            }

            // settings_binds
            if ($pathinfo === '/settings/binds') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::bindsAction',  '_route' => 'settings_binds',);
            }

            // settings_binds_unbind
            if (0 === strpos($pathinfo, '/settings/unbind') && preg_match('#^/settings/unbind/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_binds_unbind')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::unBindAction',));
            }

            if (0 === strpos($pathinfo, '/settings/bind')) {
                // settings_binds_bind
                if (preg_match('#^/settings/bind/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_binds_bind')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::bindAction',));
                }

                // settings_binds_bind_callback
                if (preg_match('#^/settings/bind/(?P<type>[^/]++)/callback$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_binds_bind_callback')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::bindCallbackAction',));
                }

            }

            if (0 === strpos($pathinfo, '/settings/setup')) {
                // settings_setup
                if ($pathinfo === '/settings/setup') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::setupAction',  '_route' => 'settings_setup',);
                }

                // settings_setup_password
                if ($pathinfo === '/settings/setup_password') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::setupPasswordAction',  '_route' => 'settings_setup_password',);
                }

                // settings_setup_check_nickname
                if ($pathinfo === '/settings/setup/check_nickname') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::setupCheckNicknameAction',  '_route' => 'settings_setup_check_nickname',);
                }

            }

        }

        // auth_email_confirm
        if ($pathinfo === '/auth/email/confirm') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AuthController::emailConfirmAction',  '_route' => 'auth_email_confirm',);
        }

        if (0 === strpos($pathinfo, '/password/reset')) {
            // password_reset
            if ($pathinfo === '/password/reset') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PasswordResetController::indexAction',  '_route' => 'password_reset',);
            }

            // password_reset_update
            if ($pathinfo === '/password/reset/update') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PasswordResetController::updateAction',  '_route' => 'password_reset_update',);
            }

            // password_reset_check_mobile
            if ($pathinfo === '/password/reset/check/mobile') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PasswordResetController::checkMobileExistsAction',  '_route' => 'password_reset_check_mobile',);
            }

        }

        // browser_upgrade
        if ($pathinfo === '/browser/upgrade') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\BrowserController::upgradeAction',  '_route' => 'browser_upgrade',);
        }

        // category_all
        if ($pathinfo === '/category/all') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CategoryController::allAction',  '_route' => 'category_all',);
        }

        // location_all
        if ($pathinfo === '/location/all') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LocationController::allAction',  '_route' => 'location_all',);
        }

        if (0 === strpos($pathinfo, '/tag')) {
            // tag
            if ($pathinfo === '/tag') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TagController::indexAction',  '_route' => 'tag',);
            }

            // tag_all
            if ($pathinfo === '/tag/all_jsonm') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TagController::allAction',  '_route' => 'tag_all',);
            }

            // tag_match
            if ($pathinfo === '/tag/match_jsonp') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TagController::matchAction',  '_route' => 'tag_match',);
            }

            // tag_show
            if (preg_match('#^/tag/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TagController::showAction',));
            }

        }

        // following_match_bynickname
        if ($pathinfo === '/following/bynickname/match_jsonp') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::matchAction',  '_route' => 'following_match_bynickname',);
        }

        if (0 === strpos($pathinfo, '/comment-widget')) {
            // comment_widget_init
            if ($pathinfo === '/comment-widget/init') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommentWidgetController::initAction',  '_route' => 'comment_widget_init',);
            }

            // comment_widget_create
            if ($pathinfo === '/comment-widget/create') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommentWidgetController::createAction',  '_route' => 'comment_widget_create',);
            }

            // comment_widget_delete
            if ($pathinfo === '/comment-widget/delete') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_comment_widget_delete;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommentWidgetController::deleteAction',  '_route' => 'comment_widget_delete',);
            }
            not_comment_widget_delete:

        }

        if (0 === strpos($pathinfo, '/notification')) {
            // notification
            if ($pathinfo === '/notification') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\NotificationController::indexAction',  '_route' => 'notification',);
            }

            // batch_notification_show
            if (preg_match('#^/notification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'batch_notification_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\NotificationController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/my')) {
            // my
            if ($pathinfo === '/my') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyCourseController::indexAction',  '_route' => 'my',);
            }

            if (0 === strpos($pathinfo, '/my/t')) {
                // my_task_calendar
                if ($pathinfo === '/my/task') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyTaskController::indexAction',  '_route' => 'my_task_calendar',);
                }

                if (0 === strpos($pathinfo, '/my/teaching')) {
                    // my_teaching_courses
                    if (0 === strpos($pathinfo, '/my/teaching/courses') && preg_match('#^/my/teaching/courses(?:/(?P<filter>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_teaching_courses')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyTeachingController::coursesAction',  'filter' => 'normal',));
                    }

                    // my_teaching_open_courses
                    if (0 === strpos($pathinfo, '/my/teaching/open/courses') && preg_match('#^/my/teaching/open/courses(?:/(?P<filter>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_teaching_open_courses')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyTeachingController::openCoursesAction',  'filter' => 'open',));
                    }

                    // my_teaching_threads
                    if (0 === strpos($pathinfo, '/my/teaching/threads') && preg_match('#^/my/teaching/threads/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_teaching_threads')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyTeachingController::threadsAction',));
                    }

                    // my_teaching_classrooms
                    if ($pathinfo === '/my/teaching/classrooms') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyTeachingController::classroomsAction',  '_route' => 'my_teaching_classrooms',);
                    }

                }

            }

            // my_live_courses_learning
            if ($pathinfo === '/my/livecourses/learing') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyLiveCourseController::indexAction',  '_route' => 'my_live_courses_learning',);
            }

            if (0 === strpos($pathinfo, '/my/courses')) {
                if (0 === strpos($pathinfo, '/my/courses/learn')) {
                    // my_courses_learning
                    if ($pathinfo === '/my/courses/learning') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyCourseController::learningAction',  '_route' => 'my_courses_learning',);
                    }

                    // my_courses_learned
                    if ($pathinfo === '/my/courses/learned') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyCourseController::learnedAction',  '_route' => 'my_courses_learned',);
                    }

                }

                // my_courses_favorited
                if ($pathinfo === '/my/courses/favorited') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyCourseController::favoritedAction',  '_route' => 'my_courses_favorited',);
                }

            }

            // my_questions
            if ($pathinfo === '/my/questions') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyThreadController::questionsAction',  '_route' => 'my_questions',);
            }

            // my_discussions
            if ($pathinfo === '/my/discussions') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyThreadController::discussionsAction',  '_route' => 'my_discussions',);
            }

            if (0 === strpos($pathinfo, '/my/note')) {
                if (0 === strpos($pathinfo, '/my/notebook')) {
                    // my_notebooks
                    if ($pathinfo === '/my/notebooks') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyNotebookController::indexAction',  '_route' => 'my_notebooks',);
                    }

                    // my_notebook_show
                    if (preg_match('#^/my/notebook/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_notebook_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyNotebookController::showAction',));
                    }

                }

                // my_note_delete
                if (preg_match('#^/my/note/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_my_note_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_note_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyNotebookController::noteDeleteAction',));
                }
                not_my_note_delete:

            }

            if (0 === strpos($pathinfo, '/my/order')) {
                // my_orders
                if ($pathinfo === '/my/orders') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyOrderController::indexAction',  '_route' => 'my_orders',);
                }

                // my_order_cancel
                if (preg_match('#^/my/order/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_my_order_cancel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_order_cancel')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyOrderController::cancelAction',));
                }
                not_my_order_cancel:

                // web_user_order_detail
                if (preg_match('#^/my/order/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_user_order_detail')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyOrderController::detailAction',));
                }

                // my_order_cancel_refund
                if (preg_match('#^/my/order/(?P<id>[^/]++)/cancel_refund$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_my_order_cancel_refund;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_order_cancel_refund')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyOrderController::cancelRefundAction',));
                }
                not_my_order_cancel_refund:

            }

            // my_refunds
            if ($pathinfo === '/my/refunds') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyOrderController::refundsAction',  '_route' => 'my_refunds',);
            }

            // income_records
            if ($pathinfo === '/my/income_records') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MoneyRecordController::indexAction',  '_route' => 'income_records',);
            }

            // payout_records
            if ($pathinfo === '/my/payout_records') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MoneyRecordController::payoutAction',  '_route' => 'payout_records',);
            }

            // my_quiz
            if ($pathinfo === '/my/quiz') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::indexAction',  '_route' => 'my_quiz',);
            }

        }

        if (0 === strpos($pathinfo, '/question')) {
            // my_favorite_question
            if (preg_match('#^/question/(?P<id>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_favorite_question')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyQuestionController::favoriteQuestionAction',));
            }

            // my_unfavorite_question
            if (preg_match('#^/question/(?P<id>[^/]++)/unfavorite$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_unfavorite_question')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyQuestionController::unFavoriteQuestionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/my/favorite/question')) {
            // my_show_favorite_question
            if ($pathinfo === '/my/favorite/question/show') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyQuestionController::showFavoriteQuestionAction',  '_route' => 'my_show_favorite_question',);
            }

            // my_favorite_question_preview
            if (preg_match('#^/my/favorite/question/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_favorite_question_preview')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyQuestionController::previewAction',));
            }

        }

        // user_show
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::showAction',));
        }

        // my_page_show
        if ($pathinfo === '/my/page/show') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::pageShowAction',  '_route' => 'my_page_show',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_about
            if (preg_match('#^/user/(?P<id>[^/]++)/about$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_about')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::aboutAction',));
            }

            // user_teach
            if (preg_match('#^/user/(?P<id>[^/]++)/teach$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_teach')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::teachAction',));
            }

            // user_learn
            if (preg_match('#^/user/(?P<id>[^/]++)/learn$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_learn')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::learnAction',));
            }

            // user_favorited
            if (preg_match('#^/user/(?P<id>[^/]++)/favorited$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_favorited')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::favoritedAction',));
            }

            // user_group
            if (preg_match('#^/user/(?P<id>[^/]++)/group$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_group')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::groupAction',));
            }

            // user_following
            if (preg_match('#^/user/(?P<id>[^/]++)/following$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_following')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::followingAction',));
            }

            // user_follower
            if (preg_match('#^/user/(?P<id>[^/]++)/follower$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_follower')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::followerAction',));
            }

            // user_follow
            if (preg_match('#^/user/(?P<id>[^/]++)/follow$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_follow;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_follow')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::followAction',));
            }
            not_user_follow:

            // user_unfollow
            if (preg_match('#^/user/(?P<id>[^/]++)/unfollow$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_unfollow;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_unfollow')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::unfollowAction',));
            }
            not_user_unfollow:

            // user_remind_counter
            if ($pathinfo === '/user_remind_counter') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::remindCounterAction',  '_route' => 'user_remind_counter',);
            }

            // user_teaching_classrooms
            if (preg_match('#^/user/(?P<id>[^/]++)/teaching/classrooms$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_teaching_classrooms')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::teachingAction',));
            }

            // user_learning_classrooms
            if (preg_match('#^/user/(?P<id>[^/]++)/learning/classrooms$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_learning_classrooms')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::learningAction',));
            }

            // user_card_show
            if (preg_match('#^/user/(?P<userId>[^/]++)/card/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_card_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::cardShowAction',));
            }

        }

        // login_after_fill_userinfo
        if ($pathinfo === '/fill/userinfo') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::fillUserInfoAction',  '_route' => 'login_after_fill_userinfo',);
        }

        if (0 === strpos($pathinfo, '/message')) {
            // message_create
            if (0 === strpos($pathinfo, '/message/create') && preg_match('#^/message/create/(?P<toId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::createAction',));
            }

            // message
            if (rtrim($pathinfo, '/') === '/message') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'message');
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::indexAction',  '_route' => 'message',);
            }

            // message_check_receiver
            if ($pathinfo === '/message/check/receiver') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::checkReceiverAction',  '_route' => 'message_check_receiver',);
            }

            if (0 === strpos($pathinfo, '/message/send')) {
                // message_send
                if (rtrim($pathinfo, '/') === '/message/send') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'message_send');
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::sendAction',  '_route' => 'message_send',);
                }

                // message_send_to_receiver
                if (preg_match('#^/message/send/(?P<receiverId>[^/]++)/to/receiver/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'message_send_to_receiver');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_send_to_receiver')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::sendToAction',));
                }

            }

            if (0 === strpos($pathinfo, '/message/conversation')) {
                // message_conversation_show
                if (preg_match('#^/message/conversation/(?P<conversationId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_conversation_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::showConversationAction',));
                }

                // message_conversation_delete
                if (preg_match('#^/message/conversation/(?P<conversationId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_message_conversation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_conversation_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::deleteConversationAction',));
                }
                not_message_conversation_delete:

                // message_delete
                if (preg_match('#^/message/conversation/(?P<conversationId>[^/]++)/message/(?P<messageId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_message_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::deleteConversationMessageAction',));
                }
                not_message_delete:

            }

        }

        if (0 === strpos($pathinfo, '/carticle')) {
            // content_article_show
            if (preg_match('#^/carticle/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_article_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::articleShowAction',));
            }

            // content_article_list
            if ($pathinfo === '/carticle') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::articleListAction',  '_route' => 'content_article_list',);
            }

        }

        if (0 === strpos($pathinfo, '/activity')) {
            // content_activity_show
            if (preg_match('#^/activity/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_activity_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::activityShowAction',));
            }

            // content_activity_list
            if ($pathinfo === '/activity') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::activityListAction',  '_route' => 'content_activity_list',);
            }

        }

        if (0 === strpos($pathinfo, '/page')) {
            // content_page_show
            if (preg_match('#^/page/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_page_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::pageShowAction',));
            }

            // content_page_list
            if ($pathinfo === '/page') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::pageListAction',  '_route' => 'content_page_list',);
            }

        }

        if (0 === strpos($pathinfo, '/teacher')) {
            // teacher
            if ($pathinfo === '/teacher') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TeacherController::indexAction',  '_route' => 'teacher',);
            }

            // teacher_search
            if ($pathinfo === '/teacher/search') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TeacherController::searchAction',  '_route' => 'teacher_search',);
            }

        }

        if (0 === strpos($pathinfo, '/partner')) {
            if (0 === strpos($pathinfo, '/partner/log')) {
                // partner_login
                if ($pathinfo === '/partner/login') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PartnerController::loginAction',  '_route' => 'partner_login',);
                }

                // partner_logout
                if ($pathinfo === '/partner/logout') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PartnerController::logoutAction',  '_route' => 'partner_logout',);
                }

            }

            // partner_discuz_notify
            if ($pathinfo === '/partner/discuz/api/notify') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PartnerDiscuzController::notifyAction',  '_route' => 'partner_discuz_notify',);
            }

            // partner_phpwind_notify
            if ($pathinfo === '/partner/phpwind/api/notify') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PartnerPhpwindController::notifyAction',  '_route' => 'partner_phpwind_notify',);
            }

        }

        if (0 === strpos($pathinfo, '/cloud')) {
            // cloud_set_server
            if ($pathinfo === '/cloud/set-server') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::setServerAction',  '_route' => 'cloud_set_server',);
            }

            // cloud_oldkeys
            if ($pathinfo === '/cloud/oldkeys') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::oldkeysAction',  '_route' => 'cloud_oldkeys',);
            }

            // cloud_reconvert_old_file
            if ($pathinfo === '/cloud/reconvert_old_file') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::reconvertOldFileAction',  '_route' => 'cloud_reconvert_old_file',);
            }

            // cloud_video_fingerprint
            if ($pathinfo === '/cloud/video_fingerprint') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::videoFingerprintAction',  '_route' => 'cloud_video_fingerprint',);
            }

            // cloud_ppt_watermark
            if ($pathinfo === '/cloud/ppt_watermark') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::pptWatermarkAction',  '_route' => 'cloud_ppt_watermark',);
            }

            // cloud_doc_watermark
            if ($pathinfo === '/cloud/doc_watermark') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::docWatermarkAction',  '_route' => 'cloud_doc_watermark',);
            }

            // cloud_testpaper_watermark
            if ($pathinfo === '/cloud/testpaper_watermark') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::testpaperWatermarkAction',  '_route' => 'cloud_testpaper_watermark',);
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            // systeminfo
            if ($pathinfo === '/systeminfo') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SysteminfoController::indexAction',  '_route' => 'systeminfo',);
            }

            // setting_approval_submit
            if ($pathinfo === '/settings/approval/submit') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::approvalSubmitAction',  '_route' => 'setting_approval_submit',);
            }

        }

        if (0 === strpos($pathinfo, '/article')) {
            // article_show
            if ($pathinfo === '/article') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_show',);
            }

            // article_detail
            if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_detail')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::detailAction',));
            }

            // article_category
            if (0 === strpos($pathinfo, '/article/category') && preg_match('#^/article/category/(?P<categoryCode>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_category')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::categoryAction',  'category' => '',));
            }

            // article_post
            if (preg_match('#^/article/(?P<id>[^/]++)/post$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_article_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_post')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::postAction',));
            }
            not_article_post:

            // article_post_reply
            if (preg_match('#^/article/(?P<articleId>[^/]++)/post/(?P<postId>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_article_post_reply;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_post_reply')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::postReplyAction',));
            }
            not_article_post_reply:

            // article_like
            if (preg_match('#^/article/(?P<articleId>[^/]++)/like$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_article_like;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_like')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::likeAction',));
            }
            not_article_like:

            // article_cancel_like
            if (preg_match('#^/article/(?P<articleId>[^/]++)/canceLike$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_article_cancel_like;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_cancel_like')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::cancelLikeAction',));
            }
            not_article_cancel_like:

            // article_post_jump
            if (preg_match('#^/article/(?P<articleId>[^/]++)/post/(?P<postId>[^/]++)/jump$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_post_jump')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::postJumpAction',));
            }

            // article_tag_show
            if (0 === strpos($pathinfo, '/article/tag') && preg_match('#^/article/tag/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_tag_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::tagAction',));
            }

        }

        if (0 === strpos($pathinfo, '/mobile')) {
            // mobile
            if (rtrim($pathinfo, '/') === '/mobile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mobile');
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MobileController::indexAction',  '_route' => 'mobile',);
            }

            if (0 === strpos($pathinfo, '/mobile/download')) {
                // mobile_download_qrcode
                if ($pathinfo === '/mobile/downloadQrcode') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MobileController::downloadQrcodeAction',  '_route' => 'mobile_download_qrcode',);
                }

                // mobile_download
                if ($pathinfo === '/mobile/download') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MobileController::downloadAction',  '_route' => 'mobile_download',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/group')) {
            // group
            if ($pathinfo === '/group') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::indexAction',  '_route' => 'group',);
            }

            // group_search_group
            if ($pathinfo === '/group/search_group') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::searchAction',  '_route' => 'group_search_group',);
            }

            // group_add
            if ($pathinfo === '/group/add') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::addGroupAction',  '_route' => 'group_add',);
            }

        }

        if (0 === strpos($pathinfo, '/my/group')) {
            // group_member_center
            if ($pathinfo === '/my/group') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::memberCenterAction',  '_route' => 'group_member_center',);
            }

            // group_member_join
            if ($pathinfo === '/my/group/join') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::memberJoinAction',  '_route' => 'group_member_join',);
            }

            // group_member_threads
            if ($pathinfo === '/my/group/threads') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::memberThreadsAction',  '_route' => 'group_member_threads',);
            }

            // group_member_posts
            if ($pathinfo === '/my/group/posts') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::memberPostsAction',  '_route' => 'group_member_posts',);
            }

            // group_thread_collecting
            if ($pathinfo === '/my/group/collecting') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::collectingAction',  '_route' => 'group_thread_collecting',);
            }

        }

        if (0 === strpos($pathinfo, '/group')) {
            // group_show
            if (preg_match('#^/group/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupIndexAction',));
            }

            // group_join
            if (preg_match('#^/group/(?P<id>[^/]++)/join$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_join')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupJoinAction',));
            }

            // group_exit
            if (preg_match('#^/group/(?P<id>[^/]++)/exit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_exit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupExitAction',));
            }

            if (0 === strpos($pathinfo, '/group/member')) {
                // group_member
                if (preg_match('#^/group/member/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_member')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupMemberAction',));
                }

                // group_member_delete
                if (0 === strpos($pathinfo, '/group/member/delete') && preg_match('#^/group/member/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_member_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_member_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::deleteMembersAction',));
                }
                not_group_member_delete:

            }

            // group_set_admin
            if (0 === strpos($pathinfo, '/group/set/admin') && preg_match('#^/group/set/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_set_admin')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::setAdminAction',));
            }

            // group_remove_admin
            if (0 === strpos($pathinfo, '/group/remove/admin') && preg_match('#^/group/remove/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_remove_admin')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::removeAdminAction',));
            }

            // group_set
            if (preg_match('#^/group/(?P<id>[^/]++)/setting/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupSetAction',));
            }

            // group_setLogoCrop
            if (preg_match('#^/group/(?P<id>[^/]++)/setting/logoCrop$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_setLogoCrop')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::logoCropAction',));
            }

            // group_logo_set
            if (preg_match('#^/group/(?P<id>[^/]++)/setting/logo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_logo_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::setGrouplogoAction',));
            }

            // group_edit
            if (0 === strpos($pathinfo, '/group/info/edit') && preg_match('#^/group/info/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupEditAction',));
            }

            // group_backgroundlogo_set
            if (0 === strpos($pathinfo, '/group/set/backgroundlogo') && preg_match('#^/group/set/backgroundlogo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_backgroundlogo_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::setGroupBackgroundLogoAction',));
            }

            // group_search
            if (preg_match('#^/group/(?P<id>[^/]++)/serach$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_search')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::searchResultAction',));
            }

            // group_thread_post
            if (0 === strpos($pathinfo, '/group/thread') && preg_match('#^/group/thread/(?P<groupId>[^/]++)/(?P<threadId>[^/]++)/post$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_post')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::postThreadAction',));
            }

            // group_thread_add
            if (preg_match('#^/group/(?P<id>[^/]++)/thread/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_add')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::addThreadAction',));
            }

            // group_thread_update
            if (preg_match('#^/group/(?P<id>[^/]++)/thread/(?P<threadId>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::updateThreadAction',));
            }

        }

        // group_thread_check_user
        if ($pathinfo === '/mygroup/checkuser') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::checkUserAction',  '_route' => 'group_thread_check_user',);
        }

        if (0 === strpos($pathinfo, '/group')) {
            // group_thread_show
            if (preg_match('#^/group/(?P<id>[^/]++)/thread/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::groupThreadIndexAction',));
            }

            if (0 === strpos($pathinfo, '/group/thread')) {
                // group_thread_collect
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/collect$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_thread_collect;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_collect')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::collectAction',));
                }
                not_group_thread_collect:

                // group_thread_uncollect
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/uncollect$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_thread_uncollect;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_uncollect')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::uncollectAction',));
                }
                not_group_thread_uncollect:

                // group_thread_setElite
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/setElite$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_setElite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::setEliteAction',));
                }

                // group_thread_removeElite
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/removeElite$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_removeElite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::removeEliteAction',));
                }

                // group_thread_setStick
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/setStick$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_setStick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::setStickAction',));
                }

                // group_thread_removeStick
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/removeStick$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_removeStick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::removeStickAction',));
                }

                // group_thread_closeThread
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/closeThread/(?P<memberId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_closeThread')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::closeThreadAction',));
                }

                // group_thread_deletePost
                if (0 === strpos($pathinfo, '/group/thread/deletePost') && preg_match('#^/group/thread/deletePost/(?P<postId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_thread_deletePost;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_deletePost')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::deletePostAction',));
                }
                not_group_thread_deletePost:

            }

            // group_thread_post_reply
            if (0 === strpos($pathinfo, '/group/post') && preg_match('#^/group/post/(?P<postId>[^/]++)/reply$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_post_reply')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::postReplyAction',));
            }

        }

        if (0 === strpos($pathinfo, '/thread')) {
            // group_thread_reward
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/reward$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_reward')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::rewardAction',));
            }

            // group_thread_cancel_reward
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/reward/cancel$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_cancel_reward')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::cancelRewardAction',));
            }

            // group_thread_adopt
            if (preg_match('#^/thread/(?P<postId>[^/]++)/adopt$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_adopt')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::adoptAction',));
            }

            // group_thread_hide
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/hide$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_hide')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::hideAction',));
            }

        }

        if (0 === strpos($pathinfo, '/group')) {
            // group_upload
            if ($pathinfo === '/group/thread/upload') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::uploadAction',  '_route' => 'group_upload',);
            }

            if (0 === strpos($pathinfo, '/group/attach')) {
                // group_attach_download
                if (0 === strpos($pathinfo, '/group/attach/download') && preg_match('#^/group/attach/download/(?P<fileId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_attach_download')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::downloadAction',));
                }

                // group_thread_buy_attach
                if (0 === strpos($pathinfo, '/group/attach/buy') && preg_match('#^/group/attach/buy/(?P<attachId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_buy_attach')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::buyAttachAction',));
                }

                // group_thread_delete_attach
                if (0 === strpos($pathinfo, '/group/attach/delete') && preg_match('#^/group/attach/delete/(?P<goodsId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_thread_delete_attach;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_delete_attach')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::deleteAttachAction',));
                }
                not_group_thread_delete_attach:

            }

        }

        if (0 === strpos($pathinfo, '/my')) {
            // my_bill
            if ($pathinfo === '/my/bill') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::cashBillAction',  '_route' => 'my_bill',);
            }

            // my_coin
            if ($pathinfo === '/my/coin') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::indexAction',  '_route' => 'my_coin',);
            }

            if (0 === strpos($pathinfo, '/my/invitecode')) {
                // my_invite_code
                if ($pathinfo === '/my/invitecode') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::inviteCodeAction',  '_route' => 'my_invite_code',);
                }

                // invite_promote_link
                if ($pathinfo === '/my/invitecode/promotelink') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::promoteLinkAction',  '_route' => 'invite_promote_link',);
                }

                // write_invitecode
                if ($pathinfo === '/my/invitecode/writeinvitecode') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::writeInvitecodeAction',  '_route' => 'write_invitecode',);
                }

                // receive_coupon
                if ($pathinfo === '/my/invitecode/receivecoupon') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::receiveCouponAction',  '_route' => 'receive_coupon',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/coin')) {
            // coin_pay
            if ($pathinfo === '/coin/pay') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::payAction',  '_route' => 'coin_pay',);
            }

            // coin_change
            if ($pathinfo === '/coin/change') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::changeAction',  '_route' => 'coin_change',);
            }

            // coin_show
            if ($pathinfo === '/coin/show') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CoinController::showAction',  '_route' => 'coin_show',);
            }

        }

        // user_password_check
        if ($pathinfo === '/user/password/check') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::checkPasswordAction',  '_route' => 'user_password_check',);
        }

        if (0 === strpos($pathinfo, '/pay')) {
            if (0 === strpos($pathinfo, '/pay/center')) {
                // pay_center_show
                if ($pathinfo === '/pay/center') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::showAction',  '_route' => 'pay_center_show',);
                }

                // pay_center_pay
                if ($pathinfo === '/pay/center/pay') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pay_center_pay;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::payAction',  '_route' => 'pay_center_pay',);
                }
                not_pay_center_pay:

                // pay_center_auth_unbind
                if ($pathinfo === '/pay/center/auth_unbind') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pay_center_auth_unbind;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::unbindAuthAction',  '_route' => 'pay_center_auth_unbind',);
                }
                not_pay_center_auth_unbind:

                // auth_unbind_mobile_show
                if ($pathinfo === '/pay/center/mobile_show') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::showMobileAction',  '_route' => 'auth_unbind_mobile_show',);
                }

                if (0 === strpos($pathinfo, '/pay/center/pay')) {
                    // pay_return
                    if (preg_match('#^/pay/center/pay/(?P<name>[^/]++)/return$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pay_return')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::payReturnAction',));
                    }

                    // pay_notify
                    if (preg_match('#^/pay/center/pay/(?P<name>[^/]++)/notify$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pay_notify')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::payNotifyAction',));
                    }

                }

                // pay_success_show
                if ($pathinfo === '/pay/center/success/show') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::showTargetAction',  '_route' => 'pay_success_show',);
                }

            }

            // pay_password_check
            if ($pathinfo === '/pay/password/check') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::payPasswordCheckAction',  '_route' => 'pay_password_check',);
            }

            // pay_error
            if ($pathinfo === '/pay/error') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::payErrorAction',  '_route' => 'pay_error',);
            }

            // pay_result_notice
            if ($pathinfo === '/pay/result/notice') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::resultNoticeAction',  '_route' => 'pay_result_notice',);
            }

            // wxpay_roll
            if ($pathinfo === '/pay/wxpay/roll') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PayCenterController::wxpayRollAction',  '_route' => 'wxpay_roll',);
            }

        }

        if (0 === strpos($pathinfo, '/order')) {
            // order_show
            if ($pathinfo === '/order/show') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OrderController::showAction',  '_route' => 'order_show',);
            }

            // order_create
            if ($pathinfo === '/order/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_order_create;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OrderController::createAction',  '_route' => 'order_create',);
            }
            not_order_create:

        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_buy
            if (preg_match('#^/course/(?P<id>[^/]++)/buy$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_buy')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::buyAction',));
            }

            // course_buy_modify_user_info
            if ($pathinfo === '/course/buy/modify_user_info') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::modifyUserInfoAction',  '_route' => 'course_buy_modify_user_info',);
            }

        }

        if (0 === strpos($pathinfo, '/thread')) {
            // thread_jump
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/jump$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_jump')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::jumpAction',));
            }

            // thread_post_jump
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/post/(?P<postId>[^/]++)/jump$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_post_jump')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::postJumpAction',));
            }

            // thread_post
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/post$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_post')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::postAction',));
            }

            // thread_post_reply
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/post/(?P<postId>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_post_reply;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_post_reply')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::postReplyAction',));
            }
            not_thread_post_reply:

            // thread_post_subposts
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/post/(?P<postId>[^/]++)/subposts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_post_subposts')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::subpostsAction',  'threadId' => 0,));
            }

        }

        // article_post_subposts
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<targetId>[^/]++)/post/(?P<postId>[^/]++)/subposts$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_post_subposts')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::subpostsAction',));
        }

        if (0 === strpos($pathinfo, '/thread')) {
            // thread_post_delete
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/post/(?P<postId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_post_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_post_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::postDeleteAction',));
            }
            not_thread_post_delete:

            // thread_post_up
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/post/(?P<postId>[^/]++)/up$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_post_up;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_post_up')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::postUpAction',));
            }
            not_thread_post_up:

            // thread_delete
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::deleteAction',));
            }
            not_thread_delete:

            // thread_set_sticky
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/set_sticky$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_set_sticky;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_set_sticky')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::setStickyAction',));
            }
            not_thread_set_sticky:

            // thread_cancel_sticky
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/cancel_sticky$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_cancel_sticky;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_cancel_sticky')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::cancelStickyAction',));
            }
            not_thread_cancel_sticky:

            // thread_set_nice
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/set_nice$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_set_nice;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_set_nice')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::setNiceAction',));
            }
            not_thread_set_nice:

            // thread_cancel_nice
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/cancel_nice$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_cancel_nice;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_cancel_nice')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ThreadController::cancelNiceAction',));
            }
            not_thread_cancel_nice:

            // thread_export_members
            if (preg_match('#^/thread/(?P<threadId>[^/]++)/export/members$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_export_members')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\Thread\\MemberController::exportAction',));
            }

        }

        // ajax_thread_member_show
        if (0 === strpos($pathinfo, '/ajax/thread') && preg_match('#^/ajax/thread/(?P<threadId>[^/]++)/members$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ajax_thread_member_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_thread_member_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\Thread\\MemberController::ajaxFindMembersAction',));
        }
        not_ajax_thread_member_show:

        if (0 === strpos($pathinfo, '/vip')) {
            // vip
            if (rtrim($pathinfo, '/') === '/vip') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vip');
                }

                return array('_route' => 'vip');
            }

            // vip_buy
            if ($pathinfo === '/vip/buy') {
                return array('_route' => 'vip_buy');
            }

            // vip_renew
            if ($pathinfo === '/vip/renew') {
                return array('_route' => 'vip_renew');
            }

            // vip_upgrade
            if ($pathinfo === '/vip/upgrade') {
                return array('_route' => 'vip_upgrade');
            }

        }

        if (0 === strpos($pathinfo, '/edu_cloud/s')) {
            if (0 === strpos($pathinfo, '/edu_cloud/sms')) {
                if (0 === strpos($pathinfo, '/edu_cloud/sms_')) {
                    // edu_cloud_sms_send
                    if ($pathinfo === '/edu_cloud/sms_send') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_edu_cloud_sms_send;
                        }

                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EduCloudController::smsSendAction',  '_route' => 'edu_cloud_sms_send',);
                    }
                    not_edu_cloud_sms_send:

                    // edu_cloud_sms_check
                    if (0 === strpos($pathinfo, '/edu_cloud/sms_check') && preg_match('#^/edu_cloud/sms_check/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edu_cloud_sms_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EduCloudController::smsCheckAction',));
                    }

                }

                // edu_cloud_sms_send_callback
                if (0 === strpos($pathinfo, '/edu_cloud/sms/callback') && preg_match('#^/edu_cloud/sms/callback/(?P<targetType>[^/]++)/(?P<targetId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edu_cloud_sms_send_callback')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EduCloudController::smsCallBackAction',));
                }

            }

            // edu_cloud_search_callback
            if ($pathinfo === '/edu_cloud/search/callback') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EduCloudController::searchCallBackAction',  '_route' => 'edu_cloud_search_callback',);
            }

        }

        if (0 === strpos($pathinfo, '/settings')) {
            // settings_bind_mobile
            if ($pathinfo === '/settings/bind_mobile') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::bindMobileAction',  '_route' => 'settings_bind_mobile',);
            }

            // settings_check_login_password
            if ($pathinfo === '/settings/check_login_password') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_settings_check_login_password;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::passwordCheckAction',  '_route' => 'settings_check_login_password',);
            }
            not_settings_check_login_password:

        }

        // password_reset_by_sms
        if ($pathinfo === '/password/reset/by_sms') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_password_reset_by_sms;
            }

            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PasswordResetController::resetBySmsAction',  '_route' => 'password_reset_by_sms',);
        }
        not_password_reset_by_sms:

        // settings_find_pay_password_by_sms
        if ($pathinfo === '/settings/find_pay_password_by_sms') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::findPayPasswordBySmsAction',  '_route' => 'settings_find_pay_password_by_sms',);
        }

        // order_pay_sms_verification
        if ($pathinfo === '/order/sms_verification') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OrderController::smsVerificationAction',  '_route' => 'order_pay_sms_verification',);
        }

        // edu_cloud_sms_callback
        if ($pathinfo === '/edu_cloud/sms_callback') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_edu_cloud_sms_callback;
            }

            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EduCloudController::cloudCallBackAction',  '_route' => 'edu_cloud_sms_callback',);
        }
        not_edu_cloud_sms_callback:

        if (0 === strpos($pathinfo, '/course/note')) {
            // course_note_like
            if (preg_match('#^/course/note/(?P<noteId>[^/]++)/like$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_note_like;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_note_like')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\Course\\NoteController::likeAction',));
            }
            not_course_note_like:

            // course_note_cancel_like
            if (preg_match('#^/course/note/(?P<noteId>[^/]++)/cancel_like$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_note_cancel_like;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_note_cancel_like')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\Course\\NoteController::cancelLikeAction',));
            }
            not_course_note_cancel_like:

        }

        // common_parse_qrcode
        if (0 === strpos($pathinfo, '/qrcode/parse') && preg_match('#^/qrcode/parse/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'common_parse_qrcode')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommonController::parseQrcodeAction',));
        }

        if (0 === strpos($pathinfo, '/esbar/my')) {
            if (0 === strpos($pathinfo, '/esbar/my/c')) {
                // esbar_my_classroom
                if ($pathinfo === '/esbar/my/classroom') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EsBar\\EsBarController::classroomAction',  '_route' => 'esbar_my_classroom',);
                }

                // esbar_my_course
                if ($pathinfo === '/esbar/my/course') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EsBar\\EsBarController::courseAction',  '_route' => 'esbar_my_course',);
                }

            }

            // esbar_my_notify
            if ($pathinfo === '/esbar/my/notify') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EsBar\\EsBarController::notifyAction',  '_route' => 'esbar_my_notify',);
            }

            // esbar_my_practice
            if (0 === strpos($pathinfo, '/esbar/my/practice') && preg_match('#^/esbar/my/practice/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esbar_my_practice')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EsBar\\EsBarController::practiceAction',));
            }

            // esbar_my_study_center
            if ($pathinfo === '/esbar/my/study_center') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\EsBar\\EsBarController::studyCenterAction',  '_route' => 'esbar_my_study_center',);
            }

        }

        if (0 === strpos($pathinfo, '/my')) {
            // my_cards
            if ($pathinfo === '/my/cards') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CardController::indexAction',  '_route' => 'my_cards',);
            }

            // my_useable_coupons
            if ($pathinfo === '/my/useable_coupons') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CardController::useableCouponsAction',  '_route' => 'my_useable_coupons',);
            }

        }

        // card_info
        if ($pathinfo === '/card/info') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CardController::cardInfoAction',  '_route' => 'card_info',);
        }

        // sms_prepare
        if (0 === strpos($pathinfo, '/sms/prepare') && preg_match('#^/sms/prepare/(?P<targetType>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sms_prepare')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SmsController::prepareAction',));
        }

        // publish_sms_send
        if (0 === strpos($pathinfo, '/publish/sms_send') && preg_match('#^/publish/sms_send/(?P<targetType>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'publish_sms_send')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SmsController::sendAction',));
        }

        // generate_short_link
        if ($pathinfo === '/generate/short/link') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SmsController::changeLinkAction',  '_route' => 'generate_short_link',);
        }

        if (0 === strpos($pathinfo, '/livecourse')) {
            // live_course_manage_lesson_replay_edit
            if (preg_match('#^/livecourse/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/replay/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_manage_lesson_replay_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::editLessonReplayAction',));
            }

            // live_course_manage_lesson_replay_title_update
            if (preg_match('#^/livecourse/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/replay/(?P<replayId>[^/]++)/update_title$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_live_course_manage_lesson_replay_title_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_manage_lesson_replay_title_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::updateLessonReplayAction',));
            }
            not_live_course_manage_lesson_replay_title_update:

        }

        if (0 === strpos($pathinfo, '/open/course')) {
            // open_course_explore
            if ($pathinfo === '/open/course/explore') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::exploreAction',  '_route' => 'open_course_explore',);
            }

            // open_course_manage
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::indexAction',));
            }

            // open_course_manage_publish
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/publish$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_publish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::publishAction',));
            }

            // open_course_manage_base
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/base$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_base')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::baseAction',));
            }

            // open_course_manage_lesson
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/lesson$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_lesson')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::lessonAction',));
            }

            // open_course_manage_lesson_create
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/lesson/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_lesson_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::createAction',));
            }

            // open_course_manage_lesson_edit
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_lesson_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::editAction',));
            }

            // open_course_manage_lesson_publish
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/publish$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_lesson_publish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::publishAction',));
            }

            // open_course_manage_lesson_delete
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_lesson_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::deleteAction',));
            }

            // open_course_manage_lesson_unpublish
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/unpublish$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_lesson_unpublish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::unpublishAction',));
            }

            // open_course_manage_lesson_sort
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/lesson/sort$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_manage_lesson_sort;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_lesson_sort')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::sortAction',));
            }
            not_open_course_manage_lesson_sort:

            // open_course_manage_picture
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/picture$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_picture')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::pictureAction',));
            }

            // open_course_manage_picture_crop
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/picture/crop$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_picture_crop')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::pictureCropAction',));
            }

            // open_course_manage_teachers
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/teachers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_teachers')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::teachersAction',));
            }

            // open_course_manage_live_time_set
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/live/time$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_live_time_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::liveOpenTimeSetAction',));
            }

            // open_course_manage_marketing
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/marketing$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_marketing')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::marketingAction',));
            }

            // open_course_manage_students
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/students$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_students')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::studentsAction',));
            }

            // open_course_manage_files
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/files$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_files')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseFileManageController::indexAction',));
            }

            // open_course_manage_files_batch_upload
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/files/batch/upload/(?P<targetType>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_files_batch_upload')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseFileManageController::batchUploadCourseFilesAction',));
            }

            // open_course_manage_files_upload
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/files/upload/(?P<targetType>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_files_upload')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseFileManageController::uploadCourseFilesAction',));
            }

            // open_course_manage_delete_materials_show
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/show/delete/materials$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_manage_delete_materials_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_delete_materials_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseFileManageController::deleteMaterialShowAction',));
            }
            not_open_course_manage_delete_materials_show:

            // open_course_manage_files_delete
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/materials/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_manage_files_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_files_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseFileManageController::deleteCourseFilesAction',));
            }
            not_open_course_manage_files_delete:

            // open_course_manage_course_pick
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/recommend/pick(?:/(?P<filter>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_course_pick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::pickAction',  'filter' => 'openCourse',));
            }

            // open_course_manage_recommend_course_delete
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/recommend/(?P<recommendId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_manage_recommend_course_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_recommend_course_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::deleteRecommendCourseAction',));
            }
            not_open_course_manage_recommend_course_delete:

            // open_course_manage_lesson_replays_edit
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/replays/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_lesson_replays_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveOpenCourseController::editLessonReplayAction',));
            }

            // open_course_manage_replay_title_update
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/replay/(?P<replayId>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_manage_replay_title_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_replay_title_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveOpenCourseController::updateReplayTitleAction',));
            }
            not_open_course_manage_replay_title_update:

            // open_course_manage_student_export_csv
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/student/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_student_export_csv')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::studentsExportAction',));
            }

            // open_course_manage_material
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/material$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_material')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::materialModalAction',));
            }

            // open_course_manage_material_upload
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/material/upload$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_manage_material_upload;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_material_upload')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::materialUploadAction',));
            }
            not_open_course_manage_material_upload:

            // open_course_manage_material_delete
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/material/(?P<materialId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_manage_material_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_material_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::materialDeleteAction',));
            }
            not_open_course_manage_material_delete:

            // open_course_material_download
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/material/(?P<materialId>[^/]++)/download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_material_download')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::materialDownloadAction',));
            }

            // open_course_manage_material_browser
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/material/browser$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_manage_material_browser')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseLessonManageController::materialBrowserAction',));
            }

            // open_course_course_search
            if (preg_match('#^/open/course/(?P<id>[^/]++)/recommended/search/(?P<filter>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_course_search')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::searchAction',));
            }

            // open_course_recommended_course_select
            if (preg_match('#^/open/course/(?P<id>[^/]++)/recommended/select$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_recommended_course_select')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::recommendedCoursesSelectAction',));
            }

            // open_course_show
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::showAction',  'lessonId' => NULL,));
            }

            // open_course_lesson_learn
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_lesson_learn')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::showAction',  'lessonId' => NULL,));
            }

            // open_course_lesson_show
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_lesson_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::lessonShowAction',));
            }

            // open_course_favorite
            if (preg_match('#^/open/course/(?P<id>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_favorite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_favorite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::favoriteAction',));
            }
            not_open_course_favorite:

            // open_course_unfavorite
            if (preg_match('#^/open/course/(?P<id>[^/]++)/unfavorite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_unfavorite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_unfavorite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::unfavoriteAction',));
            }
            not_open_course_unfavorite:

            // open_course_like
            if (preg_match('#^/open/course/(?P<id>[^/]++)/like$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_like;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_like')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::likeAction',));
            }
            not_open_course_like:

            // open_course_unlike
            if (preg_match('#^/open/course/(?P<id>[^/]++)/unlike$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_unlike;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_unlike')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::unlikeAction',));
            }
            not_open_course_unlike:

            // open_course_post
            if (preg_match('#^/open/course/(?P<id>[^/]++)/post$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_post')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::postAction',));
            }

            // open_course_post_reply
            if (preg_match('#^/open/course/(?P<id>[^/]++)/post/(?P<postId>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_course_post_reply;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_post_reply')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::postReplyAction',));
            }
            not_open_course_post_reply:

            // live_open_course_play
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/live_entry$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_open_course_play')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveOpenCourseController::entryAction',));
            }

            // live_open_course_manage_replay
            if (preg_match('#^/open/course/(?P<id>[^/]++)/manage/replay$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_open_course_manage_replay')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveOpenCourseController::replayManageAction',));
            }

            // live_open_course_lesson_replay_create
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/live/replay/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_open_course_lesson_replay_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveOpenCourseController::createLessonReplayAction',));
            }

            // live_open_course_lesson_replay_upload
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/replay/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_open_course_lesson_replay_upload')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveOpenCourseController::uploadModalAction',));
            }

            // live_open_course_live_replay_entry
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/live/replay/(?P<replayId>[^/]++)/entry$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_open_course_live_replay_entry')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveOpenCourseController::entryReplayAction',));
            }

            // live_open_course_live_replay_url
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/live/replay/(?P<replayId>[^/]++)/url$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_open_course_live_replay_url')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveOpenCourseController::getReplayUrlAction',));
            }

            // live_open_lesson_time_check
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/manage/live/time/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_open_lesson_time_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseManageController::lessonTimeCheckAction',));
            }

            // open_course_member_sms
            if (preg_match('#^/open/course/(?P<id>[^/]++)/member/sms$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_member_sms')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::memberSmsAction',));
            }

            // open_course_member_create
            if (preg_match('#^/open/course/(?P<id>[^/]++)/member/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_member_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::createMemberAction',));
            }

            // open_course_lesson_player
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/player$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_lesson_player')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::playerAction',));
            }

            // open_course_mobile_check
            if (preg_match('#^/open/course/(?P<courseId>[^/]++)/mobile/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_mobile_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::mobileCheckAction',));
            }

            // open_course_ad_modal_recommend_course
            if (preg_match('#^/open/course/(?P<id>[^/]++)/ad\\-modal/recommend/course$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_open_course_ad_modal_recommend_course;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_course_ad_modal_recommend_course')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OpenCourseController::adModalRecommendCourseAction',));
            }
            not_open_course_ad_modal_recommend_course:

        }

        if (0 === strpos($pathinfo, '/importer')) {
            // importer_check
            if (preg_match('#^/importer/(?P<type>[^/]++)/check$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_importer_check;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'importer_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ImporterController::checkAction',));
            }
            not_importer_check:

            // importer_import
            if (preg_match('#^/importer/(?P<type>[^/]++)/import$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_importer_import;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'importer_import')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ImporterController::importAction',));
            }
            not_importer_import:

            // importer_index
            if (preg_match('#^/importer/(?P<type>[^/]++)/index$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'importer_index')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ImporterController::templateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin',);
            }

            // admin_inspect
            if ($pathinfo === '/admin/inspect') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::inspectAction',  '_route' => 'admin_inspect',);
            }

            // admin_notice_modal
            if ($pathinfo === '/admin/notice/modal') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::noticeAction',  '_route' => 'admin_notice_modal',);
            }

            // admin_popular_courses
            if ($pathinfo === '/admin/popular_courses') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::popularCoursesAction',  '_route' => 'admin_popular_courses',);
            }

            // admin_question_remind_teachers
            if (0 === strpos($pathinfo, '/admin/course') && preg_match('#^/admin/course/(?P<courseId>[^/]++)/question/(?P<questionId>[^/]++)/remindTeachers$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_question_remind_teachers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_question_remind_teachers')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::questionRemindTeachersAction',));
            }
            not_admin_question_remind_teachers:

            if (0 === strpos($pathinfo, '/admin/o')) {
                // admin_operation_analysis
                if ($pathinfo === '/admin/operation/analysis') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::operationAnalysisDashbordBlockAction',  '_route' => 'admin_operation_analysis',);
                }

                // admin_online_count
                if ($pathinfo === '/admin/online/count') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::onlineCountAction',  '_route' => 'admin_online_count',);
                }

            }

            // admin_login_count
            if ($pathinfo === '/admin/login/count') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::loginCountAction',  '_route' => 'admin_login_count',);
            }

            if (0 === strpos($pathinfo, '/admin/opencourse')) {
                if (0 === strpos($pathinfo, '/admin/opencourse/analysis')) {
                    // admin_opencourse_analysis
                    if ($pathinfo === '/admin/opencourse/analysis') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseAnalysisController::indexAction',  '_route' => 'admin_opencourse_analysis',);
                    }

                    // admin_opencourse_analysis_referer_summary
                    if ($pathinfo === '/admin/opencourse/analysis/referer/summary') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseAnalysisController::summaryAction',  '_route' => 'admin_opencourse_analysis_referer_summary',);
                    }

                    // admin_opencourse_analysis_referer_watch_statistics
                    if ($pathinfo === '/admin/opencourse/analysis/watch') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseAnalysisController::watchAction',  '_route' => 'admin_opencourse_analysis_referer_watch_statistics',);
                    }

                    // admin_opencourse_analysis_referer_summary_list
                    if ($pathinfo === '/admin/opencourse/analysis/referer/list') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseAnalysisController::summaryListAction',  '_route' => 'admin_opencourse_analysis_referer_summary_list',);
                    }

                }

                // admin_opencourse_analysis_referer_detail
                if (preg_match('#^/admin/opencourse/(?P<id>[^/]++)/analysis/referer/detail$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_opencourse_analysis_referer_detail')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseAnalysisController::detailAction',));
                }

                // admin_opencourse_analysis_referer_detail_list
                if (preg_match('#^/admin/opencourse/(?P<id>[^/]++)/analysis/referer/detailList$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_opencourse_analysis_referer_detail_list')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseAnalysisController::detailListAction',));
                }

                // admin_opencourse_analysis_conversion
                if ($pathinfo === '/admin/opencourse/analysis/conversion') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseAnalysisController::conversionAction',  '_route' => 'admin_opencourse_analysis_conversion',);
                }

                // admin_opencourse_analysis_conversion_result
                if (preg_match('#^/admin/opencourse/(?P<courseId>[^/]++)/analysis/conversion/result$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_opencourse_analysis_conversion_result')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseAnalysisController::conversionResultAction',));
                }

            }

            // admin_content
            if ($pathinfo === '/admin/content') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::indexAction',  '_route' => 'admin_content',);
            }

            if (0 === strpos($pathinfo, '/admin/dictionary')) {
                // admin_dictionary
                if ($pathinfo === '/admin/dictionary') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DictionaryController::indexAction',  '_route' => 'admin_dictionary',);
                }

                // admin_dictionary_create
                if (0 === strpos($pathinfo, '/admin/dictionary/create') && preg_match('#^/admin/dictionary/create/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dictionary_create')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DictionaryController::createAction',));
                }

            }

            // admin_dictionary_delete
            if (0 === strpos($pathinfo, '/admin/Dictionary') && preg_match('#^/admin/Dictionary/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_dictionary_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dictionary_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DictionaryController::deleteAction',));
            }
            not_admin_dictionary_delete:

            if (0 === strpos($pathinfo, '/admin/dictionary')) {
                // admin_dictionary_edit
                if (preg_match('#^/admin/dictionary/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dictionary_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DictionaryController::editAction',));
                }

                // admin_dictionary_name_check
                if (preg_match('#^/admin/dictionary/(?P<id>[^/]++)/name_check$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dictionary_name_check')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DictionaryController::checkNameAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/content')) {
                // admin_content_create
                if (0 === strpos($pathinfo, '/admin/content/create') && preg_match('#^/admin/content/create/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_create')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::createAction',));
                }

                // admin_content_edit
                if (preg_match('#^/admin/content/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::editAction',));
                }

                // admin_content_publish
                if (preg_match('#^/admin/content/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_content_publish;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_publish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::publishAction',));
                }
                not_admin_content_publish:

                // admin_content_trash
                if (preg_match('#^/admin/content/(?P<id>[^/]++)/trash$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_content_trash;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_trash')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::trashAction',));
                }
                not_admin_content_trash:

                // admin_content_delete
                if (preg_match('#^/admin/content/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_content_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::deleteAction',));
                }
                not_admin_content_delete:

                // admin_content_alias_check
                if ($pathinfo === '/admin/content/alias/check') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::aliasCheckAction',  '_route' => 'admin_content_alias_check',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/block')) {
                if (0 === strpos($pathinfo, '/admin/block/list')) {
                    // admin_block
                    if (preg_match('#^/admin/block/list\\-(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::indexAction',));
                    }

                    // admin_block_match
                    if ($pathinfo === '/admin/block/list/quikSearch') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::blockMatchAction',  '_route' => 'admin_block_match',);
                    }

                }

                // admin_block_create
                if ($pathinfo === '/admin/block/create') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::createAction',  '_route' => 'admin_block_create',);
                }

                // admin_block_delete
                if (preg_match('#^/admin/block/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_block_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::deleteAction',));
                }
                not_admin_block_delete:

                if (0 === strpos($pathinfo, '/admin/block/code')) {
                    // admin_block_code_check_forcreate
                    if ($pathinfo === '/admin/block/code/check/forcreate') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::checkBlockCodeForCreateAction',  '_route' => 'admin_block_code_check_forcreate',);
                    }

                    // admin_block_code_check_foredit
                    if (preg_match('#^/admin/block/code/(?P<id>[^/]++)/check/foredit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_code_check_foredit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::checkBlockTemplateCodeForEditAction',));
                    }

                }

                // admin_block_update
                if (preg_match('#^/admin/block/(?P<blockTemplateId>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_update')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::updateAction',));
                }

                // admin_block_edit
                if (preg_match('#^/admin/block/(?P<blockTemplateId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::editAction',));
                }

                // admin_block_visual_edit
                if (0 === strpos($pathinfo, '/admin/blockTemplate') && preg_match('#^/admin/blockTemplate/(?P<blockTemplateId>[^/]++)/visual/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_visual_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::visualEditAction',));
                }

                // admin_block_visual_view_data
                if (preg_match('#^/admin/block/(?P<blockTemplateId>[^/]++)/data/view$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_visual_view_data')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::dataViewAction',));
                }

                // admin_block_visual_edit_history
                if (0 === strpos($pathinfo, '/admin/blockTemplate') && preg_match('#^/admin/blockTemplate/(?P<blockTemplateId>[^/]++)/visual/edit/history$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_visual_edit_history')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::visualHistoryAction',));
                }

                // admin_block_recovery
                if (preg_match('#^/admin/block/(?P<blockTemplateId>[^/]++)/history/(?P<historyId>[^/]++)/recovery$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_recovery')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::recoveryAction',));
                }

                // admin_block_history_data
                if (0 === strpos($pathinfo, '/admin/block/histroy') && preg_match('#^/admin/block/histroy/(?P<blockId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_history_data')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::blockHistoriesDataAction',));
                }

                // admin_block_picture_upload
                if (preg_match('#^/admin/block/(?P<blockId>[^/]++)/picture/upload$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_picture_upload')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::uploadAction',));
                }

                // admin_block_picture_preview
                if (preg_match('#^/admin/block/(?P<blockId>[^/]++)/picture/preview$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_picture_preview')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::picPreviewAction',));
                }

                // admin_blockhistory_preview
                if (0 === strpos($pathinfo, '/admin/blockhistory') && preg_match('#^/admin/blockhistory/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blockhistory_preview')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::previewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/tag')) {
                // admin_tag
                if ($pathinfo === '/admin/tag') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::indexAction',  '_route' => 'admin_tag',);
                }

                if (0 === strpos($pathinfo, '/admin/tag/c')) {
                    // admin_tag_create
                    if ($pathinfo === '/admin/tag/create') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::createAction',  '_route' => 'admin_tag_create',);
                    }

                    // admin_tag_checkname
                    if ($pathinfo === '/admin/tag/checkname') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::checkNameAction',  '_route' => 'admin_tag_checkname',);
                    }

                }

                // admin_tag_update
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_update')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::updateAction',));
                }

                // admin_tag_delete
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_tag_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::deleteAction',));
                }
                not_admin_tag_delete:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                }

                if (0 === strpos($pathinfo, '/admin/user/create')) {
                    // admin_user_create
                    if ($pathinfo === '/admin/user/create') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                    }

                    // admin_user_create_email_check
                    if ($pathinfo === '/admin/user/create/email/check') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::emailCheckAction',  '_route' => 'admin_user_create_email_check',);
                    }

                    // admin_user_create_mobile_check
                    if ($pathinfo === '/admin/user/create/mobile/check') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::mobileCheckAction',  '_route' => 'admin_user_create_mobile_check',);
                    }

                    // admin_user_create_email_or_mobile_check
                    if ($pathinfo === '/admin/user/create/email_or_mobile/check') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::emailOrMobileCheckAction',  '_route' => 'admin_user_create_email_or_mobile_check',);
                    }

                    // admin_user_create_nickname_check
                    if ($pathinfo === '/admin/user/create/nickname/check') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::nicknameCheckAction',  '_route' => 'admin_user_create_nickname_check',);
                    }

                }

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::showAction',));
                }

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::editAction',));
                }

                // admin_user_org_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/org/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_org_update')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::orgUpdateAction',));
                }

                // admin_user_lock
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/lock$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_lock;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_lock')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::lockAction',));
                }
                not_admin_user_lock:

                // admin_user_unlock
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/unlock$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_unlock;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_unlock')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::unlockAction',));
                }
                not_admin_user_unlock:

                // admin_user_roles
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/roles$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_roles')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::rolesAction',));
                }

                // admin_user_avatar
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/avatar$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_avatar')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::avatarAction',));
                }

                // admin_user_avatar_crop
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/avatar/crop$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_avatar_crop')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::avatarCropAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/teacher')) {
                // admin_teacher
                if ($pathinfo === '/admin/teacher') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TeacherController::indexAction',  '_route' => 'admin_teacher',);
                }

                // admin_teacher_promote
                if (preg_match('#^/admin/teacher/(?P<id>[^/]++)/promote$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_teacher_promote')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TeacherController::promoteAction',));
                }

                // admin_teacher_promote_list
                if ($pathinfo === '/admin/teacher/promote/list') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TeacherController::promoteListAction',  '_route' => 'admin_teacher_promote_list',);
                }

                // admin_teacher_promote_cancel
                if (preg_match('#^/admin/teacher/(?P<id>[^/]++)/promote/cancel$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_teacher_promote_cancel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_teacher_promote_cancel')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TeacherController::promoteCancelAction',));
                }
                not_admin_teacher_promote_cancel:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_change_password
                if (preg_match('#^/admin/user/(?P<userId>[^/]++)/change/password$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_change_password')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::changePasswordAction',));
                }

                // admin_user_send_passwordreset_email
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/send_passwordreset_email$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_send_passwordreset_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_send_passwordreset_email')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::sendPasswordResetEmailAction',));
                }
                not_admin_user_send_passwordreset_email:

                // admin_user_send_emailverify_email
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/send_emailverify_email$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_send_emailverify_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_send_emailverify_email')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::sendEmailVerifyEmailAction',));
                }
                not_admin_user_send_emailverify_email:

            }

            if (0 === strpos($pathinfo, '/admin/comment')) {
                // admin_comment
                if ($pathinfo === '/admin/comment') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CommentController::indexAction',  '_route' => 'admin_comment',);
                }

                // admin_comment_delete
                if (preg_match('#^/admin/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_comment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CommentController::deleteAction',));
                }
                not_admin_comment_delete:

            }

            if (0 === strpos($pathinfo, '/admin/s')) {
                // admin_statistic
                if ($pathinfo === '/admin/statistic') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\StatisticController::indexAction',  '_route' => 'admin_statistic',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/navigation')) {
                    // admin_navigation
                    if ($pathinfo === '/admin/setting/navigation') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::indexAction',  '_route' => 'admin_navigation',);
                    }

                    // admin_navigation_seqs_update
                    if ($pathinfo === '/admin/setting/navigation/seqs/update') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::updateSeqsAction',  '_route' => 'admin_navigation_seqs_update',);
                    }

                    // admin_navigation_create
                    if ($pathinfo === '/admin/setting/navigation/create') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::createAction',  '_route' => 'admin_navigation_create',);
                    }

                    // admin_navigation_update
                    if (preg_match('#^/admin/setting/navigation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_navigation_update')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::updateAction',));
                    }

                    // admin_navigation_delete
                    if (preg_match('#^/admin/setting/navigation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_navigation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_navigation_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::deleteAction',));
                    }
                    not_admin_navigation_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/review')) {
                // admin_review
                if ($pathinfo === '/admin/review') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseReviewController::indexAction',  '_route' => 'admin_review',);
                }

                // admin_review_delete
                if (preg_match('#^/admin/review/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_review_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_review_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseReviewController::deleteAction',));
                }
                not_admin_review_delete:

                // admin_review_batch_delete
                if ($pathinfo === '/admin/review/batch_delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_review_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseReviewController::batchDeleteAction',  '_route' => 'admin_review_batch_delete',);
                }
                not_admin_review_batch_delete:

            }

            if (0 === strpos($pathinfo, '/admin/note')) {
                // admin_note
                if ($pathinfo === '/admin/note') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseNoteController::indexAction',  '_route' => 'admin_note',);
                }

                // admin_note_delete
                if (preg_match('#^/admin/note/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_note_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_note_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseNoteController::deleteAction',));
                }
                not_admin_note_delete:

                // admin_note_batch_delete
                if ($pathinfo === '/admin/note/batch_delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_note_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseNoteController::batchDeleteAction',  '_route' => 'admin_note_batch_delete',);
                }
                not_admin_note_batch_delete:

            }

            if (0 === strpos($pathinfo, '/admin/course')) {
                // admin_course
                if (preg_match('#^/admin/course/(?P<filter>[^/]++)/index$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::indexAction',  'filter' => 'normal',));
                }

                // admin_course_delete
                if (preg_match('#^/admin/course/(?P<courseId>[^/]++)/delete(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::deleteAction',  'type' => '',));
                }

            }

            // admin_open_course_delete
            if (0 === strpos($pathinfo, '/admin/open/course') && preg_match('#^/admin/open/course/(?P<courseId>[^/]++)/delete(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_open_course_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_open_course_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseController::deleteAction',  'type' => '',));
            }
            not_admin_open_course_delete:

            if (0 === strpos($pathinfo, '/admin/c')) {
                // admin_check_password
                if ($pathinfo === '/admin/check/password') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::checkPasswordAction',  '_route' => 'admin_check_password',);
                }

                // admin_course_publish
                if (0 === strpos($pathinfo, '/admin/course') && preg_match('#^/admin/course/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_publish;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_publish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::publishAction',));
                }
                not_admin_course_publish:

            }

            // admin_open_course_publish
            if (0 === strpos($pathinfo, '/admin/open/course') && preg_match('#^/admin/open/course/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_open_course_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_open_course_publish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseController::publishAction',));
            }
            not_admin_open_course_publish:

            // admin_course_close
            if (0 === strpos($pathinfo, '/admin/course') && preg_match('#^/admin/course/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_course_close;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_close')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::closeAction',));
            }
            not_admin_course_close:

            if (0 === strpos($pathinfo, '/admin/open/course')) {
                // admin_open_course_close
                if (preg_match('#^/admin/open/course/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_open_course_close;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_open_course_close')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseController::closeAction',));
                }
                not_admin_open_course_close:

                // admin_open_course_recommend_list
                if ($pathinfo === '/admin/open/course/recommend/list') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseController::recommendListAction',  '_route' => 'admin_open_course_recommend_list',);
                }

                // admin_open_course_recommend
                if (preg_match('#^/admin/open/course/(?P<id>[^/]++)/recommend$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_open_course_recommend')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseController::recommendAction',));
                }

                // admin_open_course_cancel_recommend
                if (preg_match('#^/admin/open/course/(?P<id>[^/]++)/recommend/cancel/(?P<target>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_open_course_cancel_recommend;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_open_course_cancel_recommend')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseController::cancelRecommendAction',));
                }
                not_admin_open_course_cancel_recommend:

            }

            if (0 === strpos($pathinfo, '/admin/course')) {
                // admin_course_copy
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/copy$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_copy')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::copyAction',));
                }

                // admin_course_coping
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/coping$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_coping')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::copingAction',));
                }

                // admin_course_recommend
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/recommend$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_recommend')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::recommendAction',));
                }

                // admin_course_cancel_recommend
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/recommend/cancel/(?P<target>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_cancel_recommend;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_cancel_recommend')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::cancelRecommendAction',));
                }
                not_admin_course_cancel_recommend:

                // admin_course_chooser
                if ($pathinfo === '/admin/course/chooser') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::chooserAction',  '_route' => 'admin_course_chooser',);
                }

                // admin_course_recommend_list
                if ($pathinfo === '/admin/course/recommend/list') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::recommendListAction',  '_route' => 'admin_course_recommend_list',);
                }

                // admin_course_category
                if ($pathinfo === '/admin/course/category') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::categoryAction',  '_route' => 'admin_course_category',);
                }

                // admin_course_data
                if (preg_match('#^/admin/course/(?P<filter>[^/]++)/data$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_data')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::dataAction',  'filter' => 'normal',));
                }

                // admin_course_lesson_data
                if (0 === strpos($pathinfo, '/admin/course/lesson/data') && preg_match('#^/admin/course/lesson/data/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_lesson_data')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::lessonDataAction',));
                }

                // admin_course_disk
                if ($pathinfo === '/admin/course/disk') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseDiskController::indexAction',  '_route' => 'admin_course_disk',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/disk')) {
                // admin_course_disk_delete
                if (preg_match('#^/admin/disk/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_disk_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_disk_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseDiskController::deleteAction',));
                }
                not_admin_course_disk_delete:

                // admin_course_disk_batch_delete
                if ($pathinfo === '/admin/disk/batch_delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_disk_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseDiskController::batchDeleteAction',  '_route' => 'admin_course_disk_batch_delete',);
                }
                not_admin_course_disk_batch_delete:

            }

            if (0 === strpos($pathinfo, '/admin/course')) {
                // admin_course_order_manage
                if ($pathinfo === '/admin/course/order/manage') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseOrderController::manageAction',  '_route' => 'admin_course_order_manage',);
                }

                if (0 === strpos($pathinfo, '/admin/course/search')) {
                    // admin_course_search
                    if ($pathinfo === '/admin/course/search') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::searchAction',  '_route' => 'admin_course_search',);
                    }

                    // admin_course_search_to_fill_banner
                    if ($pathinfo === '/admin/course/search_to_fill_banner') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::searchToFillBannerAction',  '_route' => 'admin_course_search_to_fill_banner',);
                    }

                }

            }

            // admin_live_course
            if (0 === strpos($pathinfo, '/admin/livecourse') && preg_match('#^/admin/livecourse/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_live_course')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LiveCourseController::indexAction',));
            }

            // admin_open_course
            if (0 === strpos($pathinfo, '/admin/open/course') && preg_match('#^/admin/open/course(?:/(?P<filter>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_open_course')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OpenCourseController::indexAction',  'filter' => 'open',));
            }

            // admin_live_get_max_online
            if ($pathinfo === '/admin/livecourse/get/maxOnline') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LiveCourseController::getMaxOnlineAction',  '_route' => 'admin_live_get_max_online',);
            }

            if (0 === strpos($pathinfo, '/admin/order')) {
                // admin_order
                if ($pathinfo === '/admin/order') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OrderController::indexAction',  '_route' => 'admin_order',);
                }

                // admin_order_detail
                if (preg_match('#^/admin/order/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_detail')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OrderController::detailAction',));
                }

                // admin_order_refunds
                if (0 === strpos($pathinfo, '/admin/order/refunds') && preg_match('#^/admin/order/refunds/(?P<targetType>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_refunds')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OrderRefundController::refundsAction',));
                }

                // admin_order_cancel_refund
                if (preg_match('#^/admin/order/(?P<id>[^/]++)/cancel_refund$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_order_cancel_refund;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_cancel_refund')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OrderRefundController::cancelRefundAction',));
                }
                not_admin_order_cancel_refund:

                // admin_order_audit_refund
                if (preg_match('#^/admin/order/(?P<id>[^/]++)/audit_refund$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_audit_refund')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OrderRefundController::auditRefundAction',));
                }

            }

            // admin_setting_site
            if ($pathinfo === '/admin/setting/site') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SiteSettingController::siteAction',  '_route' => 'admin_setting_site',);
            }

            if (0 === strpos($pathinfo, '/admin/operation/mobile')) {
                // admin_operation_mobile
                if ($pathinfo === '/admin/operation/mobile') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MobileController::mobileAction',  '_route' => 'admin_operation_mobile',);
                }

                // admin_operation_mobile_select
                if ($pathinfo === '/admin/operation/mobile/select') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MobileController::mobileSelectAction',  '_route' => 'admin_operation_mobile_select',);
                }

                // admin_operation_mobile_customization_upgrade
                if ($pathinfo === '/admin/operation/mobile/customization_upgrade') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_operation_mobile_customization_upgrade;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MobileController::customizationUpgradeAction',  '_route' => 'admin_operation_mobile_customization_upgrade',);
                }
                not_admin_operation_mobile_customization_upgrade:

            }

            if (0 === strpos($pathinfo, '/admin/discovery_column')) {
                // admin_discovery_column_delete
                if (preg_match('#^/admin/discovery_column/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_discovery_column_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_discovery_column_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DiscoveryColumnController::deleteAction',));
                }
                not_admin_discovery_column_delete:

                // admin_discovery_column_edit
                if (preg_match('#^/admin/discovery_column/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_discovery_column_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DiscoveryColumnController::editAction',));
                }

                // admin_discovery_column_title_check
                if (preg_match('#^/admin/discovery_column/(?P<id>[^/]++)/title_check$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_discovery_column_title_check')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DiscoveryColumnController::checkTitleAction',));
                }

                // admin_discovery_column_sort
                if ($pathinfo === '/admin/discovery_column/sort') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DiscoveryColumnController::sortAction',  '_route' => 'admin_discovery_column_sort',);
                }

                // admin_discovery_column_index
                if ($pathinfo === '/admin/discovery_column/index') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DiscoveryColumnController::indexAction',  '_route' => 'admin_discovery_column_index',);
                }

                // admin_discovery_column_create
                if ($pathinfo === '/admin/discovery_column/create') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DiscoveryColumnController::createAction',  '_route' => 'admin_discovery_column_create',);
                }

            }

            // admin_setting_mobile
            if ($pathinfo === '/admin/setting/mobile') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mobileAction',  '_route' => 'admin_setting_mobile',);
            }

            // admin_operation_mobile_picture_upload
            if (0 === strpos($pathinfo, '/admin/operation/mobile/picture/upload') && preg_match('#^/admin/operation/mobile/picture/upload/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_operation_mobile_picture_upload;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_mobile_picture_upload')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MobileController::mobilePictureUploadAction',));
            }
            not_admin_operation_mobile_picture_upload:

            // admin_setting_mobile_picture_upload
            if (0 === strpos($pathinfo, '/admin/setting/mobile/picture/upload') && preg_match('#^/admin/setting/mobile/picture/upload/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_setting_mobile_picture_upload;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting_mobile_picture_upload')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mobilePictureUploadAction',));
            }
            not_admin_setting_mobile_picture_upload:

            // admin_operation_mobile_picture_remove
            if (0 === strpos($pathinfo, '/admin/operation/mobile/picture/remove') && preg_match('#^/admin/operation/mobile/picture/remove/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_operation_mobile_picture_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_mobile_picture_remove')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MobileController::mobilePictureRemoveAction',));
            }
            not_admin_operation_mobile_picture_remove:

            if (0 === strpos($pathinfo, '/admin/setting')) {
                // admin_setting_mobile_picture_remove
                if (0 === strpos($pathinfo, '/admin/setting/mobile/picture/remove') && preg_match('#^/admin/setting/mobile/picture/remove/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_setting_mobile_picture_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting_mobile_picture_remove')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mobilePictureRemoveAction',));
                }
                not_admin_setting_mobile_picture_remove:

                if (0 === strpos($pathinfo, '/admin/setting/l')) {
                    if (0 === strpos($pathinfo, '/admin/setting/logo')) {
                        // admin_setting_logo_upload
                        if ($pathinfo === '/admin/setting/logo/upload') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_logo_upload;
                            }

                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::logoUploadAction',  '_route' => 'admin_setting_logo_upload',);
                        }
                        not_admin_setting_logo_upload:

                        // admin_setting_logo_remove
                        if ($pathinfo === '/admin/setting/logo/remove') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_logo_remove;
                            }

                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::logoRemoveAction',  '_route' => 'admin_setting_logo_remove',);
                        }
                        not_admin_setting_logo_remove:

                    }

                    if (0 === strpos($pathinfo, '/admin/setting/live/logo')) {
                        // admin_setting_live_logo_upload
                        if ($pathinfo === '/admin/setting/live/logo/upload') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_live_logo_upload;
                            }

                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::liveLogoUploadAction',  '_route' => 'admin_setting_live_logo_upload',);
                        }
                        not_admin_setting_live_logo_upload:

                        // admin_setting_live_logo_remove
                        if ($pathinfo === '/admin/setting/live/logo/remove') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_live_logo_remove;
                            }

                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::liveLogoRemoveAction',  '_route' => 'admin_setting_live_logo_remove',);
                        }
                        not_admin_setting_live_logo_remove:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/setting/favicon')) {
                    // admin_setting_favicon_upload
                    if ($pathinfo === '/admin/setting/favicon/upload') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_favicon_upload;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::faviconUploadAction',  '_route' => 'admin_setting_favicon_upload',);
                    }
                    not_admin_setting_favicon_upload:

                    // admin_setting_favicon_remove
                    if ($pathinfo === '/admin/setting/favicon/remove') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_favicon_remove;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::faviconRemoveAction',  '_route' => 'admin_setting_favicon_remove',);
                    }
                    not_admin_setting_favicon_remove:

                }

                // admin_setting_auth
                if ($pathinfo === '/admin/setting/auth') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserSettingController::authAction',  '_route' => 'admin_setting_auth',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/mailer')) {
                    // admin_setting_mailer
                    if ($pathinfo === '/admin/setting/mailer') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mailerAction',  '_route' => 'admin_setting_mailer',);
                    }

                    // admin_setting_mailer_test
                    if ($pathinfo === '/admin/setting/mailer/test') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_setting_mailer_test;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mailerTestAction',  '_route' => 'admin_setting_mailer_test',);
                    }
                    not_admin_setting_mailer_test:

                }

                // admin_setting_login_bind
                if ($pathinfo === '/admin/setting/login-connect') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserSettingController::loginConnectAction',  '_route' => 'admin_setting_login_bind',);
                }

                // admin_setting_payment
                if ($pathinfo === '/admin/setting/payment') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\FinanceSettingController::paymentAction',  '_route' => 'admin_setting_payment',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/cloud')) {
                    // admin_setting_cloud_video
                    if ($pathinfo === '/admin/setting/cloud/video') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::videoAction',  '_route' => 'admin_setting_cloud_video',);
                    }

                    // admin_setting_cloud
                    if ($pathinfo === '/admin/setting/cloud') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::keyAction',  '_route' => 'admin_setting_cloud',);
                    }

                    if (0 === strpos($pathinfo, '/admin/setting/cloud/key')) {
                        // admin_setting_cloud_key
                        if ($pathinfo === '/admin/setting/cloud/key') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::keyAction',  '_route' => 'admin_setting_cloud_key',);
                        }

                        // admin_setting_cloud_key_info
                        if ($pathinfo === '/admin/setting/cloud/key/info') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::keyInfoAction',  '_route' => 'admin_setting_cloud_key_info',);
                        }

                        // admin_setting_cloud_key_bind
                        if ($pathinfo === '/admin/setting/cloud/key/bind') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::keyBindAction',  '_route' => 'admin_setting_cloud_key_bind',);
                        }

                        // admin_setting_cloud_key_update
                        if ($pathinfo === '/admin/setting/cloud/key/update') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::keyUpdateAction',  '_route' => 'admin_setting_cloud_key_update',);
                        }

                        // admin_setting_cloud_key_apply
                        if ($pathinfo === '/admin/setting/cloud/key/apply') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_cloud_key_apply;
                            }

                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::keyApplyAction',  '_route' => 'admin_setting_cloud_key_apply',);
                        }
                        not_admin_setting_cloud_key_apply:

                        // admin_setting_cloud_key_copyright
                        if ($pathinfo === '/admin/setting/cloud/key/copyright') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_cloud_key_copyright;
                            }

                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::keyCopyrightAction',  '_route' => 'admin_setting_cloud_key_copyright',);
                        }
                        not_admin_setting_cloud_key_copyright:

                    }

                    if (0 === strpos($pathinfo, '/admin/setting/cloud/video_')) {
                        if (0 === strpos($pathinfo, '/admin/setting/cloud/video_watermark')) {
                            // admin_setting_cloud_video_watermark_upload
                            if ($pathinfo === '/admin/setting/cloud/video_watermark/upload') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_setting_cloud_video_watermark_upload;
                                }

                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::videoWatermarkUploadAction',  '_route' => 'admin_setting_cloud_video_watermark_upload',);
                            }
                            not_admin_setting_cloud_video_watermark_upload:

                            // admin_setting_cloud_video_watermark_remove
                            if ($pathinfo === '/admin/setting/cloud/video_watermark/remove') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_setting_cloud_video_watermark_remove;
                                }

                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::videoWatermarkRemoveAction',  '_route' => 'admin_setting_cloud_video_watermark_remove',);
                            }
                            not_admin_setting_cloud_video_watermark_remove:

                        }

                        if (0 === strpos($pathinfo, '/admin/setting/cloud/video_embed_watermark')) {
                            // admin_setting_cloud_video_embed_watermark_upload
                            if ($pathinfo === '/admin/setting/cloud/video_embed_watermark/upload') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_setting_cloud_video_embed_watermark_upload;
                                }

                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::videoEmbedWatermarkUploadAction',  '_route' => 'admin_setting_cloud_video_embed_watermark_upload',);
                            }
                            not_admin_setting_cloud_video_embed_watermark_upload:

                            // admin_setting_cloud_video_embed_watermark_remove
                            if ($pathinfo === '/admin/setting/cloud/video_embed_watermark/remove') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_setting_cloud_video_embed_watermark_remove;
                                }

                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::videoWatermarkRemoveAction',  '_route' => 'admin_setting_cloud_video_embed_watermark_remove',);
                            }
                            not_admin_setting_cloud_video_embed_watermark_remove:

                        }

                    }

                }

                // admin_setting_refund
                if ($pathinfo === '/admin/setting/refund') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\FinanceSettingController::refundAction',  '_route' => 'admin_setting_refund',);
                }

                // admin_setting_default
                if ($pathinfo === '/admin/setting/default') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::defaultAction',  '_route' => 'admin_setting_default',);
                }

                // admin_setting_share
                if ($pathinfo === '/admin/setting/share') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SiteSettingController::shareAction',  '_route' => 'admin_setting_share',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/default')) {
                    // admin_setting_default_avatar_crop
                    if ($pathinfo === '/admin/setting/default/avatar/crop') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemDefaultSettingController::defaultAvatarCropAction',  '_route' => 'admin_setting_default_avatar_crop',);
                    }

                    // admin_setting_default_course_picture_crop
                    if ($pathinfo === '/admin/setting/default/course/picture/crop') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemDefaultSettingController::defaultCoursePictureCropAction',  '_route' => 'admin_setting_default_course_picture_crop',);
                    }

                }

                // admin_setting_ip_blacklist
                if ($pathinfo === '/admin/setting/ip-blacklist') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::ipBlacklistAction',  '_route' => 'admin_setting_ip_blacklist',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/theme')) {
                    // admin_setting_theme
                    if ($pathinfo === '/admin/setting/theme') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::indexAction',  '_route' => 'admin_setting_theme',);
                    }

                    // admin_setting_theme_change
                    if ($pathinfo === '/admin/setting/theme/change') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_theme_change;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::changeAction',  '_route' => 'admin_setting_theme_change',);
                    }
                    not_admin_setting_theme_change:

                }

            }

            if (0 === strpos($pathinfo, '/admin/theme')) {
                // admin_theme_manage
                if (preg_match('#^/admin/theme/(?P<uri>[^/]++)/manage$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_theme_manage')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::manageIndexAction',));
                }

                // admin_reset_currentTheme_config
                if (preg_match('#^/admin/theme/(?P<uri>[^/]++)/config/reset$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reset_currentTheme_config')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::resetConfigAction',));
                }

                // admin_save_themes_config
                if (preg_match('#^/admin/theme/(?P<uri>[^/]++)/config/save$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_save_themes_config;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_save_themes_config')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::saveConfigAction',));
                }
                not_admin_save_themes_config:

                // admin_confirm_themes_config
                if (preg_match('#^/admin/theme/(?P<uri>[^/]++)/config/confirm$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_confirm_themes_config')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::confirmConfigAction',));
                }

                // admin_themes_show
                if (preg_match('#^/admin/theme/(?P<uri>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_themes_show')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::showAction',));
                }

                // admin_themes_config_edit
                if (preg_match('#^/admin/theme/(?P<uri>[^/]++)/config/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_themes_config_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::themeConfigEditAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/setting')) {
                if (0 === strpos($pathinfo, '/admin/setting/user-')) {
                    // admin_setting_user_center
                    if ($pathinfo === '/admin/setting/user-center') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserSettingController::userCenterAction',  '_route' => 'admin_setting_user_center',);
                    }

                    // admin_setting_avatar
                    if ($pathinfo === '/admin/setting/user-avatar') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserSettingController::userAvatarAction',  '_route' => 'admin_setting_avatar',);
                    }

                    // admin_setting_user_fields
                    if ($pathinfo === '/admin/setting/user-fields') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserSettingController::userFieldsAction',  '_route' => 'admin_setting_user_fields',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/setting/course-')) {
                    // admin_setting_course_setting
                    if ($pathinfo === '/admin/setting/course-setting') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseSettingController::courseSettingAction',  '_route' => 'admin_setting_course_setting',);
                    }

                    // admin_setting_course_avatar
                    if ($pathinfo === '/admin/setting/course-avatar') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseSettingController::courseAvatarAction',  '_route' => 'admin_setting_course_avatar',);
                    }

                }

                // admin_setting_live_course_setting
                if ($pathinfo === '/admin/setting/live-course-setting') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseSettingController::liveCourseSettingAction',  '_route' => 'admin_setting_live_course_setting',);
                }

                // admin_setting_questions_setting
                if ($pathinfo === '/admin/setting/questions-setting') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseSettingController::questionsSettingAction',  '_route' => 'admin_setting_questions_setting',);
                }

                // admin_setting_consult_setting
                if ($pathinfo === '/admin/setting/consult-setting') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SiteSettingController::consultSettingAction',  '_route' => 'admin_setting_consult_setting',);
                }

                // admin_setting_es_bar
                if ($pathinfo === '/admin/setting/es-bar') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SiteSettingController::esBarSettingAction',  '_route' => 'admin_setting_es_bar',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/consult-')) {
                    // admin_setting_consult_upload
                    if ($pathinfo === '/admin/setting/consult-upload') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SiteSettingController::consultUploadAction',  '_route' => 'admin_setting_consult_upload',);
                    }

                    // admin_setting_consult_webchat_delete
                    if ($pathinfo === '/admin/setting/consult-webchat-delete') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_consult_webchat_delete;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SiteSettingController::deleteWebchatAction',  '_route' => 'admin_setting_consult_webchat_delete',);
                    }
                    not_admin_setting_consult_webchat_delete:

                }

                // admin_setting_admin_sync
                if ($pathinfo === '/admin/setting/admin_sync') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::adminSyncAction',  '_route' => 'admin_setting_admin_sync',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/developer')) {
                    // admin_setting_developer
                    if ($pathinfo === '/admin/setting/developer') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DeveloperSettingController::indexAction',  '_route' => 'admin_setting_developer',);
                    }

                    // admin_setting_developer_version
                    if ($pathinfo === '/admin/setting/developer/version') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DeveloperSettingController::versionAction',  '_route' => 'admin_setting_developer_version',);
                    }

                    // admin_setting_developer_magic
                    if ($pathinfo === '/admin/setting/developer/magic') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DeveloperSettingController::magicAction',  '_route' => 'admin_setting_developer_magic',);
                    }

                    // admin_setting_developer_sync_file_data
                    if ($pathinfo === '/admin/setting/developer/sync_upload_file') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DeveloperSettingController::syncUploadFileAction',  '_route' => 'admin_setting_developer_sync_file_data',);
                    }

                }

                // admin_setting_post_num_rules
                if ($pathinfo === '/admin/setting/post_num_rules') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::postNumRulesAction',  '_route' => 'admin_setting_post_num_rules',);
                }

                // admin_setting_cdn
                if ($pathinfo === '/admin/setting/cdn') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CdnSettingController::indexAction',  '_route' => 'admin_setting_cdn',);
                }

                // admin_setting_redis
                if ($pathinfo === '/admin/setting/redis') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DeveloperSettingController::redisAction',  '_route' => 'admin_setting_redis',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/optimize')) {
                    // admin_optimize
                    if ($pathinfo === '/admin/setting/optimize') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::indexAction',  '_route' => 'admin_optimize',);
                    }

                    // admin_optimize_remove_cache
                    if ($pathinfo === '/admin/setting/optimize/remove-cache') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_optimize_remove_cache;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::removeCacheAction',  '_route' => 'admin_optimize_remove_cache',);
                    }
                    not_admin_optimize_remove_cache:

                }

            }

            // admin_optimize_remove_tmp
            if ($pathinfo === '/admin/optimize/remove-tmp') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_optimize_remove_tmp;
                }

                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::removeTempAction',  '_route' => 'admin_optimize_remove_tmp',);
            }
            not_admin_optimize_remove_tmp:

            if (0 === strpos($pathinfo, '/admin/setting')) {
                if (0 === strpos($pathinfo, '/admin/setting/optimize')) {
                    // admin_optimize_remove_backup
                    if ($pathinfo === '/admin/setting/optimize/remove-backup') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_optimize_remove_backup;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::removeBackupAction',  '_route' => 'admin_optimize_remove_backup',);
                    }
                    not_admin_optimize_remove_backup:

                    // admin_optimize_backupdb
                    if ($pathinfo === '/admin/setting/optimize/backupdb') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_optimize_backupdb;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::backupdbAction',  '_route' => 'admin_optimize_backupdb',);
                    }
                    not_admin_optimize_backupdb:

                    // admin_optimize_remove_upload_files
                    if ($pathinfo === '/admin/setting/optimize/remove-unusedfiles') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::removeUnusedFilesAction',  '_route' => 'admin_optimize_remove_upload_files',);
                    }

                    // admin_optimize_remove_show_progressbar
                    if ($pathinfo === '/admin/setting/optimize/show-progressbar') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::showProgressbarAction',  '_route' => 'admin_optimize_remove_show_progressbar',);
                    }

                }

                // admin_jobs
                if ($pathinfo === '/admin/setting/jobs') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\JobController::indexAction',  '_route' => 'admin_jobs',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/logs')) {
                    // admin_logs
                    if ($pathinfo === '/admin/setting/logs') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LogController::indexAction',  '_route' => 'admin_logs',);
                    }

                    // admin_logs_prod
                    if ($pathinfo === '/admin/setting/logs/prod') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LogController::prodAction',  '_route' => 'admin_logs_prod',);
                    }

                    // admin_logs_action_dicts
                    if ($pathinfo === '/admin/setting/logs/logActions') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LogController::logActionsAction',  '_route' => 'admin_logs_action_dicts',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/cloud')) {
                    // admin_cloud_access
                    if ($pathinfo === '/admin/cloud/access') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::accessAction',  '_route' => 'admin_cloud_access',);
                    }

                    // admin_cloud_bill
                    if ($pathinfo === '/admin/cloud/bill') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::billAction',  '_route' => 'admin_cloud_bill',);
                    }

                    // admin_cloud_recharge
                    if ($pathinfo === '/admin/cloud/recharge') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::rechargeAction',  '_route' => 'admin_cloud_recharge',);
                    }

                    // admin_cloud_detail
                    if ($pathinfo === '/admin/cloud/detail') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::detailAction',  '_route' => 'admin_cloud_detail',);
                    }

                    // admin_cloud_buy
                    if (preg_match('#^/admin/cloud/(?P<type>[^/]++)/buy$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cloud_buy')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::buyAction',));
                    }

                    // admin_cloud_tlp
                    if ($pathinfo === '/admin/cloud/tlp') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::tlpAction',  '_route' => 'admin_cloud_tlp',);
                    }

                    // admin_cloud_video
                    if ($pathinfo === '/admin/cloud/video') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::videoAction',  '_route' => 'admin_cloud_video',);
                    }

                    // admin_cloud_doc
                    if ($pathinfo === '/admin/cloud/doc') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::docAction',  '_route' => 'admin_cloud_doc',);
                    }

                    // admin_cloud_live
                    if ($pathinfo === '/admin/cloud/live') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::liveAction',  '_route' => 'admin_cloud_live',);
                    }

                    // admin_cloud_sms_account
                    if ($pathinfo === '/admin/cloud/sms/account') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::smsAccountAction',  '_route' => 'admin_cloud_sms_account',);
                    }

                    if (0 === strpos($pathinfo, '/admin/cloud/video')) {
                        // admin_cloud_video_account
                        if ($pathinfo === '/admin/cloud/video/account') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::videoAccountAction',  '_route' => 'admin_cloud_video_account',);
                        }

                        // admin_cloud_video_upgrade
                        if ($pathinfo === '/admin/cloud/video/upgrade') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::videoUpgradeAction',  '_route' => 'admin_cloud_video_upgrade',);
                        }

                        // admin_cloud_video_renew
                        if ($pathinfo === '/admin/cloud/video/renew') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::videoRenewAction',  '_route' => 'admin_cloud_video_renew',);
                        }

                    }

                }

                // admin_customer_service
                if ($pathinfo === '/admin/customer/service') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::customerServiceAction',  '_route' => 'admin_customer_service',);
                }

            }

            // admin_app_center
            if (0 === strpos($pathinfo, '/admin/app/center') && preg_match('#^/admin/app/center(?:/(?P<postStatus>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_center')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::centerAction',  'postStatus' => 'all',));
            }

            if (0 === strpos($pathinfo, '/admin/setting/my/cloud')) {
                // admin_my_cloud
                if ($pathinfo === '/admin/setting/my/cloud') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::myCloudAction',  '_route' => 'admin_my_cloud',);
                }

                // admin_my_cloud_overview
                if ($pathinfo === '/admin/setting/my/cloud/overview') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::myCloudOverviewAction',  '_route' => 'admin_my_cloud_overview',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/cloud_file')) {
                if (0 === strpos($pathinfo, '/admin/cloud_files')) {
                    // admin_cloud_file
                    if ($pathinfo === '/admin/cloud_files') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::indexAction',  '_route' => 'admin_cloud_file',);
                    }

                    // admin_cloud_file_manage
                    if ($pathinfo === '/admin/cloud_files/manage') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::manageAction',  '_route' => 'admin_cloud_file_manage',);
                    }

                    // admin_cloud_file_render_table
                    if ($pathinfo === '/admin/cloud_files/table/render') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::renderAction',  '_route' => 'admin_cloud_file_render_table',);
                    }

                }

                // admin_cloud_file_detail
                if (preg_match('#^/admin/cloud_file/(?P<globalId>[^/]++)/detail$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cloud_file_detail')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::detailAction',));
                }

                // admin_cloud_file_edit
                if (preg_match('#^/admin/cloud_file/(?P<globalId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_cloud_file_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cloud_file_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::editAction',  'fields' => '',));
                }
                not_admin_cloud_file_edit:

                // admin_cloud_file_preview
                if (preg_match('#^/admin/cloud_file/(?P<globalId>[^/]++)/preview$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cloud_file_preview')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::previewAction',));
                }

                // admin_cloud_file_reconvert
                if (preg_match('#^/admin/cloud_file/(?P<globalId>[^/]++)/reconvert$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cloud_file_reconvert')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::reconvertAction',));
                }

                // admin_cloud_file_download
                if (preg_match('#^/admin/cloud_file/(?P<globalId>[^/]++)/download$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cloud_file_download')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::downloadAction',));
                }

                // admin_cloud_file_delete
                if (preg_match('#^/admin/cloud_file/(?P<globalId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_cloud_file_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cloud_file_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::deleteAction',));
                }
                not_admin_cloud_file_delete:

                if (0 === strpos($pathinfo, '/admin/cloud_file/delete')) {
                    // admin_cloud_file_batch_delete
                    if ($pathinfo === '/admin/cloud_file/delete/batch') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_cloud_file_batch_delete;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::batchDeleteAction',  '_route' => 'admin_cloud_file_batch_delete',);
                    }
                    not_admin_cloud_file_batch_delete:

                    // admin_cloud_file_delete_modal_show
                    if ($pathinfo === '/admin/cloud_file/delete/show') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::deleteShowAction',  '_route' => 'admin_cloud_file_delete_modal_show',);
                    }

                }

                // admin_cloud_file_tag_show
                if ($pathinfo === '/admin/cloud_file/tag/show') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudFileController::batchTagShowAction',  '_route' => 'admin_cloud_file_tag_show',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/app')) {
                // admin_app_installed
                if (0 === strpos($pathinfo, '/admin/app/installed') && preg_match('#^/admin/app/installed/(?P<postStatus>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_installed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::installedAction',));
                }

                if (0 === strpos($pathinfo, '/admin/app/u')) {
                    // admin_app_uninstall
                    if ($pathinfo === '/admin/app/uninstall') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::uninstallAction',  '_route' => 'admin_app_uninstall',);
                    }

                    if (0 === strpos($pathinfo, '/admin/app/upgrades')) {
                        // admin_app_upgrades
                        if ($pathinfo === '/admin/app/upgrades') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::upgradesAction',  '_route' => 'admin_app_upgrades',);
                        }

                        // admin_app_upgrades_count
                        if ($pathinfo === '/admin/app/upgrades_count') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::upgradesCountAction',  '_route' => 'admin_app_upgrades_count',);
                        }

                    }

                }

            }

            // admin_oldUpgradeCheck
            if ($pathinfo === '/admin/upgrade/check') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::oldUpgradeCheckAction',  '_route' => 'admin_oldUpgradeCheck',);
            }

            if (0 === strpos($pathinfo, '/admin/app')) {
                // admin_app_logs
                if ($pathinfo === '/admin/app/logs') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::logsAction',  '_route' => 'admin_app_logs',);
                }

                if (0 === strpos($pathinfo, '/admin/app/package_update')) {
                    // admin_app_package_update_modal
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/modal$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_modal')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::modalAction',));
                    }

                    // admin_app_package_update_check_environment
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/check_environment$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_environment;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_environment')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checkEnvironmentAction',));
                    }
                    not_admin_app_package_update_check_environment:

                    // admin_app_package_update_check_depends
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/check_depends$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_depends;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_depends')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checkDependsAction',));
                    }
                    not_admin_app_package_update_check_depends:

                    // admin_app_package_update_check_last_error
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/check_lasterror$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_last_error;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_last_error')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checklastErrorAction',));
                    }
                    not_admin_app_package_update_check_last_error:

                    // admin_app_package_update_backup_file
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/backup_file$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_backup_file;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_backup_file')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::backupFileAction',));
                    }
                    not_admin_app_package_update_backup_file:

                    // admin_app_package_update_backup_db
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/backup_db$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_backup_db;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_backup_db')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::backupDbAction',));
                    }
                    not_admin_app_package_update_backup_db:

                    // admin_app_package_update_download_and_extract
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/download_extract$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_download_and_extract;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_download_and_extract')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::downloadAndExtractAction',));
                    }
                    not_admin_app_package_update_download_and_extract:

                    // admin_app_package_update_check_download_and_extract
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/check_download_extract$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_download_and_extract;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_download_and_extract')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checkDownloadAndExtractAction',));
                    }
                    not_admin_app_package_update_check_download_and_extract:

                    // admin_app_package_update_begin_upgrade
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/begin_upgrade$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_begin_upgrade;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_begin_upgrade')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::beginUpgradeAction',));
                    }
                    not_admin_app_package_update_begin_upgrade:

                    // admin_app_package_update_check_newest
                    if (0 === strpos($pathinfo, '/admin/app/package_update/check/newest/code') && preg_match('#^/admin/app/package_update/check/newest/code/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_newest;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_newest')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checkNewestAction',));
                    }
                    not_admin_app_package_update_check_newest:

                }

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                if (0 === strpos($pathinfo, '/admin/category/c')) {
                    // admin_category_create
                    if ($pathinfo === '/admin/category/create') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                    }

                    // admin_category_checkcode
                    if ($pathinfo === '/admin/category/checkcode') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::checkCodeAction',  '_route' => 'admin_category_checkcode',);
                    }

                }

                // admin_category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::editAction',));
                }

                // admin_category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_admin_category_delete:

                // admin_category_sort
                if ($pathinfo === '/admin/category/sort') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_category_sort;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::sortAction',  '_route' => 'admin_category_sort',);
                }
                not_admin_category_sort:

            }

            if (0 === strpos($pathinfo, '/admin/file')) {
                // admin_file
                if ($pathinfo === '/admin/file') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\FileController::indexAction',  '_route' => 'admin_file',);
                }

                // admin_file_delete
                if (preg_match('#^/admin/file/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_file_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_file_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\FileController::deleteAction',));
                }
                not_admin_file_delete:

            }

            // admin_message
            if ($pathinfo === '/admin/message') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MessageController::indexAction',  '_route' => 'admin_message',);
            }

            // admin_message_delete_messages
            if ($pathinfo === '/admin/delete/choosed/messages') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_message_delete_messages;
                }

                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MessageController::deleteChoosedMessagesAction',  '_route' => 'admin_message_delete_messages',);
            }
            not_admin_message_delete_messages:

            if (0 === strpos($pathinfo, '/admin/login_record')) {
                // admin_login_record
                if ($pathinfo === '/admin/login_record') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LoginRecordController::indexAction',  '_route' => 'admin_login_record',);
                }

                // admin_login_record_details
                if (preg_match('#^/admin/login_record/(?P<id>[^/]++)/details$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_login_record_details')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LoginRecordController::showUserLoginRecordAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/thread')) {
                // admin_thread
                if ($pathinfo === '/admin/thread') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseThreadController::indexAction',  '_route' => 'admin_thread',);
                }

                // admin_thread_delete
                if (preg_match('#^/admin/thread/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_thread_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_thread_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseThreadController::deleteAction',));
                }
                not_admin_thread_delete:

                // admin_thread_batch_delete
                if ($pathinfo === '/admin/thread/batch_delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_thread_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseThreadController::batchDeleteAction',  '_route' => 'admin_thread_batch_delete',);
                }
                not_admin_thread_batch_delete:

            }

            // admin_question
            if (0 === strpos($pathinfo, '/admin/question') && preg_match('#^/admin/question/(?P<postStatus>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_question')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseQuestionController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/approvals')) {
                    // admin_approval_approvals
                    if (preg_match('#^/admin/approvals/(?P<approvalStatus>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_approval_approvals')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::approvalsAction',));
                    }

                    // admin_approval_approve
                    if (preg_match('#^/admin/approvals/(?P<id>[^/]++)/approve$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_approval_approve')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::approveAction',));
                    }

                    // admin_approval_info_view
                    if (preg_match('#^/admin/approvals/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_approval_info_view')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::viewApprovalInfoAction',));
                    }

                    // admin_approval_cancel
                    if (preg_match('#^/admin/approvals/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_approval_cancel;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_approval_cancel')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::cancelAction',));
                    }
                    not_admin_approval_cancel:

                    // show_idcard
                    if (0 === strpos($pathinfo, '/admin/approvals/idcard/show') && preg_match('#^/admin/approvals/idcard/show/(?P<userId>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_idcard')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::showIdcardAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/article/category')) {
                    // admin_article_category
                    if ($pathinfo === '/admin/article/category') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::indexAction',  '_route' => 'admin_article_category',);
                    }

                    if (0 === strpos($pathinfo, '/admin/article/category/c')) {
                        // admin_article_category_create
                        if ($pathinfo === '/admin/article/category/create') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::createAction',  '_route' => 'admin_article_category_create',);
                        }

                        if (0 === strpos($pathinfo, '/admin/article/category/check')) {
                            // admin_article_category_checkparentid
                            if ($pathinfo === '/admin/article/category/checkparentid') {
                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::checkParentIdAction',  '_route' => 'admin_article_category_checkparentid',);
                            }

                            // admin_article_category_checkcode
                            if ($pathinfo === '/admin/article/category/checkcode') {
                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::checkCodeAction',  '_route' => 'admin_article_category_checkcode',);
                            }

                        }

                    }

                    // admin_article_category_edit
                    if (preg_match('#^/admin/article/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_category_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::editAction',));
                    }

                    // admin_article_category_delete
                    if (preg_match('#^/admin/article/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_article_category_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_category_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::deleteAction',));
                    }
                    not_admin_article_category_delete:

                    // admin_article_category_sort
                    if ($pathinfo === '/admin/article/category/sort') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_article_category_sort;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::sortAction',  '_route' => 'admin_article_category_sort',);
                    }
                    not_admin_article_category_sort:

                }

            }

            // admin_article_setting
            if ($pathinfo === '/admin/setting/article') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OperationSettingController::articleSetAction',  '_route' => 'admin_article_setting',);
            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // admin_article
                if ($pathinfo === '/admin/article') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'admin_article',);
                }

                // admin_article_create
                if ($pathinfo === '/admin/article/create') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::createAction',  '_route' => 'admin_article_create',);
                }

                // admin_article_picture_crop
                if ($pathinfo === '/admin/article/picture/crop') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::pictureCropAction',  '_route' => 'admin_article_picture_crop',);
                }

                if (0 === strpos($pathinfo, '/admin/article/s')) {
                    // admin_article_show_upload
                    if ($pathinfo === '/admin/article/show/upload') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::showUploadAction',  '_route' => 'admin_article_show_upload',);
                    }

                    // admin_article_set_property
                    if (0 === strpos($pathinfo, '/admin/article/set/property') && preg_match('#^/admin/article/set/property/(?P<id>[^/]++)/(?P<property>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_set_property')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::setArticlePropertyAction',));
                    }

                }

                // admin_article_cancel_property
                if (0 === strpos($pathinfo, '/admin/article/cancel/property') && preg_match('#^/admin/article/cancel/property/(?P<id>[^/]++)/(?P<property>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_cancel_property')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::cancelArticlePropertyAction',));
                }

                // admin_article_edit
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::editAction',));
                }

                // admin_article_publish
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_article_publish;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_publish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::publishAction',));
                }
                not_admin_article_publish:

                // admin_article_unpublish
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/unpublish$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_article_unpublish;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_unpublish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::unpublishAction',));
                }
                not_admin_article_unpublish:

                // admin_article_thumb_remove
                if (0 === strpos($pathinfo, '/admin/article/thumb') && preg_match('#^/admin/article/thumb/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_thumb_remove')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::thumbRemoveAction',));
                }

                // admin_article_trash
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/trash$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_article_trash;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_trash')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::trashAction',));
                }
                not_admin_article_trash:

                // admin_article_delete
                if ($pathinfo === '/admin/article/delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_article_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::deleteAction',  '_route' => 'admin_article_delete',);
                }
                not_admin_article_delete:

            }

            if (0 === strpos($pathinfo, '/admin/invite')) {
                // admin_invite
                if ($pathinfo === '/admin/invite') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\InviteController::indexAction',  '_route' => 'admin_invite',);
                }

                // admin_invite_detail
                if ($pathinfo === '/admin/invite/detail') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\InviteController::inviteDetailAction',  '_route' => 'admin_invite_detail',);
                }

            }

            // admin_invite_set
            if ($pathinfo === '/admin/setting/invite') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OperationSettingController::inviteSetAction',  '_route' => 'admin_invite_set',);
            }

            if (0 === strpos($pathinfo, '/admin/invite')) {
                // admin_invite_coupon
                if (preg_match('#^/admin/invite/(?P<filter>[^/]++)/coupon/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_invite_coupon');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_invite_coupon')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\InviteController::couponAction',  'filter' => 'invited',));
                }

                // admin_invite_coupon_query
                if (rtrim($pathinfo, '/') === '/admin/invite/coupon/query') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_invite_coupon_query');
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\InviteController::queryInviteCouponAction',  '_route' => 'admin_invite_coupon_query',);
                }

            }

            // admin_group
            if (rtrim($pathinfo, '/') === '/admin/group') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_group');
                }

                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::indexAction',  '_route' => 'admin_group',);
            }

            // admin_group_set
            if ($pathinfo === '/admin/setting/group') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OperationSettingController::groupSetAction',  '_route' => 'admin_group_set',);
            }

            if (0 === strpos($pathinfo, '/admin/group')) {
                // admin_groupThread
                if ($pathinfo === '/admin/group/thread') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::threadAction',  '_route' => 'admin_groupThread',);
                }

                // admin_groupThread_batch_delete
                if ($pathinfo === '/admin/group/batchDeleteThread') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_groupThread_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::batchDeleteThreadAction',  '_route' => 'admin_groupThread_batch_delete',);
                }
                not_admin_groupThread_batch_delete:

                // admin_group_close
                if (preg_match('#^/admin/group/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_close')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::closeGroupAction',));
                }

                // admin_group_open
                if (preg_match('#^/admin/group/(?P<id>[^/]++)/open$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_open')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::openGroupAction',));
                }

                if (0 === strpos($pathinfo, '/admin/group/t')) {
                    if (0 === strpos($pathinfo, '/admin/group/thread')) {
                        // admin_group_thread_cancel_elite
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/removeElite$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_thread_cancel_elite')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::removeEliteAction',));
                        }

                        // admin_group_thread_set_elite
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/setElite$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_thread_set_elite')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::setEliteAction',));
                        }

                        // admin_group_thread_cancel_stick
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/removeStick$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_thread_cancel_stick')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::removeStickAction',));
                        }

                        // admin_group_thread_set_stick
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/setStick$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_thread_set_stick')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::setStickAction',));
                        }

                        // admin_group_thread_close
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/closeThread$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_thread_close')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::closeThreadAction',));
                        }

                        // admin_group_thread_open
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/openThread$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_thread_open')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::openThreadAction',));
                        }

                        // admin_group_thread_delete
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/deleteThread$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_group_thread_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_thread_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::deleteThreadAction',));
                        }
                        not_admin_group_thread_delete:

                    }

                    // admin_group_transfer
                    if (0 === strpos($pathinfo, '/admin/group/transfer') && preg_match('#^/admin/group/transfer/(?P<groupId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_transfer')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::transferGroupAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/operation/analysis')) {
                // admin_operation_analysis_register
                if (0 === strpos($pathinfo, '/admin/operation/analysis/register') && preg_match('#^/admin/operation/analysis/register/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_register')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::registerAction',));
                }

                // admin_operation_analysis_login
                if (0 === strpos($pathinfo, '/admin/operation/analysis/login') && preg_match('#^/admin/operation/analysis/login/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_login')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::loginAction',));
                }

                // admin_operation_analysis_course
                if (0 === strpos($pathinfo, '/admin/operation/analysis/course') && preg_match('#^/admin/operation/analysis/course/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_course')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::courseAction',));
                }

                if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson')) {
                    // admin_operation_analysis_lesson
                    if (preg_match('#^/admin/operation/analysis/lesson/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::lessonAction',));
                    }

                    // admin_operation_analysis_lesson_join
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson/join') && preg_match('#^/admin/operation/analysis/lesson/join/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson_join')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::joinLessonAction',));
                    }

                    // admin_operation_analysis_lesson_paid
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson/paid') && preg_match('#^/admin/operation/analysis/lesson/paid/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson_paid')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::paidLessonAction',));
                    }

                    // admin_operation_analysis_lesson_finished
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson/finished') && preg_match('#^/admin/operation/analysis/lesson/finished/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson_finished')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::finishedLessonAction',));
                    }

                }

                // admin_operation_analysis_classroom_paid
                if (0 === strpos($pathinfo, '/admin/operation/analysis/classroom/paid') && preg_match('#^/admin/operation/analysis/classroom/paid/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_classroom_paid')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::paidClassroomAction',));
                }

                if (0 === strpos($pathinfo, '/admin/operation/analysis/video')) {
                    // admin_operation_analysis_video_viewed
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/video/viewed') && preg_match('#^/admin/operation/analysis/video/viewed/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_video_viewed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::videoViewedAction',));
                    }

                    // admin_operation_analysis_video_cloud_viewed
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/video/cloud/viewed') && preg_match('#^/admin/operation/analysis/video/cloud/viewed/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_video_cloud_viewed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::cloudVideoViewedAction',));
                    }

                    // admin_operation_analysis_video_local_viewed
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/video/local/viewed') && preg_match('#^/admin/operation/analysis/video/local/viewed/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_video_local_viewed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::localVideoViewedAction',));
                    }

                    // admin_operation_analysis_video_net_viewed
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/video/net/viewed') && preg_match('#^/admin/operation/analysis/video/net/viewed/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_video_net_viewed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::netVideoViewedAction',));
                    }

                }

                // admin_operation_analysis_income
                if (0 === strpos($pathinfo, '/admin/operation/analysis/income') && preg_match('#^/admin/operation/analysis/income/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_income')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::incomeAction',));
                }

                if (0 === strpos($pathinfo, '/admin/operation/analysis/c')) {
                    // admin_operation_analysis_course_income
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/course/income') && preg_match('#^/admin/operation/analysis/course/income/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_course_income')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::courseIncomeAction',));
                    }

                    // admin_operation_analysis_classroom_income
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/classroom/income') && preg_match('#^/admin/operation/analysis/classroom/income/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_classroom_income')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::classroomIncomeAction',));
                    }

                }

                // admin_operation_analysis_vip_income
                if (0 === strpos($pathinfo, '/admin/operation/analysis/vip/income') && preg_match('#^/admin/operation/analysis/vip/income/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_vip_income')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::vipIncomeAction',));
                }

                // admin_operation_analysis_course_sum
                if (0 === strpos($pathinfo, '/admin/operation/analysis/course/sum') && preg_match('#^/admin/operation/analysis/course/sum/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_course_sum')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::courseSumAction',));
                }

                // admin_operation_analysis_user_sum
                if (0 === strpos($pathinfo, '/admin/operation/analysis/user/sum') && preg_match('#^/admin/operation/analysis/user/sum/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_user_sum')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::userSumAction',));
                }

                // admin_operation_analysis_rount
                if (0 === strpos($pathinfo, '/admin/operation/analysis/rountByanalysisDateType') && preg_match('#^/admin/operation/analysis/rountByanalysisDateType/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_rount')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::rountByanalysisDateTypeAction',));
                }

                // admin_operation_analysis_lesson_exit
                if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson/exit') && preg_match('#^/admin/operation/analysis/lesson/exit/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson_exit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::exitLessonAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/user_fields')) {
                // admin_user_fields_add
                if ($pathinfo === '/admin/user_fields/add') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserSettingController::addUserFieldsAction',  '_route' => 'admin_user_fields_add',);
                }

                // admin_user_fields_edit
                if (0 === strpos($pathinfo, '/admin/user_fields/edit') && preg_match('#^/admin/user_fields/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_fields_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserSettingController::editUserFieldsAction',));
                }

                // admin_user_fields_delete
                if (0 === strpos($pathinfo, '/admin/user_fields/delete') && preg_match('#^/admin/user_fields/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_fields_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserSettingController::deleteUserFieldsAction',));
                }

            }

            // admin_system_status
            if ($pathinfo === '/admin/system/status') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::systemStatusAction',  '_route' => 'admin_system_status',);
            }

            // admin_official_messages
            if ($pathinfo === '/admin/official/messages') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::officialMessagesAction',  '_route' => 'admin_official_messages',);
            }

            // admin_uploadfile_head_leader_params
            if ($pathinfo === '/admin/uploadfile/video/head/leader/params') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UploadFileController::headLeaderParamsAction',  '_route' => 'admin_uploadfile_head_leader_params',);
            }

            if (0 === strpos($pathinfo, '/admin/coin/picture')) {
                // admin_coin_picture
                if ($pathinfo === '/admin/coin/picture') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_coin_picture;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::pictureAction',  '_route' => 'admin_coin_picture',);
                }
                not_admin_coin_picture:

                // admin_coin_picture_remove
                if ($pathinfo === '/admin/coin/picture/remove') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_coin_picture_remove;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::pictureRemoveAction',  '_route' => 'admin_coin_picture_remove',);
                }
                not_admin_coin_picture_remove:

            }

            // admin_coin_settings
            if ($pathinfo === '/admin/setting/coin') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::settingsAction',  '_route' => 'admin_coin_settings',);
            }

            if (0 === strpos($pathinfo, '/admin/coin')) {
                // admin_coin_records
                if ($pathinfo === '/admin/coin/records') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::recordsAction',  '_route' => 'admin_coin_records',);
                }

                if (0 === strpos($pathinfo, '/admin/coin/orders')) {
                    // admin_coin_orders
                    if ($pathinfo === '/admin/coin/orders') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinOrderController::ordersAction',  '_route' => 'admin_coin_orders',);
                    }

                    // admin_coin_orders_log
                    if (0 === strpos($pathinfo, '/admin/coin/orders/log') && preg_match('#^/admin/coin/orders/log/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coin_orders_log')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinOrderController::logsAction',));
                    }

                }

                // admin_coin_admin_edit
                if (0 === strpos($pathinfo, '/admin/coin/admin/edit') && preg_match('#^/admin/coin/admin/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coin_admin_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::editAction',));
                }

                if (0 === strpos($pathinfo, '/admin/coin/give')) {
                    // admin_coin_give
                    if ($pathinfo === '/admin/coin/give') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::giveCoinAction',  '_route' => 'admin_coin_give',);
                    }

                    // admin_coin_give_check_nickname
                    if ($pathinfo === '/admin/coin/give/check_nickname') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::checkNicknameAction',  '_route' => 'admin_coin_give_check_nickname',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coin/bill')) {
                    // admin_bill
                    if ($pathinfo === '/admin/coin/bill') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::cashBillAction',  '_route' => 'admin_bill',);
                    }

                    // admin_bill_export_csv
                    if (0 === strpos($pathinfo, '/admin/coin/bill/export') && preg_match('#^/admin/coin/bill/export/(?P<cashType>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bill_export_csv')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::exportCsvAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/order/manage')) {
                // admin_order_manage_export_csv
                if (0 === strpos($pathinfo, '/admin/order/manage/export') && preg_match('#^/admin/order/manage/export/(?P<targetType>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_manage_export_csv')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OrderController::exportCsvAction',));
                }

                // admin_order_manage_export_coin_csv
                if ($pathinfo === '/admin/order/manage/coin') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinOrderController::exportCsvAction',  '_route' => 'admin_order_manage_export_coin_csv',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/coin')) {
                // admin_coin_user_records
                if ($pathinfo === '/admin/coin/records/user') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::userRecordsAction',  '_route' => 'admin_coin_user_records',);
                }

                // admin_coin_flow_detail
                if (rtrim($pathinfo, '/') === '/admin/coin/flow/detail') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_coin_flow_detail');
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::flowDetailAction',  '_route' => 'admin_coin_flow_detail',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/setting/coin/model')) {
                // admin_coin_model
                if ($pathinfo === '/admin/setting/coin/model') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::modelAction',  '_route' => 'admin_coin_model',);
                }

                // admin_coin_model_ajax
                if ($pathinfo === '/admin/setting/coin/model/ajax') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::tableAjaxAction',  '_route' => 'admin_coin_model_ajax',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/co')) {
                // admin_coin_model_save
                if ($pathinfo === '/admin/coin/model/save') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CoinController::modelSaveAction',  '_route' => 'admin_coin_model_save',);
                }

                if (0 === strpos($pathinfo, '/admin/common')) {
                    if (0 === strpos($pathinfo, '/admin/common/ad')) {
                        // admin_common_add
                        if ($pathinfo === '/admin/common/add') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CommonAdminController::addCommonAdminAction',  '_route' => 'admin_common_add',);
                        }

                        // admin_common_admin
                        if ($pathinfo === '/admin/common/admin') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CommonAdminController::commonAdminAction',  '_route' => 'admin_common_admin',);
                        }

                    }

                    // admin_common_remove
                    if (0 === strpos($pathinfo, '/admin/common/remove') && preg_match('#^/admin/common/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_common_remove')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CommonAdminController::commonRemoveAction',));
                    }

                }

            }

            // admin_edu_cloud
            if ($pathinfo === '/admin/edu_cloud') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::indexAction',  '_route' => 'admin_edu_cloud',);
            }

            if (0 === strpos($pathinfo, '/admin/setting')) {
                // admin_edu_cloud_sms
                if ($pathinfo === '/admin/setting/edu_cloud/sms') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::smsAction',  '_route' => 'admin_edu_cloud_sms',);
                }

                // admin_edu_cloud_sms_status
                if ($pathinfo === '/admin/setting/sms/status') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::smsStatusAction',  '_route' => 'admin_edu_cloud_sms_status',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/edu_cloud')) {
                // admin_edu_cloud_apply_for_sms
                if ($pathinfo === '/admin/edu_cloud/apply_for_sms') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::applyForSmsAction',  '_route' => 'admin_edu_cloud_apply_for_sms',);
                }

                // admin_edu_cloud_sms_bill
                if ($pathinfo === '/admin/edu_cloud/sms_bill') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::smsBillAction',  '_route' => 'admin_edu_cloud_sms_bill',);
                }

                // admin_edu_cloud_sms_no_message
                if ($pathinfo === '/admin/edu_cloud/admin_edu_cloud_sms_no_message') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::smsNoMessageAction',  '_route' => 'admin_edu_cloud_sms_no_message',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/setting/edu_cloud')) {
                // admin_edu_cloud_email
                if ($pathinfo === '/admin/setting/edu_cloud/email') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::emailAction',  '_route' => 'admin_edu_cloud_email',);
                }

                // admin_edu_cloud_search
                if ($pathinfo === '/admin/setting/edu_cloud/search') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::searchSettingAction',  '_route' => 'admin_edu_cloud_search',);
                }

                // admin_edu_cloud_attachment
                if ($pathinfo === '/admin/setting/edu_cloud/attachment') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::attachmentAction',  '_route' => 'admin_edu_cloud_attachment',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/edu_cloud/search')) {
                    // admin_edu_cloud_search_clause
                    if ($pathinfo === '/admin/setting/edu_cloud/search/clause') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::searchClauseAction',  '_route' => 'admin_edu_cloud_search_clause',);
                    }

                    // admin_edu_cloud_search_reapply
                    if ($pathinfo === '/admin/setting/edu_cloud/search/reapply') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::searchReapplyAction',  '_route' => 'admin_edu_cloud_search_reapply',);
                    }

                    // admin_edu_cloud_search_open
                    if ($pathinfo === '/admin/setting/edu_cloud/search/open') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::searchOpenAction',  '_route' => 'admin_edu_cloud_search_open',);
                    }

                    // admin_edu_cloud_search_close
                    if ($pathinfo === '/admin/setting/edu_cloud/search/close') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\EduCloudController::searchCloseAction',  '_route' => 'admin_edu_cloud_search_close',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/announcement')) {
                // admin_announcement
                if ($pathinfo === '/admin/announcement') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnnouncementController::indexAction',  '_route' => 'admin_announcement',);
                }

                // admin_announcement_create
                if ($pathinfo === '/admin/announcement/create') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnnouncementController::createAction',  '_route' => 'admin_announcement_create',);
                }

                // admin_announcement_delete
                if (0 === strpos($pathinfo, '/admin/announcement/delete') && preg_match('#^/admin/announcement/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_announcement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_announcement_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnnouncementController::deleteAction',));
                }
                not_admin_announcement_delete:

                // admin_announcement_edit
                if (0 === strpos($pathinfo, '/admin/announcement/edit') && preg_match('#^/admin/announcement/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_announcement_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnnouncementController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/batch_notification')) {
                // admin_batch_notification
                if ($pathinfo === '/admin/batch_notification') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BatchNotificationController::indexAction',  '_route' => 'admin_batch_notification',);
                }

                // admin_batch_notification_create
                if ($pathinfo === '/admin/batch_notification/create') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BatchNotificationController::createAction',  '_route' => 'admin_batch_notification_create',);
                }

                // admin_batch_notification_edit
                if (0 === strpos($pathinfo, '/admin/batch_notification/edit') && preg_match('#^/admin/batch_notification/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_batch_notification_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BatchNotificationController::editAction',));
                }

                // admin_batch_notification_delete
                if (0 === strpos($pathinfo, '/admin/batch_notification/delete') && preg_match('#^/admin/batch_notification/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_batch_notification_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_batch_notification_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BatchNotificationController::deleteAction',));
                }
                not_admin_batch_notification_delete:

                // admin_batch_notification_send
                if (0 === strpos($pathinfo, '/admin/batch_notification/send') && preg_match('#^/admin/batch_notification/send/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_batch_notification_send;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_batch_notification_send')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BatchNotificationController::sendAction',));
                }
                not_admin_batch_notification_send:

            }

            // admin_feedback
            if ($pathinfo === '/admin/feedback') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::feedbackAction',  '_route' => 'admin_feedback',);
            }

            if (0 === strpos($pathinfo, '/admin/reports/status')) {
                // admin_report_status
                if ($pathinfo === '/admin/reports/status') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemController::reportAction',  '_route' => 'admin_report_status',);
                }

                // admin_report_status_php
                if ($pathinfo === '/admin/reports/status/php') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemController::phpAction',  '_route' => 'admin_report_status_php',);
                }

                // admin_report_status_directory
                if ($pathinfo === '/admin/reports/status/directory') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemController::checkDirAction',  '_route' => 'admin_report_status_directory',);
                }

                // admin_report_status_ucenter
                if ($pathinfo === '/admin/reports/status/ucenter') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemController::ucenterAction',  '_route' => 'admin_report_status_ucenter',);
                }

                // admin_report_status_email_send
                if ($pathinfo === '/admin/reports/status/email/send') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemController::emailSendCheckAction',  '_route' => 'admin_report_status_email_send',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/cloud_attachment')) {
                // admin_cloud_attachment
                if ($pathinfo === '/admin/cloud_attachment') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudAttachmentController::indexAction',  '_route' => 'admin_cloud_attachment',);
                }

                // admin_cloud_attachment_render
                if ($pathinfo === '/admin/cloud_attachment/render') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudAttachmentController::renderAction',  '_route' => 'admin_cloud_attachment_render',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/mapi_v')) {
            if (0 === strpos($pathinfo, '/mapi_v1')) {
                if (0 === strpos($pathinfo, '/mapi_v1/courses')) {
                    // mapi_course_pay
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/pay$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_pay')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileOrderController::payCourseAction',));
                    }

                    // mapi_course_refund
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/refund$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_refund')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileOrderController::refundCourseAction',));
                    }

                }

                // topxia_mobile_qrcode
                if ($pathinfo === '/mapi_v1/qrcode') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\QrcodeController::indexAction',  '_route' => 'topxia_mobile_qrcode',);
                }

                // mapi_courses
                if ($pathinfo === '/mapi_v1/courses') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::coursesAction',  '_route' => 'mapi_courses',);
                }

                // mapi_about
                if ($pathinfo === '/mapi_v1/about') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::getSchoolSiteAction',  '_route' => 'mapi_about',);
                }

                if (0 === strpos($pathinfo, '/mapi_v1/courses')) {
                    // mapi_course
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::courseAction',));
                    }

                    // mapi_course_items
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/items$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_items')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::itemsAction',));
                    }

                    // mapi_course_lesson
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::lessonAction',));
                    }

                    // mapi_course_lesson_media
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)/media$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson_media')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::lessonMediaAction',));
                    }

                    // mapi_course_reviews
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapi_course_reviews;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_reviews')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::reviewsAction',));
                    }
                    not_mapi_course_reviews:

                    // mapi_course_review_create
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapi_course_review_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_create')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::createAction',));
                    }
                    not_mapi_course_review_create:

                    // mapi_course_review_create_html5
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/review_create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_create_html5')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::createAction',));
                    }

                    // mapi_course_review_get
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews/(?P<reviewId>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapi_course_review_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_get')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::getAction',));
                    }
                    not_mapi_course_review_get:

                    // mapi_course_review_update
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews/(?P<reviewId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapi_course_review_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_update')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::updateAction',));
                    }
                    not_mapi_course_review_update:

                    // mapi_course_review_update_html5
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews/(?P<reviewId>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_update_html5')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::updateAction',));
                    }

                    // mapi_course_favorite
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_favorite;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_favorite')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::favoriteAction',));
                    }
                    not_mapi_course_favorite:

                    // mapi_course_unfavorite
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/unfavorite$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_unfavorite;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_unfavorite')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::unfavoriteAction',));
                    }
                    not_mapi_course_unfavorite:

                    // mapi_course_can_learn
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/can_learn$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_can_learn;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_can_learn')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::canLearnAction',));
                    }
                    not_mapi_course_can_learn:

                    // mapi_course_lesson_learn
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)/learn$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_lesson_learn;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson_learn')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::learnAction',));
                    }
                    not_mapi_course_lesson_learn:

                    // mapi_course_lesson_unlearn
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)/unlearn$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_lesson_unlearn;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson_unlearn')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::unLearnAction',));
                    }
                    not_mapi_course_lesson_unlearn:

                    // mapi_course_lesson_learn_status
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)/learn_status$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson_learn_status')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::learnStatusAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/mapi_v1/me')) {
                    // mapi_me_favorite_courses
                    if ($pathinfo === '/mapi_v1/me/favorite_courses') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::meFavoritesAction',  '_route' => 'mapi_me_favorite_courses',);
                    }

                    if (0 === strpos($pathinfo, '/mapi_v1/me/learn')) {
                        // mapi_me_learning_courses
                        if ($pathinfo === '/mapi_v1/me/learning_courses') {
                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::meLearningsAction',  '_route' => 'mapi_me_learning_courses',);
                        }

                        // mapi_me_learned_courses
                        if ($pathinfo === '/mapi_v1/me/learned_courses') {
                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::meLearnedsAction',  '_route' => 'mapi_me_learned_courses',);
                        }

                    }

                    // mapi_me_notifications
                    if ($pathinfo === '/mapi_v1/me/notifications') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::notifiactionsAction',  '_route' => 'mapi_me_notifications',);
                    }

                }

                if (0 === strpos($pathinfo, '/mapi_v1/user')) {
                    if (0 === strpos($pathinfo, '/mapi_v1/users')) {
                        // mapi_user
                        if (preg_match('#^/mapi_v1/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_user')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::userAction',));
                        }

                        // mapi_user_register
                        if ($pathinfo === '/mapi_v1/users') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mapi_user_register;
                            }

                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::registerAction',  '_route' => 'mapi_user_register',);
                        }
                        not_mapi_user_register:

                    }

                    // mapi_user_register_html5
                    if ($pathinfo === '/mapi_v1/user_register') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::registerAction',  '_route' => 'mapi_user_register_html5',);
                    }

                }

                if (0 === strpos($pathinfo, '/mapi_v1/log')) {
                    // mapi_user_login
                    if ($pathinfo === '/mapi_v1/login') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::loginAction',  '_route' => 'mapi_user_login',);
                    }

                    // mapi_user_logout
                    if ($pathinfo === '/mapi_v1/logout') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::logoutAction',  '_route' => 'mapi_user_logout',);
                    }

                    if (0 === strpos($pathinfo, '/mapi_v1/login_with_')) {
                        // mapi_user_login_with_token
                        if ($pathinfo === '/mapi_v1/login_with_token') {
                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::loginWithTokenAction',  '_route' => 'mapi_user_login_with_token',);
                        }

                        // mapi_user_login_with_site
                        if ($pathinfo === '/mapi_v1/login_with_site') {
                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::loginWithSiteAction',  '_route' => 'mapi_user_login_with_site',);
                        }

                    }

                }

                // mapi_mobile_version
                if ($pathinfo === '/mapi_v1/mobile_version') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileController::mobileVersionAction',  '_route' => 'mapi_mobile_version',);
                }

                // mapi_mobile_notify_version
                if ($pathinfo === '/mapi_v1/notify_mobile_version') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileController::notifyMobileVersionAction',  '_route' => 'mapi_mobile_notify_version',);
                }

                // mapi_mobile_regist_device
                if ($pathinfo === '/mapi_v1/regist_device') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_mapi_mobile_regist_device;
                    }

                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileController::mobileDeviceRegistAction',  '_route' => 'mapi_mobile_regist_device',);
                }
                not_mapi_mobile_regist_device:

                // mapi_mobile_log
                if ($pathinfo === '/mapi_v1/mobile_school_login') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_mapi_mobile_log;
                    }

                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileController::mobileSchoolLoginAction',  '_route' => 'mapi_mobile_log',);
                }
                not_mapi_mobile_log:

            }

            if (0 === strpos($pathinfo, '/mapi_v2')) {
                // mapi_order_submit_pay_request
                if (0 === strpos($pathinfo, '/mapi_v2/order') && preg_match('#^/mapi_v2/order/(?P<id>[^/]++)/submit_pay_request$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mapi_order_submit_pay_request;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_order_submit_pay_request')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileOrderController::submitPayRequestAction',));
                }
                not_mapi_order_submit_pay_request:

                // mapi_mobile_teacher_app
                if ($pathinfo === '/mapi_v2/teacherApp') {
                    return array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\TeacherAppController::indexAction',  '_route' => 'mapi_mobile_teacher_app',);
                }

                // topxia_mobile_alipay_notify
                if (0 === strpos($pathinfo, '/mapi_v2/pay') && preg_match('#^/mapi_v2/pay/(?P<name>[^/]++)/alipay_notify$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topxia_mobile_alipay_notify')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAlipayController::payNotifyAction',));
                }

                // topxia_mobile_alipay_pay
                if ($pathinfo === '/mapi_v2/alipay_pay') {
                    return array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAlipayController::payAction',  '_route' => 'topxia_mobile_alipay_pay',);
                }

                if (0 === strpos($pathinfo, '/mapi_v2/pay')) {
                    // topxia_mobile_alipay_merchant
                    if (preg_match('#^/mapi_v2/pay/(?P<name>[^/]++)/alipay_merchant$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topxia_mobile_alipay_merchant')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAlipayController::payMerchantAction',));
                    }

                    // topxia_mobile_alipay_callback
                    if (preg_match('#^/mapi_v2/pay/(?P<name>[^/]++)/alipay_callback$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topxia_mobile_alipay_callback')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAlipayController::payCallBackAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/mapi_v2/mobile')) {
                    if (0 === strpos($pathinfo, '/mapi_v2/mobile/main')) {
                        // mapi_mobile_esmobile_app
                        if ($pathinfo === '/mapi_v2/mobile/main') {
                            return array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAppController::indexAction',  '_route' => 'mapi_mobile_esmobile_app',);
                        }

                        // mapi_mobile_esmobile_app_version
                        if ($pathinfo === '/mapi_v2/mobile/main/version') {
                            return array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAppController::versionAction',  '_route' => 'mapi_mobile_esmobile_app_version',);
                        }

                    }

                    // mapi_mobile_esmobile_app_resource
                    if (preg_match('#^/mapi_v2/mobile/(?P<code>[^/]++)/resource$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_mobile_esmobile_app_resource')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAppController::resourceAction',));
                    }

                }

                // mapi_mobile_api
                if (preg_match('#^/mapi_v2/(?P<service>[^/]++)/(?P<method>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mapi_mobile_api;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_mobile_api')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileApiController::indexAction',));
                }
                not_mapi_mobile_api:

            }

        }

        if (0 === strpos($pathinfo, '/classroom')) {
            // classroom_manage
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::indexAction',));
            }

            // classroom_manage_courses
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/courses$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_courses')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::coursesAction',));
            }

            // classroom_courses_select
            if (preg_match('#^/classroom/(?P<id>[^/]++)/courses/select$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_courses_select')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::coursesSelectAction',));
            }

            // classroom_manage_set_info
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/set_info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_set_info')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::setInfoAction',));
            }

            // classroom_manage_set_picture
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/set_picture$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_set_picture')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::setPictureAction',));
            }

            // classroom_manage_picture_crop
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/picture_crop$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_picture_crop')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::pictureCropAction',));
            }

            // classroom_manage_set_price
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/price/set$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_set_price')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::setPriceAction',));
            }

            // classroom_manage_students
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/students$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_students')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::studentsAction',));
            }

            // classroom_manage_aduitor
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/aduitor$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_aduitor')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::aduitorAction',));
            }

            // classroom_manage_record
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/refund_record$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_record')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::refundRecordAction',));
            }

            // classroom_manage_service
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/service$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_service')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::serviceAction',));
            }

            // classroom_manage_teachers
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/teachers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_teachers')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::teachersAction',));
            }

            // classroom_manage_headteacher
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/headteacher$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_headteacher')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::headteacherAction',));
            }

            // classroom_manage_assistants
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/assistants$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_assistants')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::assistantsAction',));
            }

            // classroom_manage_publish
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classroom_manage_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_publish')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::publishAction',));
            }
            not_classroom_manage_publish:

            // classroom_manage_close
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/close$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classroom_manage_close;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_close')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::closeAction',));
            }
            not_classroom_manage_close:

            // classroom_manage_checkName
            if ($pathinfo === '/classroom/manage/checkName') {
                return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::checkNameAction',  '_route' => 'classroom_manage_checkName',);
            }

            // classroom_manage_student_remark
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/manage/student/(?P<userId>[^/]++)/remark$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_student_remark')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::remarkAction',));
            }

            // classroom_manage_student_remove
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/manage/student/(?P<userId>[^/]++)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classroom_manage_student_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_student_remove')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::removeAction',));
            }
            not_classroom_manage_student_remove:

            // classroom_manage_student_create
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/student/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_student_create')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::createAction',));
            }

            // classroom_manage_student_check
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/student_check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_student_check')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::checkStudentAction',));
            }

            // classroom_manage_student_export_csv
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/student/export/(?P<role>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_student_export_csv')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::exportCsvAction',));
            }

            // classroom_manage_student_import
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/student/import$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_student_import')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::importUsersAction',));
            }

            // classroom_manage_student_to_base
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/student/importing$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classroom_manage_student_to_base;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_student_to_base')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::excelDataImportAction',));
            }
            not_classroom_manage_student_to_base:

            // classroom_manage_testpaper
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/testpaper/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_testpaper')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::testpaperAction',));
            }

            // classroom_manage_homework
            if (preg_match('#^/classroom/(?P<id>[^/]++)/manage/homework/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_manage_homework')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomManageController::homeworkAction',));
            }

            // classroom_explore
            if (0 === strpos($pathinfo, '/classroom/explore') && preg_match('#^/classroom/explore(?:/(?P<category>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_explore')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::exploreAction',  'category' => '',));
            }

            // classroom_show
            if (preg_match('#^/classroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_show')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::showAction',));
            }

            // classroom_qrcode
            if (preg_match('#^/classroom/(?P<id>[^/]++)/qrcode$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_qrcode')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::qrcodeAction',));
            }

            // classroom_reviews
            if (preg_match('#^/classroom/(?P<id>[^/]++)/review$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_reviews')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Classroom\\ReviewController::listAction',));
            }

            // classroom_review_create
            if (preg_match('#^/classroom/(?P<id>[^/]++)/review/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_review_create')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Classroom\\ReviewController::createAction',));
            }

            // classroom_introductions
            if (preg_match('#^/classroom/(?P<id>[^/]++)/introduction$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_introductions')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::introductionAction',));
            }

            // classroom_buy
            if (preg_match('#^/classroom/(?P<id>[^/]++)/buy$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_buy')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::buyAction',));
            }

            // classroom_buy_modify_user_info
            if ($pathinfo === '/classroom/buy/modify_user_info') {
                return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::modifyUserInfoAction',  '_route' => 'classroom_buy_modify_user_info',);
            }

            if (0 === strpos($pathinfo, '/classroom/sign')) {
                // classroom_sign
                if (preg_match('#^/classroom/sign/(?P<classroomId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_sign')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::signAction',));
                }

                // classroom_signed_records
                if (preg_match('#^/classroom/sign/(?P<classroomId>[^/]++)/records$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_signed_records')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::getSignedRecordsByPeriodAction',));
                }

            }

            // classroom_become_auditor
            if (preg_match('#^/classroom/(?P<id>[^/]++)/becomeAuditor$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_become_auditor')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::becomeAuditorAction',));
            }

            // classroom_exit
            if (preg_match('#^/classroom/(?P<id>[^/]++)/exit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_exit')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::exitAction',));
            }

            // classroom_canview
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/canview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_canview')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::canviewAction',));
            }

            // classroom_courses
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/courses$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_courses')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Classroom\\CourseController::listAction',));
            }

            // classroom_threads
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/threads$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_threads')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomThreadController::listAction',));
            }

            // classroom_thread_create
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/thread/(?P<type>[^/]++)/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_thread_create')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomThreadController::createAction',  'type' => 'discussion',));
            }

            // classroom_thread_show
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/thread/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_thread_show')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomThreadController::showAction',));
            }

            // classroom_thread_update
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/thread/(?P<threadId>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_thread_update')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomThreadController::updateAction',));
            }

            // classroom_vip_buy
            if (preg_match('#^/classroom/(?P<id>[^/]++)/vip_buy$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_vip_buy')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::becomeStudentAction',));
            }

            // classroom_member_ids
            if (preg_match('#^/classroom/(?P<id>[^/]++)/member_ids$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_member_ids')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::memberIdsAction',));
            }

            // classroom_thread_members_become
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/thread/(?P<threadId>[^/]++)/members/become$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_thread_members_become')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Thread\\MemberController::becomeAction',));
            }

            // classroom_thread_members_quit
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/thread/(?P<threadId>[^/]++)/member/(?P<memberId>[^/]++)/quit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_thread_members_quit')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Thread\\MemberController::quitAction',));
            }

        }

        // my_classrooms
        if ($pathinfo === '/my/classrooms') {
            return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::myClassroomAction',  '_route' => 'my_classrooms',);
        }

        if (0 === strpos($pathinfo, '/classroom')) {
            // classroom_headteacher_match
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/headteacher/match$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_headteacher_match')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Common\\UtilityController::headteacherMatchAction',));
            }

            // classroom_assistants_match
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/assistants/match$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_assistants_match')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Common\\UtilityController::assistantsMatchAction',));
            }

            // classroom_courses_pick
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/course/pick$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_courses_pick')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Classroom\\CourseController::pickAction',));
            }

            // classroom_course_search
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/course/search$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_course_search')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Classroom\\CourseController::searchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/my')) {
            // my_teaching_classroom_threads
            if (0 === strpos($pathinfo, '/my/teaching/classroom/threads') && preg_match('#^/my/teaching/classroom/threads/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_teaching_classroom_threads')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::classroomThreadsAction',));
            }

            // my_classroom_discussions
            if ($pathinfo === '/my/classroom/discussions') {
                return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomController::classroomDiscussionsAction',  '_route' => 'my_classroom_discussions',);
            }

        }

        if (0 === strpos($pathinfo, '/classroom')) {
            // classroom_course_notes_list
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/courses/notes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_course_notes_list')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Course\\NoteController::listAction',));
            }

            // classroom_teachers
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/teachers/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_teachers')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Classroom\\TeacherController::listAction',));
            }

            // classroom_teacherIds_catch
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/teacherIds/catch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_teacherIds_catch')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Classroom\\TeacherController::catchIdsAction',));
            }

            // classroom_course_lessons_preview
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/course/(?P<courseId>[^/]++)/lessons/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_course_lessons_preview')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Course\\LessonController::previewAction',));
            }

            // classroom_buy_hint
            if (0 === strpos($pathinfo, '/classroom/courses') && preg_match('#^/classroom/courses/(?P<courseId>[^/]++)/buy/hint$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classroom_buy_hint')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Course\\LessonController::buyHintAction',));
            }

            // classrom_course_lessons_list
            if (preg_match('#^/classroom/(?P<classroomId>[^/]++)/course/(?P<courseId>[^/]++)/lessons/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classrom_course_lessons_list')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\Course\\LessonController::listAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_classroom
            if ($pathinfo === '/admin/classroom/index') {
                return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::indexAction',  '_route' => 'admin_classroom',);
            }

            // admin_classroom_setting
            if ($pathinfo === '/admin/setting/classroom') {
                return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::setAction',  '_route' => 'admin_classroom_setting',);
            }

            if (0 === strpos($pathinfo, '/admin/classroom')) {
                // admin_classroom_create
                if ($pathinfo === '/admin/classroom/create') {
                    return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::addClassroomAction',  '_route' => 'admin_classroom_create',);
                }

                // admin_classroom_close
                if (preg_match('#^/admin/classroom/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_classroom_close;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_classroom_close')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::closeClassroomAction',));
                }
                not_admin_classroom_close:

                // admin_classroom_open
                if (preg_match('#^/admin/classroom/(?P<id>[^/]++)/open$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_classroom_open;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_classroom_open')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::openClassroomAction',));
                }
                not_admin_classroom_open:

                // admin_classroom_delete
                if (preg_match('#^/admin/classroom/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_classroom_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_classroom_delete')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::deleteClassroomAction',));
                }
                not_admin_classroom_delete:

                // admin_classroom_order
                if ($pathinfo === '/admin/classroom/order') {
                    return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomOrderAdminController::manageAction',  '_route' => 'admin_classroom_order',);
                }

                if (0 === strpos($pathinfo, '/admin/classroom/thread')) {
                    // admin_classroom_thread
                    if ($pathinfo === '/admin/classroom/thread') {
                        return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomThreadAdminController::indexAction',  '_route' => 'admin_classroom_thread',);
                    }

                    // admin_classroom_thread_delete
                    if (preg_match('#^/admin/classroom/thread/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_classroom_thread_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_classroom_thread_delete')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomThreadAdminController::deleteAction',));
                    }
                    not_admin_classroom_thread_delete:

                    // admin_classroom_thread_batch_delete
                    if ($pathinfo === '/admin/classroom/thread/batch_delete') {
                        return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomThreadAdminController::batchDeleteAction',  '_route' => 'admin_classroom_thread_batch_delete',);
                    }

                }

                // admin_classroom_set_recommend
                if (preg_match('#^/admin/classroom/(?P<id>[^/]++)/recommend$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_classroom_set_recommend')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::recommendAction',));
                }

                // admin_classroom_cancel_recommend
                if (preg_match('#^/admin/classroom/(?P<id>[^/]++)/recommend/cancel$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_classroom_cancel_recommend')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::cancelRecommendAction',));
                }

                if (0 === strpos($pathinfo, '/admin/classroom/re')) {
                    // admin_classroom_recommend_list
                    if ($pathinfo === '/admin/classroom/recommend/list') {
                        return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::recommendListAction',  '_route' => 'admin_classroom_recommend_list',);
                    }

                    if (0 === strpos($pathinfo, '/admin/classroom/review')) {
                        // admin_classroom_review
                        if ($pathinfo === '/admin/classroom/review') {
                            return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomReviewController::indexAction',  '_route' => 'admin_classroom_review',);
                        }

                        // admin_classroom_review_delete
                        if (preg_match('#^/admin/classroom/review/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_classroom_review_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_classroom_review_delete')), array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomReviewController::deleteAction',));
                        }
                        not_admin_classroom_review_delete:

                        // admin_classroom_review_batch_delete
                        if ($pathinfo === '/admin/classroom/review/batch_delete') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_classroom_review_batch_delete;
                            }

                            return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomReviewController::batchDeleteAction',  '_route' => 'admin_classroom_review_batch_delete',);
                        }
                        not_admin_classroom_review_batch_delete:

                    }

                }

                // admin_classroom_chooser
                if ($pathinfo === '/admin/classroom/chooser') {
                    return array (  '_controller' => 'Classroom\\ClassroomBundle\\Controller\\ClassroomAdminController::chooserAction',  '_route' => 'admin_classroom_chooser',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/material')) {
            if (0 === strpos($pathinfo, '/material/lib')) {
                // material_lib_browsing
                if ($pathinfo === '/material/lib/browse') {
                    return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::indexAction',  '_route' => 'material_lib_browsing',);
                }

                // material_lib_show_browsing
                if ($pathinfo === '/material/lib/show/browse') {
                    return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::showMyMaterialLibFormAction',  '_route' => 'material_lib_show_browsing',);
                }

                if (0 === strpos($pathinfo, '/material/lib/my/sharing')) {
                    // material_lib_my_sharing
                    if ($pathinfo === '/material/lib/my/sharing/show') {
                        return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::showShareFormAction',  '_route' => 'material_lib_my_sharing',);
                    }

                    if (0 === strpos($pathinfo, '/material/lib/my/sharing_')) {
                        // material_lib_my_sharing_detail
                        if ($pathinfo === '/material/lib/my/sharing_detail/show') {
                            return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::historyDetailShowAction',  '_route' => 'material_lib_my_sharing_detail',);
                        }

                        // material_lib_my_sharing_users
                        if ($pathinfo === '/material/lib/my/sharing_users/show') {
                            return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::historyUserShowAction',  '_route' => 'material_lib_my_sharing_users',);
                        }

                    }

                }

                // material_lib_my_sharing_contacts
                if ($pathinfo === '/material/lib/recent/contacts') {
                    return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::findMySharingContactsAction',  '_route' => 'material_lib_my_sharing_contacts',);
                }

                // material_lib_save_sharing
                if ($pathinfo === '/material/lib/my/sharing/save') {
                    return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::saveShareAction',  '_route' => 'material_lib_save_sharing',);
                }

                // material_tag_show_match
                if ($pathinfo === '/material/lib/tag/match') {
                    return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::matchAction',  '_route' => 'material_tag_show_match',);
                }

                if (0 === strpos($pathinfo, '/material/lib/my')) {
                    if (0 === strpos($pathinfo, '/material/lib/my/sharing')) {
                        // material_lib_show_sharing_history
                        if ($pathinfo === '/material/lib/my/sharing/history') {
                            return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::showShareHistoryAction',  '_route' => 'material_lib_show_sharing_history',);
                        }

                        // material_lib_cancel_sharing
                        if ($pathinfo === '/material/lib/my/sharing/cancel') {
                            return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::cancelShareAction',  '_route' => 'material_lib_cancel_sharing',);
                        }

                    }

                    // material_lib_save_collection
                    if ($pathinfo === '/material/lib/my/collection/save') {
                        return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::collectAction',  '_route' => 'material_lib_save_collection',);
                    }

                }

                // material_lib_file_preview
                if (0 === strpos($pathinfo, '/material/lib/file') && preg_match('#^/material/lib/file/(?P<fileId>[^/]++)/preview$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_lib_file_preview')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::previewAction',));
                }

            }

            // material_edit
            if (0 === strpos($pathinfo, '/materiallib') && preg_match('#^/materiallib/(?P<fileId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_material_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_edit')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::editAction',));
            }
            not_material_edit:

            if (0 === strpos($pathinfo, '/material/lib')) {
                // material_lib_file_player
                if (preg_match('#^/material/lib/(?P<fileId>[^/]++)/player$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_lib_file_player')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::playerAction',));
                }

                // material_reconvert
                if (preg_match('#^/material/lib/(?P<globalId>[^/]++)/reconvert$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_reconvert')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::reconvertAction',));
                }

                // material_thumbnail_generate
                if (preg_match('#^/material/lib/(?P<globalId>[^/]++)/thumbnail/generate$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_thumbnail_generate')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::generateThumbnailAction',));
                }

                // material_lib_file_detail
                if (preg_match('#^/material/lib/(?P<fileId>[^/]++)/detail$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_lib_file_detail')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::detailAction',));
                }

            }

            if (0 === strpos($pathinfo, '/materiallib')) {
                // material_download
                if (preg_match('#^/materiallib/(?P<fileId>[^/]++)/download$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_download')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::downloadAction',));
                }

                // material_delete
                if (preg_match('#^/materiallib/(?P<fileId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_material_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_delete')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::deleteAction',));
                }
                not_material_delete:

            }

            if (0 === strpos($pathinfo, '/materials')) {
                // material_batch_delete
                if ($pathinfo === '/materials/batch/delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_material_batch_delete;
                    }

                    return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::batchDeleteAction',  '_route' => 'material_batch_delete',);
                }
                not_material_batch_delete:

                // material_delete_modal_show
                if ($pathinfo === '/materials/delete/show') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_material_delete_modal_show;
                    }

                    return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::deleteModalShowAction',  '_route' => 'material_delete_modal_show',);
                }
                not_material_delete_modal_show:

                // material_batch_share
                if ($pathinfo === '/materials/batch/share') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_material_batch_share;
                    }

                    return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::batchShareAction',  '_route' => 'material_batch_share',);
                }
                not_material_batch_share:

            }

            // material_unshare
            if (0 === strpos($pathinfo, '/materiallib') && preg_match('#^/materiallib/(?P<fileId>[^/]++)/unshare$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_unshare')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::unshareAction',));
            }

            // material_batch_tag_show
            if ($pathinfo === '/materials/batch/tag/show') {
                return array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\MaterialLibController::batchTagShowAction',  '_route' => 'material_batch_tag_show',);
            }

        }

        if (0 === strpos($pathinfo, '/global_file')) {
            // global_file_player
            if (preg_match('#^/global_file/(?P<globalId>[^/]++)/player$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_file_player')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\GlobalFilePlayerController::playerAction',));
            }

            // global_file_hls_playlist
            if (preg_match('#^/global_file/(?P<globalId>[^/]++)/playlist/(?P<token>[^/\\.]++)\\.m3u8$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_file_hls_playlist')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\GlobalFilePlayerController::playlistAction',));
            }

            // global_file_hls_stream
            if (preg_match('#^/global_file/(?P<globalId>[^/]++)/stream/(?P<level>[^/]++)/(?P<token>[^/\\.]++)\\.m3u8$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_file_hls_stream')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\GlobalFilePlayerController::streamAction',));
            }

            // global_file_hls_clef
            if (preg_match('#^/global_file/(?P<globalId>[^/]++)/clef/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_file_hls_clef')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\GlobalFilePlayerController::clefAction',));
            }

            // global_file_ppt
            if (preg_match('#^/global_file/(?P<globalId>[^/]++)/ppt$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_file_ppt')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\GlobalFilePlayerController::pptAction',));
            }

            // global_file_document
            if (preg_match('#^/global_file/(?P<globalId>[^/]++)/document$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'global_file_document')), array (  '_controller' => 'MaterialLib\\MaterialLibBundle\\Controller\\GlobalFilePlayerController::documentAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/keyword')) {
            // admin_keyword
            if (rtrim($pathinfo, '/') === '/admin/keyword') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_keyword');
                }

                return array (  '_controller' => 'SensitiveWord\\SensitiveWordBundle\\Controller\\SensitiveController::indexAction',  '_route' => 'admin_keyword',);
            }

            // admin_keyword_create
            if ($pathinfo === '/admin/keyword/create') {
                return array (  '_controller' => 'SensitiveWord\\SensitiveWordBundle\\Controller\\SensitiveController::createAction',  '_route' => 'admin_keyword_create',);
            }

            // admin_keyword_delete
            if (preg_match('#^/admin/keyword/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_keyword_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_keyword_delete')), array (  '_controller' => 'SensitiveWord\\SensitiveWordBundle\\Controller\\SensitiveController::deleteAction',));
            }
            not_admin_keyword_delete:

            // admin_keyword_change
            if (preg_match('#^/admin/keyword/(?P<id>[^/]++)/change$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_keyword_change')), array (  '_controller' => 'SensitiveWord\\SensitiveWordBundle\\Controller\\SensitiveController::changeAction',));
            }

            // admin_keyword_banlogs
            if ($pathinfo === '/admin/keyword/banlogs') {
                return array (  '_controller' => 'SensitiveWord\\SensitiveWordBundle\\Controller\\SensitiveController::banlogsAction',  '_route' => 'admin_keyword_banlogs',);
            }

        }

        // switch_org
        if (0 === strpos($pathinfo, '/swithOrg') && preg_match('#^/swithOrg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'switch_org')), array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgController::switchOrgAction',));
        }

        // org_tree
        if ($pathinfo === '/org-tree.json') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_org_tree;
            }

            return array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgController::orgTreeJsonAction',  '_route' => 'org_tree',);
        }
        not_org_tree:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/org')) {
                // admin_org
                if ($pathinfo === '/admin/org') {
                    return array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgManageController::indexAction',  '_route' => 'admin_org',);
                }

                // admin_org_create
                if ($pathinfo === '/admin/org/create') {
                    return array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgManageController::createAction',  '_route' => 'admin_org_create',);
                }

                // admin_org_update
                if (preg_match('#^/admin/org/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_org_update')), array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgManageController::updateAction',));
                }

                // admin_org_delete
                if (preg_match('#^/admin/org/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_org_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_org_delete')), array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgManageController::deleteAction',));
                }
                not_admin_org_delete:

                // admin_org_checkcode
                if ($pathinfo === '/admin/org/checkcode') {
                    return array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgManageController::checkCodeAction',  '_route' => 'admin_org_checkcode',);
                }

                // admin_org_sort
                if ($pathinfo === '/admin/org/sort') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_org_sort;
                    }

                    return array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgManageController::sortAction',  '_route' => 'admin_org_sort',);
                }
                not_admin_org_sort:

            }

            // admin_batch_update_org
            if (0 === strpos($pathinfo, '/admin/batch/update') && preg_match('#^/admin/batch/update/(?P<module>[^/]++)/org$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_batch_update_org')), array (  '_controller' => 'Org\\OrgBundle\\Controller\\OrgManageController::batchUpdateAction',));
            }

            // custom_admin_homepage
            if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'custom_admin_homepage')), array (  '_controller' => 'Custom\\AdminBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
