define(function(require, exports, module) {

    exports.run = function() {

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