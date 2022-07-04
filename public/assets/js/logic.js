$(document).ready(function () {
    // Manipulasi keranjang belanja
    $(".manipulasi").on("click", function (e) {
        e.preventDefault();
        // Product Id
        let productID = $(this).data('product');
        let status = $(this).data('status');
        let route = $(this).data('route');
        let routeBack = $(this).data('routeback');

        fetch(route, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({
                productID: productID,
                status: status
            })
        }).then(res => res.json()).then(res => {
            // null = refresh halaman
            console.log(res);
            if (res == null) {
                window.location.href = routeBack;
            } else {
                $(this).parents().siblings('.loc1').find('.stok').text(res.qty);
                $(this).parents().siblings('.loc1').find('.total').text(new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(res.qty * res.harga));
                // $(this).parents().siblings(".desc-1").find(".qty-info").text(res.qty);
                // $(this).parents().siblings(".desc-1").find(".qty-total").text(new Intl.NumberFormat('id-ID', {
                //     style: 'currency',
                //     currency: 'IDR'
                // }).format(res.qty * res.price));
            }
        });
    });

    $("#editphotouser").on('change', function () {
        let imgPreview = document.querySelector(".img-preview");
        let gambarData = document.querySelector("#editphotouser");

        let fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambarData.files[0]);

        fileGambar.onload = function (e) {
            imgPreview.src = e.target.result;
        };
    });
});