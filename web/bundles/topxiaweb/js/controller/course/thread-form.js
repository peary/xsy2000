define(function(require, exports, module) {

    var Validator = require('bootstrap.validator');
    require('common/validator-rules').inject(Validator);
    require('es-ckeditor');

    exports.run = function() {
        require('./common').run();

        // group: 'default'
        var editor = CKEDITOR.replace('thread_content', {
            toolbar: 'Thread',
            filebrowserImageUploadUrl: $('#thread_content').data('imageUploadUrl')
        });

        var validator = new Validator({
            element: '#thread-form'
        });

        $('input[name="thread[extType]"]').on('click', function(){
            var extType = $(this).val();
            if(extType == '1'){
                $('#thread_virtualAmount').closest('.form-group').show();
                $('input[name="thread[isPublic]"]').closest('.form-group').show();
                if($('input[name="thread[isPublic]"]').val() == '1'){
                    $('#thread_replyAmount').closest('.form-group').hide();
                } else {
                    $('#thread_replyAmount').closest('.form-group').show();
                }
            } else {
                $('#thread_virtualAmount').closest('.form-group').hide();
                $('input[name="thread[isPublic]"]').closest('.form-group').hide();
                $('#thread_replyAmount').closest('.form-group').hide();
            }
        });
        $('input[name="thread[isPublic]"]').on('click', function(){
            var isPublic = $(this).val();
            if(isPublic == '1'){
                $('#thread_replyAmount').closest('.form-group').hide();
            } else {
                $('#thread_replyAmount').closest('.form-group').show();
            }
        });
        $('#thread_virtualAmount').on('change', function(){
            $(this).next().html('').hide();
            var extType = $('input[name="thread[extType]"]:checked').val();
            if (extType == '1') {
                //验证悬赏金额
                var amount = $('#thread_virtualAmount').val();
                var cash = parseInt($('input[name="thread[cash]"]').val());
                if (parseInt(amount) > cash) {
                    $('#thread_virtualAmount').next().html('<span class="text-danger">请输入金额不能大于你的账户余额</span>').show();
                }
            }
        });
        $('#thread_replyAmount').on('change', function(){
            $(this).next().html('').hide();
            var amount = $('#thread_replyAmount').val();
            var cash = parseInt($('#thread_virtualAmount').val());
            if(parseInt(amount)>cash){
                $('#thread_replyAmount').next().html('<span class="text-danger">请输入付费金额不能大于悬赏金额</span>').show();return;
            }
        });

        var type = $('#thread-form').attr('data-type'),
            action = $('#thread-form').attr('data-thread');

        if(action != 'edit'){
            if(type == 'question'){
                $('input[name="thread[extType]').closest('.form-group').show();
            }
        }

        validator.addItem({
            element: '[name="thread[title]"]',
            required: true,
            rule:'visible_character'
        });

        validator.addItem({
            element: '[name="thread[content]"]',
            required: true
        });

        validator.on('formValidate', function(element, event) {
            editor.updateElement();
        });

        validator.on('formValidated', function(err, msg, $form) {
            console.log(err);console.log($form);
            //验证是否悬赏
            if(action != 'edit') {
                var extType = $('input[name="thread[extType]"]:checked').val();
                if (extType == '1') {
                    //验证悬赏金额
                    var amount = $('#thread_virtualAmount').val();
                    var cash = parseInt($('input[name="thread[cash]"]').val());
                    if (parseInt(amount) > cash) {
                        $('#thread_virtualAmount').next().html('<span class="text-danger">选择的悬赏金额不能大于你的账户余额</span>').show();
                        err = true;
                    }
                }

                var isPublic = $('input[name="thread[isPublic]"]:checked').val();
                if(isPublic != '1'){
                    //验证付费金额
                    var amount = $('#thread_replyAmount').val();
                    var cash = parseInt($('#thread_virtualAmount').val());
                    if(parseInt(amount)>cash){
                        $('#thread_replyAmount').next().html('<span class="text-danger">选择的付费金额不能大于悬赏金额</span>').show();return;
                        err = true;
                    }
                }
            }

            if (err == true) {
                return '';
            }

            $form.find('[type=submit]').attr('disabled', 'disabled');

            return true;
        });


        $('*[node-type="chongzhi"]').on('click', function(){
            if($('#addamount-form').length == 1){
                $('#modal').modal('show');return;
            }
            $.get($(this).data('url'), function(res){
                $('#modal').append(res).modal('show');
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