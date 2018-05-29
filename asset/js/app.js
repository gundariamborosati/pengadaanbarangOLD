/*****
* CONFIGURATION
*/

//Main navigation
$.navigation = $('nav > ul.nav');

$.panelIconOpened = 'icon-arrow-up';
$.panelIconClosed = 'icon-arrow-down';

//Default colours
$.brandPrimary =  '#20a8d8';
$.brandSuccess =  '#4dbd74';
$.brandInfo =     '#63c2de';
$.brandWarning =  '#f8cb00';
$.brandDanger =   '#f86c6b';

$.grayDark =      '#2a2c36';
$.gray =          '#55595c';
$.grayLight =     '#818a91';
$.grayLighter =   '#d1d4d7';
$.grayLightest =  '#f8f9fa';

'use strict';

/****
* MAIN NAVIGATION
*/

$(document).ready(function($){

  // Add class .active to current link
  $.navigation.find('a').each(function(){

    var cUrl = String(window.location).split('?')[0];

    if (cUrl.substr(cUrl.length - 1) == '#') {
      cUrl = cUrl.slice(0,-1);
    }

    if ($($(this))[0].href==cUrl) {
      $(this).addClass('active');

      $(this).parents('ul').add(this).each(function(){
        $(this).parent().addClass('open');
      });
    }
  });

  // Dropdown Menu
  $.navigation.on('click', 'a', function(e){

    if ($.ajaxLoad) {
      e.preventDefault();
    }

    if ($(this).hasClass('nav-dropdown-toggle')) {
      $(this).parent().toggleClass('open');
      resizeBroadcast();
    }

  });

  function resizeBroadcast() {

    var timesRun = 0;
    var interval = setInterval(function(){
      timesRun += 1;
      if(timesRun === 5){
        clearInterval(interval);
      }
      window.dispatchEvent(new Event('resize'));
    }, 62.5);
  }

  /* ---------- Main Menu Open/Close, Min/Full ---------- */
  $('.sidebar-toggler').click(function(){
    $('body').toggleClass('sidebar-hidden');
    resizeBroadcast();
  });

  $('.sidebar-minimizer').click(function(){
    $('body').toggleClass('sidebar-minimized');
    resizeBroadcast();
  });

  $('.brand-minimizer').click(function(){
    $('body').toggleClass('brand-minimized');
  });

  $('.aside-menu-toggler').click(function(){
    $('body').toggleClass('aside-menu-hidden');
    resizeBroadcast();
  });

  $('.mobile-sidebar-toggler').click(function(){
    $('body').toggleClass('sidebar-mobile-show');
    resizeBroadcast();
  });

  $('.sidebar-close').click(function(){
    $('body').toggleClass('sidebar-opened').parent().toggleClass('sidebar-opened');
  });

  /* ---------- Disable moving to top ---------- */
  $('a[href="#"][data-top!=true]').click(function(e){
    e.preventDefault();
  });

});

/****
* CARDS ACTIONS
*/

$('.card-actions').on('click', 'a, button', function(e){
  e.preventDefault();

  if ($(this).hasClass('btn-close')) {
    $(this).parent().parent().parent().fadeOut();
  } else if ($(this).hasClass('btn-minimize')) {
    // var $target = $(this).parent().parent().next('.card-body').collapse({toggle: true});
    if ($(this).hasClass('collapsed')) {
      $('i',$(this)).removeClass($.panelIconOpened).addClass($.panelIconClosed);
    } else {
      $('i',$(this)).removeClass($.panelIconClosed).addClass($.panelIconOpened);
    }
  } else if ($(this).hasClass('btn-setting')) {
    $('#myModal').modal('show');
  }

});

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

function init(url) {

  /* ---------- Tooltip ---------- */
  $('[rel="tooltip"],[data-rel="tooltip"]').tooltip({"placement":"bottom",delay: { show: 400, hide: 200 }});

  /* ---------- Popover ---------- */
  $('[rel="popover"],[data-rel="popover"],[data-toggle="popover"]').popover();

}



$(document).ready(function() {
    $('#dataVendor').DataTable();

    $('#dataLogistik').DataTable();

    $('#dataCustomer').DataTable();

    $('#dataDirektur').DataTable();

    $('#dataBarang').DataTable();

    $('#dataProgress').DataTable();

     $('#dataUlasan').DataTable();

     $('#dataStatus').DataTable();

     $('#dataSuratKeluar').DataTable();

     $('#dataSuratMasuk').DataTable();
     $('#dataPesanan').DataTable();
     $('#detilPesanan').DataTable();


} 

);

 var i = 1;
  
            function additem() {
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var nama = document.createElement('td');
                var spesifikasi = document.createElement('td');
                var volume = document.createElement('td');
                var satuan = document.createElement('td');
                var aksi = document.createElement('td');

//                meng append element
                itemlist.appendChild(row);
                row.appendChild(nama);
                row.appendChild(spesifikasi);
                row.appendChild(volume);
                row.appendChild(satuan);
                row.appendChild(aksi);

//                membuat element input
                var nama_input = document.createElement('input');
                nama_input.setAttribute('name', 'nama_input[' + i + ']');
                nama_input.setAttribute('class', 'form-control');

                var spesifikasi_input = document.createElement('input');
                spesifikasi_input.setAttribute('name', 'spesifikasi_input[' + i + ']');
                spesifikasi_input.setAttribute('class', 'form-control');

                var volume_input = document.createElement('input');
                volume_input.setAttribute('name', 'volume_input[' + i + ']');
                volume_input.setAttribute('class', 'form-control');

                var satuan_input = document.createElement('input');
                satuan_input.setAttribute('name', 'satuan_input[' + i + ']');
                satuan_input.setAttribute('class', 'form-control');



                var hapus = document.createElement('span');

                nama.appendChild(nama_input);
                spesifikasi.appendChild(spesifikasi_input);
                volume.appendChild(volume_input);
                satuan.appendChild(satuan_input);

                aksi.appendChild(hapus);

                hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i>Hapus </button>';
//                Aksi Delete
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };

                i++;
            }