(function ($) {
	$('input[type="submit"]').click(function(){
		var slton = $('input[name="soluongton"]').val(); // 21
		var slnhap = $('input[name="soluongnhap"]').val(); // 100
		var dongia = $('input[name="dongia"]').val();
		var giagoc = $('input[name="giagoc"]').val();
		//so luong
		if(slton > slnhap)
		{
			$('#loislton').text('số lượng tồn không được lơn hơn số lượng nhập');
			return false;
			
		}else
		{
			$('#loislton').text('');
			return true;
		}

		if(slton == 0 )
		{
			$('#loislton').text('số lượng tồn không được bằng không');
			return false;
		}else
		{
			$('#loislton').text();
			return true;
		}

		if(slnhap == 0 )
		{
			$('#loislnhap').text('số lượng nhập không được bằng không');
			return false;
		}else
		{
			$('#loislnhap').text();
			return true;
		}

		//dongia
		
		if(dongia == 0)
		{
			$('#loidongia').text('Đơn giá bằng không');
			return false;
		}else
		{
			$('#loidongia').text();
			return true;
		}
		
		if( giagoc == 0)
		{
			$('#loigiagoc').text('giá gốc bằng không');
			return false;
		}else
		{
			$('#loigiagoc').text();
			return true;
		}
	
});

	$('a[name="btnsua"]').click(function(){
		var mahd = $('a[name="btnsua"]').attr('id');
		var masp = $(this).parent().parent().find('input[name="masp"]').attr('id');
		var dongia = $(this).parent().parent().find('input[name="dongia"]').val();
		var soluong = $(this).parent().parent().find('input[name="soluong"]').val();
		$.ajax({
            url: 'sua-chi-tiet-hoa-don/'+mahd+'/'+masp+'/'+dongia+'/'+soluong,
            type: 'get',
            cache: false,
            data: {"mahd": mahd, "masp": masp, "dongia": dongia, "soluong": soluong},
            success: function (data)
            {   
                window.location = "admin/hoa-don"
            },
            error: function(){
            	alert('sai');
            }
        });
	});
})(jQuery);