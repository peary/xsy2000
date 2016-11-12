define(function(require, exports, module) {

    var Widget     = require('widget');
    var Validator = require('bootstrap.validator');
    require('common/validator-rules').inject(Validator);

    var UserInfoFieldsItemValidate = Widget.extend({

        attrs: {
            validator: null
        },

        events: {

        },

        setup:function() {
            this.createValidator();
            this.initBaseFields();
        },

        createValidator: function() {
            var validator = new Validator({
                element: this.element,
                failSilently: true,
                onFormValidated: function(error, results, $form) {
                    if (error) {
                        return false;
                    }
                    //检查数据
                    if(editObj.onValidata() == false) {
                        return false;
                    }
                    this.element.find('[type=submit]').button('submiting').addClass('disabled');
                }
            });

            this.set('validator', validator);
        },

        initBaseFields: function(){
            var validator = this.get('validator');

            validator.addItem({
                element: '[name="email"]',
                required: true,
                rule: 'email remote'
            });

            validator.addItem({
                element: '[name="mobile"]',
                required: true,
                rule: 'phone'
            });

            validator.addItem({
                element: '[name="truename"]',
                required: true,
                rule: 'chinese byte_minlength{min:4} byte_maxlength{max:10}'
            });

            validator.addItem({
                element: '[name="qq"]',
                required: true,
                rule: 'qq'
            });

            validator.addItem({
                element: '[name="idcard"]',
                required: true,
                rule: 'idcard'
            });

            validator.addItem({
                element: '[name="gender"]',
                required: true,
                errormessageRequired: '请选择性别'
            });

            validator.addItem({
                element: '[name="company"]',
                required: true
            });

            validator.addItem({
                element: '[name="job"]',
                required: true
            });

            validator.addItem({
                element: '[name="weibo"]',
                required: true,
                rule: 'url',
                errormessageUrl: '微博地址不正确，须以http://开头。'
            });

            validator.addItem({
                element: '[name="weixin"]',
                required: true
            });
            for(var i=1;i<=5;i++){
                 validator.addItem({
                     element: '[name="intField'+i+'"]',
                     required: true,
                     rule: 'int'
                 });

                  validator.addItem({
                    element: '[name="floatField'+i+'"]',
                    required: true,
                    rule: 'float'
                 });

                 validator.addItem({
                    element: '[name="dateField'+i+'"]',
                    required: true,
                    rule: 'date'
                 });
            }

            for(var i=1;i<=10;i++){
                validator.addItem({
                    element: '[name="varcharField'+i+'"]',
                    required: true
                });

                validator.addItem({
                    element: '[name="textField'+i+'"]',
                    required: true
                });
            }

            //初始化对象
            var editObj = new Create();
        }
        
    });

    module.exports = UserInfoFieldsItemValidate;

    function Create() {
        this.init();
    }

    Create.prototype = {
        init: function () {
            this.districtList = [];
            this.gradeLevel = [
                '七年级','八年级','九年级'
            ];
            this.classLevel = 50;
            this.loadData();
            this.addDom();
            this.addEvents();
        },
        addEvents: function () {
            var self = this;
            //添加获取焦点事件
            $('#varcharField5,#varcharField1,#varcharField6,#varcharField2').on('focus', function(){
                var pare = $(this).closest('.form-group'), id = $(this).attr('id');
                if(id == 'varcharField5'){
                    pare.hide();
                    pare.next().show();
                    $('#varcharField1').closest('.form-group').hide();
                    $('#varcharField1_ext').closest('.form-group').show();
                }
                else if(id == 'varcharField1'){
                    $('#varcharField5').closest('.form-group').hide();
                    $('#varcharField5_ext').closest('.form-group').show();
                    pare.hide();
                    pare.next().show();
                }
                else {
                    pare.hide();
                    pare.next().show();
                }
            });

            //联动操作
            $('#varcharField5_ext').on('change', function(){
                var value = $(this).val();
                var pid = $(this).find('option[value="'+value+'"]').attr('data-id'),
                    subs = [], arrs = [];
                for(var i=0; i<self.districtList.length; i++){
                    if(pid == self.districtList[i].id){
                        subs = self.districtList[i].sub;
                    }
                }
                for(var i=0; i<subs.length; i++){
                    arrs.push('<option value="'+subs[i].name+'">'+subs[i].name+'</option>');
                }
                $('#varcharField1_ext').html(arrs.join(''));
            });

            //提交
            //$('#user-edit-btn').on('click', function(){
            //    console.log(1);
            //    if(self.onValidata()){
            //        $('#user-edit-form').submit();
            //    }
            //});
        },
        onValidata: function (){
            //填充数据
            if($('#varcharField5_ext').closest('.form-group').css('display') != 'none'){
                $('#varcharField5').val($('#varcharField5_ext').val());
            }
            if($('#varcharField1_ext').closest('.form-group').css('display') != 'none'){
                $('#varcharField1').val($('#varcharField1_ext').val());
            }
            if($('#varcharField6_ext').closest('.form-group').css('display') != 'none'){
                $('#varcharField6').val($('#varcharField6_ext').val());
            }
            if($('#varcharField2_ext').closest('.form-group').css('display') != 'none'){
                $('#varcharField2').val($('#varcharField2_ext').val());
            }

            if($('#varcharField5').val() == ''){
                alert('请选择就读市/区'); return false;
            }
            if($('#varcharField1').val() == ''){
                alert('请选择就读学校'); return false;
            }
            if($('#varcharField6').val() == ''){
                alert('请选择所在年级'); return false;
            }
            if($('#varcharField2').val() == ''){
                alert('请选择所在班级'); return false;
            }

            return true;
        },
        loadData: function () {
            var self = this;
            $.ajax({
                url: '/settings/district',
                type:'GET',
                dataType:'json',
                async: false,
                success: function(resp){
                    self.districtList = resp.data;
                }
            });
        },
        addDom: function () {
            //就读市/区
            if($('#varcharField5').length>0){
                var arr = [], v5 = $('#varcharField5').val();
                arr.push('<div class="form-group" style="display:none;">');
                arr.push(' <label for="label" class="col-sm-3 control-label">就读市/区</label>');
                arr.push(' <div class="col-sm-6 controls">');
                arr.push('     <select class="form-control" id="varcharField5_ext">');
                for(var i=0; i<this.districtList.length; i++){
                    arr.push('<option value="'+this.districtList[i].name+'" data-id="'+this.districtList[i].id+'" '+(v5==this.districtList[i].name?'selected':'')+'>'+this.districtList[i].name+'</option>');
                }
                arr.push('     </select>');
                arr.push(' </div></div>');
                $('#varcharField5').closest('.form-group').after(arr.join(''));
            }

            //就读学校
            if($('#varcharField1').length>0){
                var arr = [], v1 = $('#varcharField1').val();
                var subs = this.districtList[0].sub;
                for(var i=0; i<this.districtList.length; i++){
                    if(v5 == this.districtList[i].name){
                        subs = this.districtList[i].sub;
                    }
                }
                arr.push('<div class="form-group" style="display:none;">');
                arr.push(' <label for="label" class="col-sm-3 control-label">就读学校</label>');
                arr.push(' <div class="col-sm-6 controls">');
                arr.push('     <select class="form-control" id="varcharField1_ext">');
                for(var i=0; i<subs.length; i++){
                    arr.push('<option value="'+subs[i].name+'" '+(v1==subs[i].name?'selected':'')+'>'+subs[i].name+'</option>');
                }
                arr.push('     </select>');
                arr.push(' </div></div>');
                $('#varcharField1').closest('.form-group').after(arr.join(''));
            }

            //所在年级
            if($('#varcharField6').length>0){
                var arr = [], v6 = $('#varcharField6').val();
                arr.push('<div class="form-group" style="display:none;">');
                arr.push(' <label for="label" class="col-sm-3 control-label">所在年级</label>');
                arr.push(' <div class="col-sm-6 controls">');
                arr.push('     <select class="form-control" id="varcharField6_ext">');
                for(var i=0; i<this.gradeLevel.length; i++){
                    arr.push('<option value="'+this.gradeLevel[i]+'" '+(v6==this.gradeLevel[i]?'selected':'')+'>'+this.gradeLevel[i]+'</option>');
                }
                arr.push('     </select>');
                arr.push(' </div></div>');
                $('#varcharField6').closest('.form-group').after(arr.join(''));
            }

            //所在班级
            if($('#varcharField2').length>0){
                var arr = [], v2 = $('#varcharField2').val();
                arr.push('<div class="form-group" style="display:none;">');
                arr.push(' <label for="label" class="col-sm-3 control-label">所在班级</label>');
                arr.push(' <div class="col-sm-6 controls">');
                arr.push('     <select class="form-control" id="varcharField2_ext">');
                for(var i=1; i<this.classLevel; i++){
                    arr.push('<option value="'+i+'" '+(v2==i?'selected':'')+'>'+i+'班</option>');
                }
                arr.push('     </select>');
                arr.push(' </div></div>');
                $('#varcharField2').closest('.form-group').after(arr.join(''));
            }
        }
    };

});