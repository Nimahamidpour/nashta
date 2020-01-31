function addToCart(id,kind) {
    var data="id="+id+"&&kind=1";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:'/order/addToCart',
        method:'post',
        data:{'id':id,'kind':kind},
        success:function (data)
        {
           if (data=="successnew")
           {
               document.getElementById('btnaddcart'+id).classList.remove('d-block');
               document.getElementById('btnaddcart'+id).classList.add('d-none');
               document.getElementById('controller'+id).classList.remove('d-none');
               document.getElementById('controller'+id).classList.add('d-flex');
               document.getElementById('counter'+id).innerText= Number(document.getElementById('counter'+id).innerText)+1;
                document.getElementById('count-id').innerText=Number(document.getElementById('count-id').innerText)+1;
           }
           else if(data=="success")
           {
               document.getElementById('btnaddcart'+id).classList.remove('d-block');
               document.getElementById('btnaddcart'+id).classList.add('d-none');
               document.getElementById('controller'+id).classList.remove('d-none');
               document.getElementById('controller'+id).classList.add('d-flex');
               document.getElementById('counter'+id).innerText= Number(document.getElementById('counter'+id).innerText)+1;
           }
           else if(data=="full")
           {
               document.getElementById('btnaddcart'+id).classList.add('d-none');
               document.getElementById('controller'+id).classList.remove('d-none');
               document.getElementById('controller'+id).classList.add('d-flex');
           }
        }
    })

}

function minesCart(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:'/order/minesCart',
        method:'post',
        data:{'id':id,'kind':1},
        success:function (data)
        {
            if (data=="mines")
            {
                document.getElementById('counter'+id).innerText= Number(document.getElementById('counter'+id).innerText)-1;
            }
            else if(data=="delete")
            {
                document.getElementById('btnaddcart'+id).classList.remove('d-none');
                document.getElementById('btnaddcart'+id).classList.add('d-block');
                document.getElementById('controller'+id).classList.remove('d-flex');
                document.getElementById('controller'+id).classList.add('d-none');
                document.getElementById('counter'+id).innerText= 0;
                document.getElementById('count-id').innerText=Number(document.getElementById('count-id').innerText)-1;

            }
        }
    })

}

function removefrombasket(id) {
    $.ajax({
        url:'/order/removecart/'+id,
        method:'get',
        success:function (data)
        {
            if(data=="delete")
            {
                window.location.reload();
            }
        }
    })
}

function updatecart(id,quantity) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:'/order/updateCart',
        method:'post',
        data:{'id':id,'quantity':quantity},
        success:function (data)
        {
            console.log('ok');
            window.location.reload();
        }
    })
}

function showaddaddress() {
    document.getElementById('btn_add_address').classList.add('d-none');
    document.getElementById('btn_add_address').classList.remove('d-block');

    document.getElementById('div_add_address').classList.add('d-block');
    document.getElementById('div_add_address').classList.remove('d-none');
}

function addaddress() {
var address=document.getElementById('add_address').value;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:'/panel/address/add',
        method:'post',
        data:{'address':address},
        success:function (data)
        {
            if (data!="false")
            {
                var parent=$('#address_table');
                parent.append('<tr>\n' +
                    '          <td><input class="" type="radio" name="address"\n' +
                    '           value="'+address+'" id="address'+data+'"\n' +
                    '           checked></td>\n' +
                    '            <td colspan="2"><label class="font-size-13 bold p-0 m-0"\n' +
                    '                                                       for="address'+data+'">'+address+'</label>\n' +
                    '             </td>\n' +
                    '             </tr>');
                if ($('#no_address'))
                {
                    document.getElementById('no_address').classList.add('d-none');
                }
            }
            else
            {
                console.log(data);
            }

        }
    })
}
