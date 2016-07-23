(function( $ ){
    var target = null;
    var template = null;
    var lock = false;
    var variables = {
        'last'      :    0
    }
    var settings = {
        'amount'      :   '16',
        'address'     :   '',
        'format'      :   'jsonp',
        'template'    :   '.single_item',
        'trigger'     :   '.new_more',
        'scroll'      :   'false',
        'offset'      :   '100',
        'spinner_code':   ''
    }

    var methods = {
        init  :   function(options){
            return this.each(function(){

                if(options){
                    $.extend(settings, options);
                }
                template = $(this).children(settings.template).wrap('<div/>').parent();
                template.css('display','none')
                $(this).append('<div class="more_loader_spinner">'+settings.spinner_code+'</div>')
                $(this).children(settings.template).remove()
                target = $(this);
                if(settings.scroll == 'false'){
                    $(this).find(settings.trigger).bind('click.more',methods.get_data);
                    $(this).more('get_data');
                }
                else{
                    if($(this).height() <= $(this).attr('scrollHeight')){
                        target.more('get_data',settings.amount*2);
                    }
                    $(this).bind('scroll.more',methods.check_scroll);
                }
            })
        },
        check_scroll : function(){
            if((target.scrollTop()+target.height()+parseInt(settings.offset)) >= target.attr('scrollHeight') && lock == false){
                target.more('get_data');
            }
        },
        debug :   function(){
            var debug_string = '';
            $.each(variables, function(k,v){
                debug_string += k+' : '+v+'\n';
            })
            alert(debug_string);
        },
        remove        : function(){
            target.children(settings.trigger).unbind('.more');
            target.unbind('.more')
            //target.children(settings.trigger).remove();
            $(settings.trigger).html('<a>已到最后</a>')
        },
        add_elements  : function(data){
            //alert('adding elements')

            var root = target
            //   alert(root.attr('id'))
            var counter = 0;
            if(data){
                $(data).each(function(){
                    counter++
                    var t = template
                    $.each(this, function(key, value){
                        if(key=="new_mplist_img"){
                            var pic = document.getElementById(key);
                            pic.src=value;
                        }else if(key=="url"){
                            document.getElementById(key).href=value;
                        }else{
                            if(t.find('.'+key)) t.find('.'+key).html(value);
                        }

                    })
                    //t.attr('id', 'more_element_'+ (variables.last++))
                    if(settings.scroll == 'true'){
                        //    root.append(t.html())
                        root.children('.more_loader_spinner').before(t.html())
                    }else{
                        //    alert('...')

                        root.children(settings.trigger).before(t.html())

                    }

                    root.children(settings.template+':last').attr('id', 'more_element_'+ ((variables.last++)+1))

                })


            }
            else  methods.remove()
            target.children('.more_loader_spinner').css('display','none');
            if(counter < settings.amount) methods.remove()

        },
        get_data      : function(){
            // alert('getting data')
            var ile;
            lock = true;
            target.children(".more_loader_spinner").css('display','block');
            $(settings.trigger).css('display','none')
            if(typeof(arguments[0]) == 'number') ile=arguments[0];
            else {
                ile = settings.amount;

            }
alert(0)
            $.post(settings.address, {
                last : variables.last,
                amount : ile
            }, function(data){
                alert(11111)
                $(settings.trigger).css('display','block')
                methods.add_elements(data)
                lock = false;
            }, settings.format)

        }
    };
    $.fn.more = function(method){
        if(methods[method])
            return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        else if(typeof method == 'object' || !method)
            return methods.init.apply(this, arguments);
        else $.error('Method ' + method +' does not exist!');

    }
})(jQuery)
/**
 * Created by sunNode on 16/7/20.
 */
