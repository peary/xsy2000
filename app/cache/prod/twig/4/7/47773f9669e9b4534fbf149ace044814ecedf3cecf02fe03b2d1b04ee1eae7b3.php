<?php

/* TopxiaWebBundle:CourseLessonManage:media-choose.html.twig */
class __TwigTemplate_47773f9669e9b4534fbf149ace044814ecedf3cecf02fe03b2d1b04ee1eae7b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
.webuploader-container {
  position: relative;
}
.webuploader-element-invisible {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px,1px,1px,1px);
}
.webuploader-pick {
  position: relative;
  display: inline-block;
  cursor: pointer;
  background: #fff;
  padding: 5px 10px;
  color: #333;
  text-align: center;
  border-radius: 3px;
  border: 1px solid #ccc;
  overflow: hidden;
}
.webuploader-pick-hover {
  background: #e6e6e6;
  border-color: #adadad;
}

.webuploader-pick-disable {
  opacity: 0.6;
  pointer-events:none;
}

.balloon-uploader {
  border: 1px solid #ddd;
  border-radius: 4px;
}

.balloon-uploader-heading {
  background-color: #f5f5f5;
  color: #333;
  padding: 10px 15px;
  border-bottom: 1px solid #ddd;
  display: none;
}

.balloon-uploader-footer {
  background-color: #f5f5f5;
  color: #333;
  padding: 10px 15px;
  border-top: 1px solid #ddd;
  text-align: right;
}

.balloon-filelist {
  width: 100%;
}

.balloon-filelist-heading {
  padding: 8px 10px;
  font-weight: bold;
  border-bottom: 2px solid #ddd;
}

.balloon-uploader-body {
  position: relative;

}

.balloon-filelist .file-name,
.balloon-filelist .file-size,
.balloon-filelist .file-status,
.balloon-filelist .file-manage {
  position: relative;
  z-index: 1;
}

.balloon-filelist .file-name {
  display: inline-block;
  width: 40%;
}

.balloon-filelist .file-size {
  display: inline-block;
  width: 20%;
}

.balloon-filelist .file-status {
  display: inline-block;
  width: 18%;
}
.balloon-filelist .file-manage {
  display: inline-block;
  width: 20%;
  z-index: 9999;
  position: absolute;
}

.balloon-filelist ul {
  list-style: none;
  margin: 0;
  padding: 0;
  min-height: 100px;
  max-height: 300px;
  overflow-y: scroll;
}


.balloon-filelist ul li {
  position: relative;
  border-bottom: 1px solid #ddd;
  padding: 8px 10px;
}

.balloon-dnd {
  visibility: hidden;
}

.balloon-uploader-none .balloon-uploader-footer,
.balloon-uploader-none .balloon-uploader-body {
  visibility: hidden;
}

.balloon-uploader-none .balloon-dnd {
  visibility: visible;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  text-align: center;
  vertical-align: middle;
}

.balloon-nofile {
  position: absolute;
  top: 40px;
  left: 0;
  right: 0;
  bottom: 0;
  line-height: 100px;
  text-align: center;
  color: #999;
}

.balloon-uploader .file-pick-btn {
  display: inline-block;
}

.balloon-uploader .start-upload-btn {
  position: relative;
  display: inline-block;
  cursor: pointer;
  background: #5bc0de;
  padding: 5px 10px;
  color: #fff;
  text-align: center;
  border-radius: 3px;
  border: 1px solid #46b8da;
  overflow: hidden;
}

.balloon-uploader .start-upload-btn:hover {
  background: #31b0d5;
  border-color: #269abc;
}

.balloon-filelist .file-progress {
  position: absolute;
  top: 0;
  left: 0;
  right: -40px;
  bottom: 0;
}

.balloon-filelist .file-progress-bar {
  background: rgb(219,242,215);
  background: rgba(59, 181, 33, 0.18);
  float: left;
  height: 100%;
}

</style>

";
        // line 183
        if (isset($context["courseType"])) { $_courseType_ = $context["courseType"]; } else { $_courseType_ = null; }
        $context["courseType"] = ((array_key_exists("courseType", $context)) ? (_twig_default_filter($_courseType_, "course")) : ("course"));
        // line 184
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (twig_in_filter($this->getAttribute($_course_, "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 185
            echo "  ";
            $context["courseMaterialUrl"] = "open_course_manage_material_browser";
        } else {
            // line 187
            echo "  ";
            $context["courseMaterialUrl"] = "course_manage_material_browser";
        }
        // line 189
        echo "
";
        // line 190
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter($_lesson_, null)) : (null));
        // line 191
        echo "<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
    data-targetType=\"";
        // line 194
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 195
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\" style=\"display:none;\">正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\" data-toggle=\"tab\">上传视频</a></li>
        <li>
          <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
            从资料库中选择
          </a>
        </li>

        <li>
          <a href=\"#video-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

        <li ";
        // line 218
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($_lesson_ && ($this->getAttribute($_lesson_, "mediaSource", array()) != "self"))) {
            echo "class=\"active\"";
        }
        echo ">
          <a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">导入网络视频</a>
        </li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 226
        $this->loadTemplate("TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig", "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", 226)->display($context);
        // line 227
        echo "
            ";
        // line 228
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken($_targetType_, $_targetId_, "private");
        // line 229
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 230
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 231
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 232
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 233
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept($_targetType_, "video")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 234
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode($_targetType_), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                ";
        // line 240
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode", array()) == "cloud")) {
            // line 241
            echo "                  <li>支持<strong>mp4, avi, flv, f4v, wmv, mov, rmvb, mkv, m4v</strong>格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。</li>
                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>视频将上传到<strong>云视频服务器</strong>，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。</li>
                ";
        } else {
            // line 245
            echo "                  <li>支持<strong>mp4</strong>格式的视频文件上传，文件大小不能超过<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo " </strong>。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>
                  <li>
                    视频将上传到<strong>网站服务器</strong>。如需使用";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
            echo "云视频,点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情,";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
            echo "云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。
                  </li>
                ";
        }
        // line 250
        echo "              </ul>
            </div>

          </div>

        </div>
        <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
            <div id=\"file-browser-video\" data-role=\"file-browser\"
            data-base-url=\"";
        // line 258
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video"));
        echo "\"
            data-default-url=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 260
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
            data-empty=\"暂无视频文件，请先上传。\">
            \t<div class=\"file-browser-list-container\"></div>
            </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-course-file\">
            <div id=\"file-browser-video\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 268
        if (isset($context["courseMaterialUrl"])) { $_courseMaterialUrl_ = $context["courseMaterialUrl"]; } else { $_courseMaterialUrl_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        if (isset($context["courseType"])) { $_courseType_ = $context["courseType"]; } else { $_courseType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_courseMaterialUrl_, array("courseId" => $_targetId_, "type" => "video", "courseType" => $_courseType_)), "html", null, true);
        echo "\"
            data-empty=\"暂无视频文件，请先上传。\">
            </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          ";
        // line 274
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            // line 275
            echo "            <div>原地址：";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "mediaUri", array()), "html", null, true);
            echo "</div>
          ";
        }
        // line 277
        echo "          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"支持优酷、土豆、腾讯、网易公开课的视频页面地址导入\" data-role=\"import-url\" >
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\" data-url=\"";
        // line 280
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_media_import", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\" data-loading-text=\"正在导入，请稍等\">导入</button>
            </span>
          </div>
          <strong class=\"text-danger\">* 腾讯和网易的视频不支持手机端播放</strong>
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
      data-targetType=\"";
        // line 292
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"
      data-targetId=\"";
        // line 293
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\" data-toggle=\"tab\">上传音频</a></li>
        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>

        <li>
          <a href=\"#audio-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 318
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken($_targetType_, $_targetId_, "private");
        // line 319
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 320
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 321
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 322
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 323
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept($_targetType_, "audio")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 324
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode($_targetType_), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>mp3</strong>格式的音频文件上传，且文件大小不能超过<strong>
                ";
        // line 331
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode", array()) == "cloud")) {
            // line 332
            echo "                  500M
                ";
        } else {
            // line 334
            echo "                  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo "
                ";
        }
        // line 336
        echo "                </strong>。</li>
                ";
        // line 337
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode", array()) == "cloud")) {
            // line 338
            echo "                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>音频将上传到<strong>云服务器</strong></li>
                ";
        } else {
            // line 341
            echo "                  <li>
                    音频将上传到<strong>网站服务器</strong>，";
            // line 342
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("如需使用EduSoho云视频,"), "html", null, true);
            echo "点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。
                  </li>
                ";
        }
        // line 345
        echo "              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
          <div id=\"file-browser-audio\" data-role=\"file-browser\"
          \t\tdata-base-url=\"";
        // line 352
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio"));
        echo "\"
            data-default-url=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 354
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
            data-empty=\"暂无音频文件，请先上传。\">
          \t\t<div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"audio-chooser-course-file\">
          <div id=\"file-browser-audio\" data-role=\"course-file-browser\"
          data-url=\"";
        // line 362
        if (isset($context["courseMaterialUrl"])) { $_courseMaterialUrl_ = $context["courseMaterialUrl"]; } else { $_courseMaterialUrl_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        if (isset($context["courseType"])) { $_courseType_ = $context["courseType"]; } else { $_courseType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_courseMaterialUrl_, array("courseId" => $_targetId_, "type" => "audio", "courseType" => $_courseType_)), "html", null, true);
        echo "\" data-empty=\"暂无音频文件，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>




  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 374
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute($_storageSetting_, "upload_mode", array()), "targetType" => $_targetType_, "targetId" => $_targetId_, "convertor" => "ppt", "lazyConvert" => 1)), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 375
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 376
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>

         <li>
          <a href=\"#ppt-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 401
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken($_targetType_, $_targetId_, "private");
        // line 402
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 403
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 404
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 405
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 406
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept($_targetType_, "ppt")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 407
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode($_targetType_), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>ppt, pptx</strong>格式的PPT文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>PPT将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
          <div id=\"file-browser-ppt\" data-role=\"file-browser\"
          \t\tdata-base-url=\"";
        // line 422
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt"));
        echo "\"
            data-default-url=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 424
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
          \t\tdata-empty=\"暂无PPT文件，请先上传。\">
          \t<div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"ppt-chooser-course-file\">
            <div id=\"file-browser-ppt\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 432
        if (isset($context["courseMaterialUrl"])) { $_courseMaterialUrl_ = $context["courseMaterialUrl"]; } else { $_courseMaterialUrl_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        if (isset($context["courseType"])) { $_courseType_ = $context["courseType"]; } else { $_courseType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_courseMaterialUrl_, array("courseId" => $_targetId_, "type" => "ppt", "courseType" => $_courseType_)), "html", null, true);
        echo "\" data-empty=\"暂无PPT文件，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>



 <div class=\"file-chooser\" id=\"document-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 443
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute($_storageSetting_, "upload_mode", array()), "targetType" => $_targetType_, "targetId" => $_targetId_, "convertor" => "document")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 444
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 445
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#document-chooser-upload-pane\" data-toggle=\"tab\">上传文档</a></li>
        <li><a href=\"#document-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>

         <li>
          <a href=\"#document-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"document-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">

            ";
        // line 471
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken($_targetType_, $_targetId_, "private");
        // line 472
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 473
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 474
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 475
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 476
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept($_targetType_, "cloud_document")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 477
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode($_targetType_), "html", null, true);
        echo "\"></div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>pdf,doc,docx</strong>格式的文档上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>文档将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"document-chooser-disk-pane\">
          <div id=\"file-browser-document\" data-role=\"file-browser\"
              data-base-url=\"";
        // line 490
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document"));
        echo "\"
            data-default-url=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 492
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
              data-empty=\"暂无文档，请先上传。\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"document-chooser-course-file\">
            <div id=\"file-browser-document\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 500
        if (isset($context["courseMaterialUrl"])) { $_courseMaterialUrl_ = $context["courseMaterialUrl"]; } else { $_courseMaterialUrl_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        if (isset($context["courseType"])) { $_courseType_ = $context["courseType"]; } else { $_courseType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_courseMaterialUrl_, array("courseId" => $_targetId_, "type" => "document", "courseType" => $_courseType_)), "html", null, true);
        echo "\" data-empty=\"暂无文档，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>



   <div class=\"file-chooser\" id=\"flash-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 511
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute($_storageSetting_, "upload_mode", array()), "targetType" => $_targetType_, "targetId" => $_targetId_, "convertor" => "")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 512
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 513
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#flash-chooser-upload-pane\" data-toggle=\"tab\">上传Flash</a></li>
        <li><a href=\"#flash-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>

         <li>
          <a href=\"#flash-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"flash-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 538
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken($_targetType_, $_targetId_, "private");
        // line 539
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 540
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 541
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 542
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => $_token_)), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 543
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept($_targetType_, "flash")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 544
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode($_targetType_), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>swf</strong>格式的文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>Flash将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"flash-chooser-disk-pane\">
          <div id=\"file-browser-flash\" data-role=\"file-browser\"
              data-base-url=\"";
        // line 559
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash"));
        echo "\"
            data-default-url=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 561
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
              data-empty=\"暂无Flash，请先上传。\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"flash-chooser-course-file\">
            <div id=\"file-browser-flash\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 569
        if (isset($context["courseMaterialUrl"])) { $_courseMaterialUrl_ = $context["courseMaterialUrl"]; } else { $_courseMaterialUrl_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        if (isset($context["courseType"])) { $_courseType_ = $context["courseType"]; } else { $_courseType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_courseMaterialUrl_, array("courseId" => $_targetId_, "type" => "flash", "courseType" => $_courseType_)), "html", null, true);
        echo "\" data-empty=\"暂无Flash，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  913 => 569,  902 => 561,  898 => 560,  894 => 559,  875 => 544,  870 => 543,  865 => 542,  860 => 541,  855 => 540,  852 => 539,  848 => 538,  819 => 513,  814 => 512,  807 => 511,  790 => 500,  779 => 492,  775 => 491,  771 => 490,  754 => 477,  749 => 476,  744 => 475,  739 => 474,  734 => 473,  731 => 472,  727 => 471,  697 => 445,  692 => 444,  685 => 443,  668 => 432,  657 => 424,  653 => 423,  649 => 422,  630 => 407,  625 => 406,  620 => 405,  615 => 404,  610 => 403,  607 => 402,  603 => 401,  574 => 376,  569 => 375,  562 => 374,  544 => 362,  533 => 354,  529 => 353,  525 => 352,  516 => 345,  510 => 342,  507 => 341,  502 => 338,  499 => 337,  496 => 336,  490 => 334,  486 => 332,  483 => 331,  472 => 324,  467 => 323,  462 => 322,  457 => 321,  452 => 320,  449 => 319,  445 => 318,  416 => 293,  411 => 292,  395 => 280,  390 => 277,  383 => 275,  380 => 274,  368 => 268,  357 => 260,  353 => 259,  349 => 258,  339 => 250,  331 => 247,  325 => 245,  319 => 241,  316 => 240,  306 => 234,  301 => 233,  296 => 232,  291 => 231,  286 => 230,  283 => 229,  279 => 228,  276 => 227,  274 => 226,  260 => 218,  233 => 195,  228 => 194,  223 => 191,  220 => 190,  217 => 189,  213 => 187,  209 => 185,  206 => 184,  203 => 183,  19 => 1,);
    }
}
