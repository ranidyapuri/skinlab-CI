var counter = 0;
$(".btn-add-chart").click(function () {
    counter++;
    nama = $(this).data('nama');
    kode = $(this).data('kode');

    $(".badge-counter").html(counter);

    $('.cart-list').append(
        `<div class="row pl-4 pt-2 pb-2 pr-4 items-cart">    
            <div class="col-10">
                <small class="text-gray-500">Name</small><br>
                <h6>`+ nama + `</h6>
            </div>
            <div class="col-2 float-rigth text-right">
                <small class="text-gray-500">Quantity</small><br>
                <h6>`+ $("#item" + kode).val() + `</h6>
            </div>
        </div>`
    );
});