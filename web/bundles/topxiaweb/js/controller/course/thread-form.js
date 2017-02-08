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
            } else {
                $('#thread_virtualAmount').closest('.form-group').hide();
                $('input[name="thread[isPublic]"]').closest('.form-group').hide();
                $('#thread_replyAmount').closest('.form-group').hide();
            }
        });
        $('#thread_virtualAmount').on({
            'focusin':function(e){
                $('#thread_virtualAmount').next().hide();
            },
            'focusout':function(e){
                var extType = $('input[name="thread[extType]"]:checked').val();
                if(extType == '1'){
                    //验证悬赏金额
                    var amount = $('#thread_virtualAmount').val();
                    var tip = $('#thread_virtualAmount').attr('data-display');
                    var cash = parseInt($('#thread_virtualAmount').attr('data-cash'));
                    if(amount == '' || parseInt(amount) < 1){
                        $('#thread_virtualAmount').next().html('<span class="text-danger">请输入'+tip+'</span>').show();
                    }
                    if(parseInt(amount)>cash){
                        $('#thread_virtualAmount').next().html('<span class="text-danger">请输入金额不能大于你的账户余额</span>').show();return;
                    }
                }
            }
        });
        $('input[name="thread[isPublic]"]').on('click', function(){
            var isPublic = $(this).val();
            if(isPublic == '1'){
                $('#thread_replyAmount').val(0);
                $('#thread_replyAmount').closest('.form-group').hide();
            } else {
                $('#thread_replyAmount').closest('.form-group').show();
            }
        });
        $('#thread_replyAmount').on({
            'focusin':function(e){
                $('#thread_replyAmount').next().hide();
            },
            'focusout':function(e){
                var isPublic = $('input[name="thread[isPublic]"]:checked').val();
                if(isPublic != '1'){
                    //验证悬赏金额
                    var amount = $('#thread_replyAmount').val();
                    var tip = $('#thread_replyAmount').attr('data-display');
                    var cash = parseInt($('#thread_virtualAmount').val());
                    if(amount == '' || parseInt(amount) < 1){
                        $('#thread_replyAmount').next().html('<span class="text-danger">请输入'+tip+'</span>').show();
                    }
                    if(parseInt(amount)>cash){
                        $('#thread_replyAmount').next().html('<span class="text-danger">请输入金额不能大于悬赏金额</span>').show();return;
                    }
                }
            }
        });

        var type = $('#thread-form').attr('data-type'),
            action = $('#thread-form').attr('data-thread');

        if(action != 'edit'){
            if(type == 'question'){
                $('input[name="thread[extType]').closest('.form-group').show();
            }
            $('#thread_virtualAmount').val(20);
            $('#thread_replyAmount').val(5);
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

        validator.on('formValidate', function(elemetn, event) {
            editor.updateElement();
        });

        validator.on('formValidated', function(err, msg, $form) {
            //验证是否悬赏
            if(action != 'edit') {
                var extType = $('input[name="thread[extType]"]:checked').val();
                if (extType == '1') {
                    //验证悬赏金额
                    var amount = $('#thread_virtualAmount').val();
                    var tip = $('#thread_virtualAmount').attr('data-display');
                    var cash = parseInt($('#thread_virtualAmount').attr('data-cash'));
                    if (amount == '' || parseInt(amount) < 1) {
                        $('#thread_virtualAmount').next().html('<span class="text-danger">请输入' + tip + '</span>').show();
                        return;
                    }
                    if (parseInt(amount) > cash) {
                        $('#thread_virtualAmount').next().html('<span class="text-danger">请输入金额不能大于你的账户余额</span>').show();
                        return;
                    }
                }

                var isPublic = $('input[name="thread[isPublic]"]:checked').val();
                if(isPublic != '1'){
                    //验证悬赏金额
                    var amount = $('#thread_replyAmount').val();
                    var tip = $('#thread_replyAmount').attr('data-display');
                    var cash = parseInt($('#thread_virtualAmount').val());
                    if(amount == '' || parseInt(amount) < 1){
                        $('#thread_replyAmount').next().html('<span class="text-danger">请输入'+tip+'</span>').show();
                    }
                    if(parseInt(amount)>cash){
                        $('#thread_replyAmount').next().html('<span class="text-danger">请输入金额不能大于悬赏金额</span>').show();return;
                    }
                }
            }

            if (err == true) {
                return ;
            }

            $form.find('[type=submit]').attr('disabled', 'disabled');

            return true;
        });


        $('*[node-type="chongchi"]').on('click', function(){
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