/**
 * 1.页面加载时取出storage值赋给每个文本框
 * 2.每增加一个input值保存一个storge值
 *
 *
 * */
var storage=window.localStorage;
$(function () {
    if(window.localStorage){
          if(storage.length>0)
          {
             for (var i=0;i<storage.length;i++)
             {
              var  name=  storage.key(i);
              if (name=="description")
                  $("textarea[name='"+name+"']").val(storage.getItem(name));
                  else
              $("input[name='"+name+"']").val(storage.getItem(name));
             }
          }
        $("input[type='text'],textarea").blur(function () {
             var temp= storage.getItem($(this).prop('name'));
            if (temp==null)
                storage.setItem($(this).prop('name'),$(this).val());
            else {
                storage.removeItem($(this).prop('name'));
                storage.setItem($(this).prop('name'), $(this).val());
            }
        });
    }
});
function clearstorage() {
    storage.clear();
}

