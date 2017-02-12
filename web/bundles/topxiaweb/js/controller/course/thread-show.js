define(function(require, exports, module) {

    var Validator = require('bootstrap.validator');
    require('es-ckeditor');
    Notify = require('common/bootstrap-notify');

    exports.run = function() {
        require('./common').run();

        // group: 'course'
        var editor =  CKEDITOR.replace('post_content', {
            toolbar: 'Thread',
            filebrowserImageUploadUrl: $('#post_content').data('imageUploadUrl')
        });

        var validator = new Validator({
            element: '#thread-post-form'
        });

        validator.addItem({
            element: '[name="post[content]"]',
            required: true
        });

        Validator.query('#thread-post-form').on('formValidate', function(elemetn, event) {
            editor.updateElement();
        });

        Validator.query('#thread-post-form').on('formValidated', function(err, msg, ele) {
            if (err == true) {
                return ;
            }
            
            $('.thread-post-list').find('li.empty').remove();
            var $form = $("#thread-post-form");

            $.ajax({
                'url':$form.attr('action'), 
                'type':'post',
                'data':$form.serialize(), 
                'success': function(html) {
                    $("#thread-post-num").text(parseInt($("#thread-post-num").text()) + 1);
                    var id = $(html).appendTo('.thread-post-list').attr('id');
                    editor.setData('');
                    //清除附件
                    $('.js-attachment-list').empty();
                    $('.js-attachment-ids').val("");
                    $('.js-upload-file').removeClass('hidden');
                    
                    $form.find('[type=submit]').removeAttr('disabled');

                    window.location.href = '#' + id;
                },
                'error': function(data) {
                    data = $.parseJSON(data.responseText);
                    if(data.error) {
                        Notify.danger(data.error.message);
                    } else {
                        Notify.danger('发表回复失败，请重试');
                    }
                }
            });

            return false;
        });

        $('[data-role=confirm-btn]').click(function(){
            var $btn = $(this);
            if (!confirm($btn.data('confirmMessage'))) {
                return false;
            }
            $.post($btn.data('url'), function(){
                var url = $btn.data('afterUrl');
                if (url) {
                    window.location.href = url;
                } else {
                    window.location.reload();
                }
            });
        });

        $('.thread-post-list').on('click','.thread-post-action',function(){

            var userName=$(this).data('user');
         
            editor.focus();
            editor.insertHtml('@'+userName+'&nbsp;');
            
        });

        $(".thread-post-list").on('click', '[data-action=post-delete]', function() {
            if (!confirm("您真的要删除该回帖吗？")) {
                return false;
            }
            var $btn = $(this);
            $.post($btn.data('url'), function(){
                window.location.reload();
            });
        });

        $('.thread-post-list').on('click','.thread-replyamount-action', function(){
            if($('#replyamount-form').length == 1){
                $('#modal').modal('show');return;
            }
            $.get($(this).data('url'), function(res){
                $('#modal').html(res).modal('show');
            });
        });

        $(document).on('click', '*[node-type="chongzhi"]', function(){
            if($('#replyamount-form').length == 1){
                $('#modal').modal('hide');
            }
            if($('#addamount-form').length == 1){
                $('#modal').modal('show');return;
            }
            $.get($(this).data('url'), function(res){
                $('#modal').html(res).modal('show');
            });
        });
        $(document).on('click', '#addamount-btn', function(e){
            var curObj = $('#addamount-form input[name="amount"]');
            var amount = curObj.val();
            if(amount == '' || parseInt(amount)<1){
                curObj.next().html('请输入正确的充值金额').show();return;
            }
            if(amount>0){
                $('#addamount-form').submit();
            }
        });

    };

});