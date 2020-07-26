{{-- Add this as HTML --}}
{{--
  <select name="icon" id="fontawesome_" class="form-control fontawesome_"></select>
--}}

{{-- Add this as SCRIPT in "edit.blade.php" --}}
{{-- 
  <script type="text/javascript">
    $(document).ready(function(){
      var searchWord = '{{ $singleMenu->icon }}';

      if ($('.fontawesome_ option:contains('+searchWord+')').length) {

        var value_ = $('.fontawesome_ option:contains('+searchWord+')').val();
        $('.fontawesome_ option[value="'+value_+'"]').siblings().removeAttr('selected', '""');
        $('.fontawesome_ option[value="'+value_+'"]').attr('selected', '""');
        $('#select2-fontawesome_-container').html('<span><i class="'+searchWord+'"></i> '+searchWord+'</span>');
        
      }
    });
  </script>
--}}

{{-- Add this as SCRIPT in "add.blade.php" & "edit.blade.php" --}}
<script type="text/javascript">

  $('.fontawesome_').select2();
  $(document).ready(function(){

    var data = [
      {
        id: 1,
        text: '<span><i class="fa fa-500px"></i> fa fa-500px</span> ',
        html: '<span><i class="fa fa-500px"></i> fa fa-500px</span> ',
        title: 'fa fa-500px'
      },
      {
        id: 2,
        text: '<span><i class="fa fa-address-book"></i> fa fa-address-book</span> ',
        html: '<span><i class="fa fa-address-book"></i> fa fa-address-book</span> ',
        title: 'fa fa-address-book'
      },
      {
        id: 3,
        text: '<span><i class="fa fa-address-book-o"></i> fa fa-address-book-o</span> ',
        html: '<span><i class="fa fa-address-book-o"></i> fa fa-address-book-o</span> ',
        title: 'fa fa-address-book-o'
      },
      {
        id: 4,
        text: '<span><i class="fa fa-address-card"></i> fa fa-address-card</span> ',
        html: '<span><i class="fa fa-address-card"></i> fa fa-address-card</span> ',
        title: 'fa fa-address-card'
      },
      {
        id: 5,
        text: '<span><i class="fa fa-address-card-o"></i> fa fa-address-card-o</span> ',
        html: '<span><i class="fa fa-address-card-o"></i> fa fa-address-card-o</span> ',
        title: 'fa fa-address-card-o'
      },
      {
        id: 6,
        text: '<span><i class="fa fa-adjust"></i> fa fa-adjust</span> ',
        html: '<span><i class="fa fa-adjust"></i> fa fa-adjust</span> ',
        title: 'fa fa-adjust'
      },
      {
        id: 7,
        text: '<span><i class="fa fa-adn"></i> fa fa-adn</span> ',
        html: '<span><i class="fa fa-adn"></i> fa fa-adn</span> ',
        title: 'fa fa-adn'
      },
      {
        id: 8,
        text: '<span><i class="fa fa-align-center"></i> fa fa-align-center</span> ',
        html: '<span><i class="fa fa-align-center"></i> fa fa-align-center</span> ',
        title: 'fa fa-align-center'
      },
      {
        id: 9,
        text: '<span><i class="fa fa-align-justify"></i> fa fa-align-justify</span> ',
        html: '<span><i class="fa fa-align-justify"></i> fa fa-align-justify</span> ',
        title: 'fa fa-align-justify'
      },
      {
        id: 10,
        text: '<span><i class="fa fa-align-left"></i> fa fa-align-left</span> ',
        html: '<span><i class="fa fa-align-left"></i> fa fa-align-left</span> ',
        title: 'fa fa-align-left'
      },
      {
        id: 11,
        text: '<span><i class="fa fa-align-right"></i> fa fa-align-right</span> ',
        html: '<span><i class="fa fa-align-right"></i> fa fa-align-right</span> ',
        title: 'fa fa-align-right'
      },
      {
        id: 12,
        text: '<span><i class="fa fa-amazon"></i> fa fa-amazon</span> ',
        html: '<span><i class="fa fa-amazon"></i> fa fa-amazon</span> ',
        title: 'fa fa-amazon'
      },
      {
        id: 13,
        text: '<span><i class="fa fa-ambulance"></i> fa fa-ambulance</span> ',
        html: '<span><i class="fa fa-ambulance"></i> fa fa-ambulance</span> ',
        title: 'fa fa-ambulance'
      },
      {
        id: 14,
        text: '<span><i class="fa fa-american-sign-language-interpreting"></i> fa fa-american-sign-language-interpreting</span> ',
        html: '<span><i class="fa fa-american-sign-language-interpreting"></i> fa fa-500px</span> ',
        title: 'fa fa-american-sign-language-interpreting'
      },
      {
        id: 15,
        text: '<span><i class="fa fa-anchor"></i> fa fa-anchor</span> ',
        html: '<span><i class="fa fa-anchor"></i> fa fa-anchor</span> ',
        title: 'fa fa-anchor'
      },
      {
        id: 16,
        text: '<span><i class="fa fa-android"></i> fa fa-android</span> ',
        html: '<span><i class="fa fa-android"></i> fa fa-android</span> ',
        title: 'fa fa-android'
      },
      {
        id: 17,
        text: '<span><i class="fa fa-angellist"></i> fa fa-angellist</span> ',
        html: '<span><i class="fa fa-angellist"></i> fa fa-angellist</span> ',
        title: 'fa fa-angellist'
      },
      {
        id: 18,
        text: '<span><i class="fa fa-angle-double-down"></i> fa fa-angle-double-down</span> ',
        html: '<span><i class="fa fa-angle-double-down"></i> fa fa-angle-double-down</span> ',
        title: 'fa fa-angle-double-down'
      },
      {
        id: 19,
        text: '<span><i class="fa fa-angle-double-left"></i> fa fa-angle-double-left</span> ',
        html: '<span><i class="fa fa-angle-double-left"></i> fa fa-angle-double-left</span> ',
        title: 'fa fa-angle-double-left'
      },
      {
        id: 20,
        text: '<span><i class="fa fa-angle-double-right"></i> fa fa-angle-double-right</span> ',
        html: '<span><i class="fa fa-angle-double-right"></i> fa fa-angle-double-right</span> ',
        title: 'fa fa-angle-double-right'
      },
      {
        id: 21,
        text: '<span><i class="fa fa-angle-double-up"></i> fa fa-angle-double-up</span> ',
        html: '<span><i class="fa fa-angle-double-up"></i> fa fa-angle-double-up</span> ',
        title: 'fa fa-angle-double-up'
      },
      {
        id: 22,
        text: '<span><i class="fa fa-angle-down"></i> fa fa-angle-down</span> ',
        html: '<span><i class="fa fa-angle-down"></i> fa fa-angle-down</span> ',
        title: 'fa fa-angle-down'
      },
      {
        id: 23,
        text: '<span><i class="fa fa-angle-left"></i> fa fa-angle-left</span> ',
        html: '<span><i class="fa fa-angle-left"></i> fa fa-angle-left</span> ',
        title: 'fa fa-angle-left'
      },
      {
        id: 24,
        text: '<span><i class="fa fa-angle-right"></i> fa fa-angle-right</span> ',
        html: '<span><i class="fa fa-angle-right"></i> fa fa-angle-right</span> ',
        title: 'fa fa-angle-right'
      },
      {
        id: 25,
        text: '<span><i class="fa fa-angle-up"></i> fa fa-angle-up</span> ',
        html: '<span><i class="fa fa-angle-up"></i> fa fa-angle-up</span> ',
        title: 'fa fa-angle-up'
      },
      {
        id: 26,
        text: '<span><i class="fa fa-apple"></i> fa fa-apple</span> ',
        html: '<span><i class="fa fa-apple"></i> fa fa-apple</span> ',
        title: 'fa fa-apple'
      },
      {
        id: 27,
        text: '<span><i class="fa fa-archive"></i> fa fa-archive</span> ',
        html: '<span><i class="fa fa-archive"></i> fa fa-archive</span> ',
        title: 'fa fa-archive'
      },
      {
        id: 28,
        text: '<span><i class="fa fa-area-chart"></i> fa fa-area-chart</span> ',
        html: '<span><i class="fa fa-area-chart"></i> fa fa-area-chart</span> ',
        title: 'fa fa-area-chart'
      },
      {
        id: 29,
        text: '<span><i class="fa fa-arrow-circle-down"></i> fa fa-arrow-circle-down</span> ',
        html: '<span><i class="fa fa-arrow-circle-down"></i> fa fa-arrow-circle-down</span> ',
        title: 'fa fa-arrow-circle-down'
      },
      {
        id: 30,
        text: '<span><i class="fa fa-arrow-circle-left"></i> fa fa-arrow-circle-left</span> ',
        html: '<span><i class="fa fa-arrow-circle-left"></i> fa fa-arrow-circle-left</span> ',
        title: 'fa fa-arrow-circle-left'
      },
      {
        id: 31,
        text: '<span><i class="fa fa-arrow-circle-o-down"></i> fa fa-arrow-circle-o-down</span> ',
        html: '<span><i class="fa fa-arrow-circle-o-down"></i> fa fa-arrow-circle-o-down</span> ',
        title: 'fa fa-arrow-circle-o-down'
      },
      {
        id: 32,
        text: '<span><i class="fa fa-arrow-circle-o-left"></i> fa fa-arrow-circle-o-left</span> ',
        html: '<span><i class="fa fa-arrow-circle-o-left"></i> fa fa-arrow-circle-o-left</span> ',
        title: 'fa fa-arrow-circle-o-left'
      },
      {
        id: 33,
        text: '<span><i class="fa fa-arrow-circle-o-right"></i> fa fa-arrow-circle-o-right</span> ',
        html: '<span><i class="fa fa-arrow-circle-o-right"></i> fa fa-arrow-circle-o-right</span> ',
        title: 'fa fa-arrow-circle-o-right'
      },
      {
        id: 34,
        text: '<span><i class="fa fa-arrow-circle-o-up"></i> fa fa-arrow-circle-o-up</span> ',
        html: '<span><i class="fa fa-arrow-circle-o-up"></i> fa fa-arrow-circle-o-up</span> ',
        title: 'fa fa-arrow-circle-o-up'
      },
      {
        id: 35,
        text: '<span><i class="fa fa-arrow-circle-right"></i> fa fa-arrow-circle-right</span> ',
        html: '<span><i class="fa fa-arrow-circle-right"></i> fa fa-arrow-circle-right</span> ',
        title: 'fa fa-arrow-circle-right'
      },
      {
        id: 36,
        text: '<span><i class="fa fa-arrow-circle-up"></i> fa fa-arrow-circle-up</span> ',
        html: '<span><i class="fa fa-arrow-circle-up"></i> fa fa-arrow-circle-up</span> ',
        title: 'fa fa-arrow-circle-up'
      },
      {
        id: 37,
        text: '<span><i class="fa fa-arrow-down"></i> fa fa-arrow-down</span> ',
        html: '<span><i class="fa fa-arrow-down"></i> fa fa-arrow-down</span> ',
        title: 'fa fa-arrow-down'
      },
      {
        id: 38,
        text: '<span><i class="fa fa-arrow-left"></i> fa fa-arrow-left</span> ',
        html: '<span><i class="fa fa-arrow-left"></i> fa fa-arrow-left</span> ',
        title: 'fa fa-arrow-left'
      },
      {
        id: 39,
        text: '<span><i class="fa fa-arrow-right"></i> fa fa-arrow-right</span> ',
        html: '<span><i class="fa fa-arrow-right"></i> fa fa-arrow-right</span> ',
        title: 'fa fa-arrow-right'
      },
      {
        id: 40,
        text: '<span><i class="fa fa-arrow-up"></i> fa fa-arrow-up</span> ',
        html: '<span><i class="fa fa-arrow-up"></i> fa fa-arrow-up</span> ',
        title: 'fa fa-arrow-up'
      },
      {
        id: 41,
        text: '<span><i class="fa fa-arrows"></i> fa fa-arrows</span> ',
        html: '<span><i class="fa fa-arrows"></i> fa fa-arrows</span> ',
        title: 'fa fa-arrows'
      },
      {
        id: 42,
        text: '<span><i class="fa fa-arrows-alt"></i> fa fa-arrows-alt</span> ',
        html: '<span><i class="fa fa-arrows-alt"></i> fa fa-arrows-alt</span> ',
        title: 'fa fa-arrows-alt'
      },
      {
        id: 43,
        text: '<span><i class="fa fa-arrows-h"></i> fa fa-arrows-h</span> ',
        html: '<span><i class="fa fa-arrows-h"></i> fa fa-arrows-h</span> ',
        title: 'fa fa-arrows-h'
      },
      {
        id: 44,
        text: '<span><i class="fa fa-arrows-v"></i> fa fa-arrows-v</span> ',
        html: '<span><i class="fa fa-arrows-v"></i> fa fa-arrows-v</span> ',
        title: 'fa fa-arrows-v'
      },
      {
        id: 45,
        text: '<span><i class="fa fa-asl-interpreting"></i> fa fa-asl-interpreting</span> ',
        html: '<span><i class="fa fa-asl-interpreting"></i> fa fa-asl-interpreting</span> ',
        title: 'fa fa-asl-interpreting'
      },
      {
        id: 46,
        text: '<span><i class="fa fa-assistive-listening-systems"></i> fa fa-assistive-listening-systems</span> ',
        html: '<span><i class="fa fa-assistive-listening-systems"></i> fa fa-assistive-listening-systems</span> ',
        title: 'fa fa-assistive-listening-systems'
      },
      {
        id: 47,
        text: '<span><i class="fa fa-asterisk"></i> fa fa-asterisk</span> ',
        html: '<span><i class="fa fa-asterisk"></i> fa fa-asterisk</span> ',
        title: 'fa fa-asterisk'
      },
      {
        id: 48,
        text: '<span><i class="fa fa-at"></i> fa fa-at</span> ',
        html: '<span><i class="fa fa-at"></i> fa fa-at</span> ',
        title: 'fa fa-at'
      },
      {
        id: 49,
        text: '<span><i class="fa fa-audio-description"></i> fa fa-audio-description</span> ',
        html: '<span><i class="fa fa-audio-description"></i> fa fa-audio-description</span> ',
        title: 'fa fa-audio-description'
      },
      {
        id: 50,
        text: '<span><i class="fa fa-automobile"></i> fa fa-automobile</span> ',
        html: '<span><i class="fa fa-automobile"></i> fa fa-automobile</span> ',
        title: 'fa fa-automobile'
      },
      {
        id: 51,
        text: '<span><i class="fa fa-backward"></i> fa fa-backward</span> ',
        html: '<span><i class="fa fa-backward"></i> fa fa-backward</span> ',
        title: 'fa fa-backward'
      },
      {
        id: 52,
        text: '<span><i class="fa fa-balance-scale"></i> fa fa-balance-scale</span> ',
        html: '<span><i class="fa fa-balance-scale"></i> fa fa-balance-scale</span> ',
        title: 'fa fa-balance-scale'
      },
      {
        id: 53,
        text: '<span><i class="fa fa-ban"></i> fa fa-ban</span> ',
        html: '<span><i class="fa fa-ban"></i> fa fa-ban</span> ',
        title: 'fa fa-ban'
      },
      {
        id: 54,
        text: '<span><i class="fa fa-bandcamp"></i> fa fa-bandcamp</span> ',
        html: '<span><i class="fa fa-bandcamp"></i> fa fa-bandcamp</span> ',
        title: 'fa fa-bandcamp'
      },
      {
        id: 55,
        text: '<span><i class="fa fa-bank"></i> fa fa-bank</span> ',
        html: '<span><i class="fa fa-bank"></i> fa fa-bank</span> ',
        title: 'fa fa-bank'
      },
      {
        id: 56,
        text: '<span><i class="fa fa-bar-chart"></i> fa fa-bar-chart</span> ',
        html: '<span><i class="fa fa-bar-chart"></i> fa fa-bar-chart</span> ',
        title: 'fa fa-bar-chart'
      },
      {
        id: 57,
        text: '<span><i class="fa fa-bar-chart-o"></i> fa fa-bar-chart-o</span> ',
        html: '<span><i class="fa fa-bar-chart-o"></i> fa fa-bar-chart-o</span> ',
        title: 'fa fa-bar-chart-o'
      },
      {
        id: 58,
        text: '<span><i class="fa fa-barcode"></i> fa fa-barcode</span> ',
        html: '<span><i class="fa fa-barcode"></i> fa fa-barcode</span> ',
        title: 'fa fa-barcode'
      },
      {
        id: 59,
        text: '<span><i class="fa fa-bars"></i> fa fa-bars</span> ',
        html: '<span><i class="fa fa-bars"></i> fa fa-bars</span> ',
        title: 'fa fa-bars'
      },
      {
        id: 60,
        text: '<span><i class="fa fa-bath"></i> fa fa-bath</span> ',
        html: '<span><i class="fa fa-bath"></i> fa fa-bath</span> ',
        title: 'fa fa-bath'
      },
      {
        id: 61,
        text: '<span><i class="fa fa-bathtub"></i> fa fa-bathtub</span> ',
        html: '<span><i class="fa fa-bathtub"></i> fa fa-bathtub</span> ',
        title: 'fa fa-bathtub'
      },
      {
        id: 62,
        text: '<span><i class="fa fa-battery"></i> fa fa-battery</span> ',
        html: '<span><i class="fa fa-battery"></i> fa fa-battery</span> ',
        title: 'fa fa-battery'
      },
      {
        id: 63,
        text: '<span><i class="fa fa-battery-0"></i> fa fa-battery-0</span> ',
        html: '<span><i class="fa fa-battery-0"></i> fa fa-battery-0</span> ',
        title: 'fa fa-battery-0'
      },
      {
        id: 64,
        text: '<span><i class="fa fa-battery-1"></i> fa fa-battery-1</span> ',
        html: '<span><i class="fa fa-battery-1"></i> fa fa-battery-1</span> ',
        title: 'fa fa-battery-1'
      },
      {
        id: 65,
        text: '<span><i class="fa fa-battery-2"></i> fa fa-battery-2</span> ',
        html: '<span><i class="fa fa-battery-2"></i> fa fa-battery-2</span> ',
        title: 'fa fa-battery-2'
      },
      {
        id: 66,
        text: '<span><i class="fa fa-battery-3"></i> fa fa-battery-3</span> ',
        html: '<span><i class="fa fa-battery-3"></i> fa fa-battery-3</span> ',
        title: 'fa fa-battery-3'
      },
      {
        id: 67,
        text: '<span><i class="fa fa-battery-4"></i> fa fa-battery-4</span> ',
        html: '<span><i class="fa fa-battery-4"></i> fa fa-battery-4</span> ',
        title: 'fa fa-battery-4'
      },
      {
        id: 68,
        text: '<span><i class="fa fa-battery-empty"></i> fa fa-battery-empty</span> ',
        html: '<span><i class="fa fa-battery-empty"></i> fa fa-battery-empty</span> ',
        title: 'fa fa-battery-empty'
      },
      {
        id: 69,
        text: '<span><i class="fa fa-battery-full"></i> fa fa-battery-full</span> ',
        html: '<span><i class="fa fa-battery-full"></i> fa fa-battery-full</span> ',
        title: 'fa fa-battery-full'
      },
      {
        id: 70,
        text: '<span><i class="fa fa-battery-half"></i> fa fa-battery-half</span> ',
        html: '<span><i class="fa fa-battery-half"></i> fa fa-battery-half</span> ',
        title: 'fa fa-battery-half'
      },
      {
        id: 71,
        text: '<span><i class="fa fa-battery-quarter"></i> fa fa-battery-quarter</span> ',
        html: '<span><i class="fa fa-battery-quarter"></i> fa fa-battery-quarter</span> ',
        title: 'fa fa-battery-quarter'
      },
      {
        id: 72,
        text: '<span><i class="fa fa-battery-three-quarters"></i> fa fa-battery-three-quarters</span> ',
        html: '<span><i class="fa fa-battery-three-quarters"></i> fa fa-battery-three-quarters</span> ',
        title: 'fa fa-battery-three-quarters'
      },
      {
        id: 73,
        text: '<span><i class="fa fa-bed"></i> fa fa-bed</span> ',
        html: '<span><i class="fa fa-bed"></i> fa fa-bed</span> ',
        title: 'fa fa-bed'
      },
      {
        id: 74,
        text: '<span><i class="fa fa-beer"></i> fa fa-beer</span> ',
        html: '<span><i class="fa fa-beer"></i> fa fa-beer</span> ',
        title: 'fa fa-beer'
      },
      {
        id: 75,
        text: '<span><i class="fa fa-behance"></i> fa fa-behance</span> ',
        html: '<span><i class="fa fa-behance"></i> fa fa-behance</span> ',
        title: 'fa fa-behance'
      },
      {
        id: 76,
        text: '<span><i class="fa fa-behance-square"></i> fa fa-behance-square</span> ',
        html: '<span><i class="fa fa-behance-square"></i> fa fa-behance-square</span> ',
        title: 'fa fa-behance-square'
      },
      {
        id: 77,
        text: '<span><i class="fa fa-bell"></i> fa fa-bell</span> ',
        html: '<span><i class="fa fa-bell"></i> fa fa-bell</span> ',
        title: 'fa fa-bell'
      },
      {
        id: 78,
        text: '<span><i class="fa fa-bell-o"></i> fa fa-bell-o</span> ',
        html: '<span><i class="fa fa-bell-o"></i> fa fa-bell-o</span> ',
        title: 'fa fa-bell-o'
      },
      {
        id: 79,
        text: '<span><i class="fa fa-bell-slash"></i> fa fa-bell-slash</span> ',
        html: '<span><i class="fa fa-bell-slash"></i> fa fa-bell-slash</span> ',
        title: 'fa fa-bell-slash'
      },
      {
        id: 80,
        text: '<span><i class="fa fa-bell-slash-o"></i> fa fa-bell-slash-o</span> ',
        html: '<span><i class="fa fa-bell-slash-o"></i> fa fa-bell-slash-o</span> ',
        title: 'fa fa-bell-slash-o'
      },
      {
        id: 81,
        text: '<span><i class="fa fa-bicycle"></i> fa fa-bicycle</span> ',
        html: '<span><i class="fa fa-bicycle"></i> fa fa-bicycle</span> ',
        title: 'fa fa-bicycle'
      },
      {
        id: 82,
        text: '<span><i class="fa fa-binoculars"></i> fa fa-binoculars</span> ',
        html: '<span><i class="fa fa-binoculars"></i> fa fa-binoculars</span> ',
        title: 'fa fa-binoculars'
      },
      {
        id: 83,
        text: '<span><i class="fa fa-birthday-cake"></i> fa fa-birthday-cake</span> ',
        html: '<span><i class="fa fa-birthday-cake"></i> fa fa-birthday-cake</span> ',
        title: 'fa fa-birthday-cake'
      },
      {
        id: 84,
        text: '<span><i class="fa fa-bitbucket"></i> fa fa-bitbucket</span> ',
        html: '<span><i class="fa fa-bitbucket"></i> fa fa-bitbucket</span> ',
        title: 'fa fa-bitbucket'
      },
      {
        id: 85,
        text: '<span><i class="fa fa-bitbucket-square"></i> fa fa-bitbucket-square</span> ',
        html: '<span><i class="fa fa-bitbucket-square"></i> fa fa-bitbucket-square</span> ',
        title: 'fa fa-bitbucket-square'
      },
      {
        id: 86,
        text: '<span><i class="fa fa-bitcoin"></i> fa fa-bitcoin</span> ',
        html: '<span><i class="fa fa-bitcoin"></i> fa fa-bitcoin</span> ',
        title: 'fa fa-bitcoin'
      },
      {
        id: 87,
        text: '<span><i class="fa fa-black-tie"></i> fa fa-black-tie</span> ',
        html: '<span><i class="fa fa-black-tie"></i> fa fa-black-tie</span> ',
        title: 'fa fa-black-tie'
      },
      {
        id: 88,
        text: '<span><i class="fa fa-blind"></i> fa fa-blind</span> ',
        html: '<span><i class="fa fa-blind"></i> fa fa-blind</span> ',
        title: 'fa fa-blind'
      },
      {
        id: 89,
        text: '<span><i class="fa fa-bluetooth"></i> fa fa-bluetooth</span> ',
        html: '<span><i class="fa fa-bluetooth"></i> fa fa-bluetooth</span> ',
        title: 'fa fa-bluetooth'
      },
      {
        id: 90,
        text: '<span><i class="fa fa-bluetooth-b"></i> fa fa-bluetooth-b</span> ',
        html: '<span><i class="fa fa-bluetooth-b"></i> fa fa-bluetooth-b</span> ',
        title: 'fa fa-bluetooth-b'
      },
      {
        id: 91,
        text: '<span><i class="fa fa-bold"></i> fa fa-bold</span> ',
        html: '<span><i class="fa fa-bold"></i> fa fa-bold</span> ',
        title: 'fa fa-bold'
      },
      {
        id: 92,
        text: '<span><i class="fa fa-bolt"></i> fa fa-bolt</span> ',
        html: '<span><i class="fa fa-bolt"></i> fa fa-bolt</span> ',
        title: 'fa fa-bolt'
      },
      {
        id: 93,
        text: '<span><i class="fa fa-bomb"></i> fa fa-bomb</span> ',
        html: '<span><i class="fa fa-bomb"></i> fa fa-bomb</span> ',
        title: 'fa fa-bomb'
      },
      {
        id: 94,
        text: '<span><i class="fa fa-book"></i> fa fa-book</span> ',
        html: '<span><i class="fa fa-book"></i> fa fa-book</span> ',
        title: 'fa fa-book'
      },
      {
        id: 95,
        text: '<span><i class="fa fa-bookmark"></i> fa fa-bookmark</span> ',
        html: '<span><i class="fa fa-bookmark"></i> fa fa-bookmark</span> ',
        title: 'fa fa-bookmark'
      },
      {
        id: 96,
        text: '<span><i class="fa fa-bookmark-o"></i> fa fa-bookmark-o</span> ',
        html: '<span><i class="fa fa-bookmark-o"></i> fa fa-bookmark-o</span> ',
        title: 'fa fa-bookmark-o'
      },
      {
        id: 97,
        text: '<span><i class="fa fa-braille"></i> fa fa-braille</span> ',
        html: '<span><i class="fa fa-braille"></i> fa fa-braille</span> ',
        title: 'fa fa-braille'
      },
      {
        id: 98,
        text: '<span><i class="fa fa-briefcase"></i> fa fa-briefcase</span> ',
        html: '<span><i class="fa fa-briefcase"></i> fa fa-briefcase</span> ',
        title: 'fa fa-briefcase'
      },
      {
        id: 99,
        text: '<span><i class="fa fa-btc"></i> fa fa-btc</span> ',
        html: '<span><i class="fa fa-btc"></i> fa fa-btc</span> ',
        title: 'fa fa-btc'
      },
      {
        id: 100,
        text: '<span><i class="fa fa-bug"></i> fa fa-bug</span> ',
        html: '<span><i class="fa fa-bug"></i> fa fa-bug</span> ',
        title: 'fa fa-bug'
      },
      {
        id: 101,
        text: '<span><i class="fa fa-building"></i> fa fa-building</span> ',
        html: '<span><i class="fa fa-building"></i> fa fa-building</span> ',
        title: 'fa fa-building'
      },
      {
        id: 102,
        text: '<span><i class="fa fa-building-o"></i> fa fa-building-o</span> ',
        html: '<span><i class="fa fa-building-o"></i> fa fa-building-o</span> ',
        title: 'fa fa-building-o'
      },
      {
        id: 103,
        text: '<span><i class="fa fa-bullhorn"></i> fa fa-bullhorn</span> ',
        html: '<span><i class="fa fa-bullhorn"></i> fa fa-bullhorn</span> ',
        title: 'fa fa-bullhorn'
      },
      {
        id: 104,
        text: '<span><i class="fa fa-bullseye"></i> fa fa-bullseye</span> ',
        html: '<span><i class="fa fa-bullseye"></i> fa fa-bullseye</span> ',
        title: 'fa fa-bullseye'
      },
      {
        id: 105,
        text: '<span><i class="fa fa-bus"></i> fa fa-bus</span> ',
        html: '<span><i class="fa fa-bus"></i> fa fa-bus</span> ',
        title: 'fa fa-bus'
      },
      {
        id: 106,
        text: '<span><i class="fa fa-buysellads"></i> fa fa-buysellads</span> ',
        html: '<span><i class="fa fa-buysellads"></i> fa fa-buysellads</span> ',
        title: 'fa fa-buysellads'
      },
      {
        id: 107,
        text: '<span><i class="fa fa-cab"></i> fa fa-cab</span> ',
        html: '<span><i class="fa fa-cab"></i> fa fa-cab</span> ',
        title: 'fa fa-cab'
      },
      {
        id: 108,
        text: '<span><i class="fa fa-calculator"></i> fa fa-calculator</span> ',
        html: '<span><i class="fa fa-calculator"></i> fa fa-calculator</span> ',
        title: 'fa fa-calculator'
      },
      {
        id: 109,
        text: '<span><i class="fa fa-calendar"></i> fa fa-calendar</span> ',
        html: '<span><i class="fa fa-calendar"></i> fa fa-calendar</span> ',
        title: 'fa fa-calendar'
      },
      {
        id: 110,
        text: '<span><i class="fa fa-calendar-check-o"></i> fa fa-calendar-check-o</span> ',
        html: '<span><i class="fa fa-calendar-check-o"></i> fa fa-calendar-check-o</span> ',
        title: 'fa fa-calendar-check-o'
      },
      {
        id: 111,
        text: '<span><i class="fa fa-calendar-minus-o"></i> fa fa-calendar-minus-o</span> ',
        html: '<span><i class="fa fa-calendar-minus-o"></i> fa fa-calendar-minus-o</span> ',
        title: 'fa fa-calendar-minus-o'
      },
      {
        id: 112,
        text: '<span><i class="fa fa-calendar-o"></i> fa fa-calendar-o</span> ',
        html: '<span><i class="fa fa-calendar-o"></i> fa fa-calendar-o</span> ',
        title: 'fa fa-calendar-o'
      },
      {
        id: 113,
        text: '<span><i class="fa fa-calendar-plus-o"></i> fa fa-calendar-plus-o</span> ',
        html: '<span><i class="fa fa-calendar-plus-o"></i> fa fa-calendar-plus-o</span> ',
        title: 'fa fa-calendar-plus-o'
      },
      {
        id: 114,
        text: '<span><i class="fa fa-calendar-times-o"></i> fa fa-calendar-times-o</span> ',
        html: '<span><i class="fa fa-calendar-times-o"></i> fa fa-calendar-times-o</span> ',
        title: 'fa fa-calendar-times-o'
      },
      {
        id: 115,
        text: '<span><i class="fa fa-camera"></i> fa fa-camera</span> ',
        html: '<span><i class="fa fa-camera"></i> fa fa-camera</span> ',
        title: 'fa fa-camera'
      },
      {
        id: 116,
        text: '<span><i class="fa fa-camera-retro"></i> fa fa-camera-retro</span> ',
        html: '<span><i class="fa fa-camera-retro"></i> fa fa-camera-retro</span> ',
        title: 'fa fa-camera-retro'
      },
      {
        id: 117,
        text: '<span><i class="fa fa-car"></i> fa fa-car</span> ',
        html: '<span><i class="fa fa-car"></i> fa fa-car</span> ',
        title: 'fa fa-car'
      },
      {
        id: 118,
        text: '<span><i class="fa fa-caret-down"></i> fa fa-caret-down</span> ',
        html: '<span><i class="fa fa-caret-down"></i> fa fa-caret-down</span> ',
        title: 'fa fa-caret-down'
      },
      {
        id: 119,
        text: '<span><i class="fa fa-caret-left"></i> fa fa-caret-left</span> ',
        html: '<span><i class="fa fa-caret-left"></i> fa fa-caret-left</span> ',
        title: 'fa fa-caret-left'
      },
      {
        id: 120,
        text: '<span><i class="fa fa-caret-right"></i> fa fa-caret-right</span> ',
        html: '<span><i class="fa fa-caret-right"></i> fa fa-caret-right</span> ',
        title: 'fa fa-caret-right'
      },
      {
        id: 121,
        text: '<span><i class="fa fa-caret-square-o-down"></i> fa fa-caret-square-o-down</span> ',
        html: '<span><i class="fa fa-caret-square-o-down"></i> fa fa-caret-square-o-down</span> ',
        title: 'fa fa-caret-square-o-down'
      },
      {
        id: 122,
        text: '<span><i class="fa fa-caret-square-o-left"></i> fa fa-caret-square-o-left</span> ',
        html: '<span><i class="fa fa-caret-square-o-left"></i> fa fa-caret-square-o-left</span> ',
        title: 'fa fa-caret-square-o-left'
      },
      {
        id: 123,
        text: '<span><i class="fa fa-caret-square-o-right"></i> fa fa-caret-square-o-right</span> ',
        html: '<span><i class="fa fa-caret-square-o-right"></i> fa fa-caret-square-o-right</span> ',
        title: 'fa fa-caret-square-o-right'
      },
      {
        id: 124,
        text: '<span><i class="fa fa-caret-square-o-up"></i> fa fa-caret-square-o-up</span> ',
        html: '<span><i class="fa fa-caret-square-o-up"></i> fa fa-caret-square-o-up</span> ',
        title: 'fa fa-caret-square-o-up'
      },
      {
        id: 125,
        text: '<span><i class="fa fa-caret-up"></i> fa fa-caret-up</span> ',
        html: '<span><i class="fa fa-caret-up"></i> fa fa-caret-up</span> ',
        title: 'fa fa-caret-up'
      },
      {
        id: 126,
        text: '<span><i class="fa fa-cart-arrow-down"></i> fa fa-cart-arrow-down</span> ',
        html: '<span><i class="fa fa-cart-arrow-down"></i> fa fa-cart-arrow-down</span> ',
        title: 'fa fa-cart-arrow-down'
      },
      {
        id: 127,
        text: '<span><i class="fa fa-cart-plus"></i> fa fa-cart-plus</span> ',
        html: '<span><i class="fa fa-cart-plus"></i> fa fa-cart-plus</span> ',
        title: 'fa fa-cart-plus'
      },
      {
        id: 128,
        text: '<span><i class="fa fa-cc"></i> fa fa-cc</span> ',
        html: '<span><i class="fa fa-cc"></i> fa fa-cc</span> ',
        title: 'fa fa-cc'
      },
      {
        id: 129,
        text: '<span><i class="fa fa-cc-amex"></i> fa fa-cc-amex</span> ',
        html: '<span><i class="fa fa-cc-amex"></i> fa fa-cc-amex</span> ',
        title: 'fa fa-cc-amex'
      },
      {
        id: 130,
        text: '<span><i class="fa fa-cc-diners-club"></i> fa fa-cc-diners-club</span> ',
        html: '<span><i class="fa fa-cc-diners-club"></i> fa fa-cc-diners-club</span> ',
        title: 'fa fa-cc-diners-club'
      },
      {
        id: 131,
        text: '<span><i class="fa fa-cc-discover"></i> fa fa-cc-discover</span> ',
        html: '<span><i class="fa fa-cc-discover"></i> fa fa-cc-discover</span> ',
        title: 'fa fa-cc-discover'
      },
      {
        id: 132,
        text: '<span><i class="fa fa-cc-jcb"></i> fa fa-cc-jcb</span> ',
        html: '<span><i class="fa fa-cc-jcb"></i> fa fa-cc-jcb</span> ',
        title: 'fa fa-cc-jcb'
      },
      {
        id: 133,
        text: '<span><i class="fa fa-cc-mastercard"></i> fa fa-cc-mastercard</span> ',
        html: '<span><i class="fa fa-cc-mastercard"></i> fa fa-cc-mastercard</span> ',
        title: 'fa fa-cc-mastercard'
      },
      {
        id: 134,
        text: '<span><i class="fa fa-cc-paypal"></i> fa fa-cc-paypal</span> ',
        html: '<span><i class="fa fa-cc-paypal"></i> fa fa-cc-paypal</span> ',
        title: 'fa fa-cc-paypal'
      },
      {
        id: 135,
        text: '<span><i class="fa fa-cc-stripe"></i> fa fa-cc-stripe</span> ',
        html: '<span><i class="fa fa-cc-stripe"></i> fa fa-cc-stripe</span> ',
        title: 'fa fa-cc-stripe'
      },
      {
        id: 136,
        text: '<span><i class="fa fa-cc-visa"></i> fa fa-cc-visa</span> ',
        html: '<span><i class="fa fa-cc-visa"></i> fa fa-cc-visa</span> ',
        title: 'fa fa-cc-visa'
      },
      {
        id: 137,
        text: '<span><i class="fa fa-certificate"></i> fa fa-certificate</span> ',
        html: '<span><i class="fa fa-certificate"></i> fa fa-certificate</span> ',
        title: 'fa fa-certificate'
      },
      {
        id: 138,
        text: '<span><i class="fa fa-chain"></i> fa fa-chain</span> ',
        html: '<span><i class="fa fa-chain"></i> fa fa-chain</span> ',
        title: 'fa fa-chain'
      },
      {
        id: 139,
        text: '<span><i class="fa fa-chain-broken"></i> fa fa-chain-broken</span> ',
        html: '<span><i class="fa fa-chain-broken"></i> fa fa-chain-broken</span> ',
        title: 'fa fa-chain-broken'
      },
      {
        id: 140,
        text: '<span><i class="fa fa-check"></i> fa fa-check</span> ',
        html: '<span><i class="fa fa-check"></i> fa fa-check</span> ',
        title: 'fa fa-check'
      },
      {
        id: 141,
        text: '<span><i class="fa fa-check-circle"></i> fa fa-check-circle</span> ',
        html: '<span><i class="fa fa-check-circle"></i> fa fa-check-circle</span> ',
        title: 'fa fa-check-circle'
      },
      {
        id: 142,
        text: '<span><i class="fa fa-check-circle-o"></i> fa fa-check-circle-o</span> ',
        html: '<span><i class="fa fa-check-circle-o"></i> fa fa-check-circle-o</span> ',
        title: 'fa fa-check-circle-o'
      },
      {
        id: 143,
        text: '<span><i class="fa fa-check-square"></i> fa fa-check-square</span> ',
        html: '<span><i class="fa fa-check-square"></i> fa fa-check-square</span> ',
        title: 'fa fa-check-square'
      },
      {
        id: 144,
        text: '<span><i class="fa fa-check-square-o"></i> fa fa-check-square-o</span> ',
        html: '<span><i class="fa fa-check-square-o"></i> fa fa-check-square-o</span> ',
        title: 'fa fa-check-square-o'
      },
      {
        id: 145,
        text: '<span><i class="fa fa-chevron-circle-down"></i> fa fa-chevron-circle-down</span> ',
        html: '<span><i class="fa fa-chevron-circle-down"></i> fa fa-chevron-circle-down</span> ',
        title: 'fa fa-chevron-circle-down'
      },
      {
        id: 146,
        text: '<span><i class="fa fa-chevron-circle-left"></i> fa fa-chevron-circle-left</span> ',
        html: '<span><i class="fa fa-chevron-circle-left"></i> fa fa-chevron-circle-left</span> ',
        title: 'fa fa-chevron-circle-left'
      },
      {
        id: 147,
        text: '<span><i class="fa fa-chevron-circle-right"></i> fa fa-chevron-circle-right</span> ',
        html: '<span><i class="fa fa-chevron-circle-right"></i> fa fa-chevron-circle-right</span> ',
        title: 'fa fa-chevron-circle-right'
      },
      {
        id: 148,
        text: '<span><i class="fa fa-chevron-circle-up"></i> fa fa-chevron-circle-up</span> ',
        html: '<span><i class="fa fa-chevron-circle-up"></i> fa fa-chevron-circle-up</span> ',
        title: 'fa fa-chevron-circle-up'
      },
      {
        id: 149,
        text: '<span><i class="fa fa-chevron-down"></i> fa fa-chevron-down</span> ',
        html: '<span><i class="fa fa-chevron-down"></i> fa fa-chevron-down</span> ',
        title: 'fa fa-chevron-down'
      },
      {
        id: 150,
        text: '<span><i class="fa fa-chevron-left"></i> fa fa-chevron-left</span> ',
        html: '<span><i class="fa fa-chevron-left"></i> fa fa-chevron-left</span> ',
        title: 'fa fa-chevron-left'
      },
      {
        id: 151,
        text: '<span><i class="fa fa-chevron-right"></i> fa fa-chevron-right</span> ',
        html: '<span><i class="fa fa-chevron-right"></i> fa fa-chevron-right</span> ',
        title: 'fa fa-chevron-right'
      },
      {
        id: 152,
        text: '<span><i class="fa fa-chevron-up"></i> fa fa-chevron-up</span> ',
        html: '<span><i class="fa fa-chevron-up"></i> fa fa-chevron-up</span> ',
        title: 'fa fa-chevron-up'
      },
      {
        id: 153,
        text: '<span><i class="fa fa-child"></i> fa fa-child</span> ',
        html: '<span><i class="fa fa-child"></i> fa fa-child</span> ',
        title: 'fa fa-child'
      },
      {
        id: 154,
        text: '<span><i class="fa fa-chrome"></i> fa fa-chrome</span> ',
        html: '<span><i class="fa fa-chrome"></i> fa fa-chrome</span> ',
        title: 'fa fa-chrome'
      },
      {
        id: 155,
        text: '<span><i class="fa fa-circle"></i> fa fa-circle</span> ',
        html: '<span><i class="fa fa-circle"></i> fa fa-circle</span> ',
        title: 'fa fa-circle'
      },
      {
        id: 156,
        text: '<span><i class="fa fa-circle-o"></i> fa fa-circle-o</span> ',
        html: '<span><i class="fa fa-circle-o"></i> fa fa-circle-o</span> ',
        title: 'fa fa-circle-o'
      },
      {
        id: 157,
        text: '<span><i class="fa fa-circle-o-notch"></i> fa fa-circle-o-notch</span> ',
        html: '<span><i class="fa fa-circle-o-notch"></i> fa fa-circle-o-notch</span> ',
        title: 'fa fa-circle-o-notch'
      },
      {
        id: 158,
        text: '<span><i class="fa fa-circle-thin"></i> fa fa-circle-thin</span> ',
        html: '<span><i class="fa fa-circle-thin"></i> fa fa-circle-thin</span> ',
        title: 'fa fa-circle-thin'
      },
      {
        id: 159,
        text: '<span><i class="fa fa-clipboard"></i> fa fa-clipboard</span> ',
        html: '<span><i class="fa fa-clipboard"></i> fa fa-clipboard</span> ',
        title: 'fa fa-clipboard'
      },
      {
        id: 160,
        text: '<span><i class="fa fa-clock-o"></i> fa fa-clock-o</span> ',
        html: '<span><i class="fa fa-clock-o"></i> fa fa-clock-o</span> ',
        title: 'fa fa-clock-o'
      },
      {
        id: 161,
        text: '<span><i class="fa fa-clone"></i> fa fa-clone</span> ',
        html: '<span><i class="fa fa-clone"></i> fa fa-clone</span> ',
        title: 'fa fa-clone'
      },
      {
        id: 162,
        text: '<span><i class="fa fa-close"></i> fa fa-close</span> ',
        html: '<span><i class="fa fa-close"></i> fa fa-close</span> ',
        title: 'fa fa-close'
      },
      {
        id: 163,
        text: '<span><i class="fa fa-cloud"></i> fa fa-cloud</span> ',
        html: '<span><i class="fa fa-cloud"></i> fa fa-cloud</span> ',
        title: 'fa fa-cloud'
      },
      {
        id: 164,
        text: '<span><i class="fa fa-cloud-download"></i> fa fa-cloud-download</span> ',
        html: '<span><i class="fa fa-cloud-download"></i> fa fa-cloud-download</span> ',
        title: 'fa fa-cloud-download'
      },
      {
        id: 165,
        text: '<span><i class="fa fa-cloud-upload"></i> fa fa-cloud-upload</span> ',
        html: '<span><i class="fa fa-cloud-upload"></i> fa fa-cloud-upload</span> ',
        title: 'fa fa-cloud-upload'
      },
      {
        id: 166,
        text: '<span><i class="fa fa-cny"></i> fa fa-cny</span> ',
        html: '<span><i class="fa fa-cny"></i> fa fa-cny</span> ',
        title: 'fa fa-cny'
      },
      {
        id: 167,
        text: '<span><i class="fa fa-code"></i> fa fa-code</span> ',
        html: '<span><i class="fa fa-code"></i> fa fa-code</span> ',
        title: 'fa fa-code'
      },
      {
        id: 168,
        text: '<span><i class="fa fa-code-fork"></i> fa fa-code-fork</span> ',
        html: '<span><i class="fa fa-code-fork"></i> fa fa-code-fork</span> ',
        title: 'fa fa-code-fork'
      },
      {
        id: 169,
        text: '<span><i class="fa fa-codepen"></i> fa fa-codepen</span> ',
        html: '<span><i class="fa fa-codepen"></i> fa fa-codepen</span> ',
        title: 'fa fa-codepen'
      },
      {
        id: 170,
        text: '<span><i class="fa fa-codiepie"></i> fa fa-codiepie</span> ',
        html: '<span><i class="fa fa-codiepie"></i> fa fa-codiepie</span> ',
        title: 'fa fa-codiepie'
      },
      {
        id: 171,
        text: '<span><i class="fa fa-coffee"></i> fa fa-coffee</span> ',
        html: '<span><i class="fa fa-coffee"></i> fa fa-coffee</span> ',
        title: 'fa fa-coffee'
      },
      {
        id: 172,
        text: '<span><i class="fa fa-cog"></i> fa fa-cog</span> ',
        html: '<span><i class="fa fa-cog"></i> fa fa-cog</span> ',
        title: 'fa fa-cog'
      },
      {
        id: 173,
        text: '<span><i class="fa fa-cogs"></i> fa fa-cogs</span> ',
        html: '<span><i class="fa fa-cogs"></i> fa fa-cogs</span> ',
        title: 'fa fa-cogs'
      },
      {
        id: 174,
        text: '<span><i class="fa fa-columns"></i> fa fa-columns</span> ',
        html: '<span><i class="fa fa-columns"></i> fa fa-columns</span> ',
        title: 'fa fa-columns'
      },
      {
        id: 175,
        text: '<span><i class="fa fa-comment"></i> fa fa-comment</span> ',
        html: '<span><i class="fa fa-comment"></i> fa fa-comment</span> ',
        title: 'fa fa-comment'
      },
      {
        id: 176,
        text: '<span><i class="fa fa-comment-o"></i> fa fa-comment-o</span> ',
        html: '<span><i class="fa fa-comment-o"></i> fa fa-comment-o</span> ',
        title: 'fa fa-comment-o'
      },
      {
        id: 177,
        text: '<span><i class="fa fa-commenting"></i> fa fa-commenting</span> ',
        html: '<span><i class="fa fa-commenting"></i> fa fa-commenting</span> ',
        title: 'fa fa-commenting'
      },
      {
        id: 178,
        text: '<span><i class="fa fa-commenting-o"></i> fa fa-commenting-o</span> ',
        html: '<span><i class="fa fa-commenting-o"></i> fa fa-commenting-o</span> ',
        title: 'fa fa-commenting-o'
      },
      {
        id: 179,
        text: '<span><i class="fa fa-comments"></i> fa fa-comments</span> ',
        html: '<span><i class="fa fa-comments"></i> fa fa-comments</span> ',
        title: 'fa fa-comments'
      },
      {
        id: 180,
        text: '<span><i class="fa fa-comments-o"></i> fa fa-comments-o</span> ',
        html: '<span><i class="fa fa-comments-o"></i> fa fa-comments-o</span> ',
        title: 'fa fa-comments-o'
      },
      {
        id: 181,
        text: '<span><i class="fa fa-compass"></i> fa fa-compass</span> ',
        html: '<span><i class="fa fa-compass"></i> fa fa-compass</span> ',
        title: 'fa fa-compass'
      },
      {
        id: 182,
        text: '<span><i class="fa fa-compress"></i> fa fa-compress</span> ',
        html: '<span><i class="fa fa-compress"></i> fa fa-compress</span> ',
        title: 'fa fa-compress'
      },
      {
        id: 183,
        text: '<span><i class="fa fa-connectdevelop"></i> fa fa-connectdevelop</span> ',
        html: '<span><i class="fa fa-connectdevelop"></i> fa fa-connectdevelop</span> ',
        title: 'fa fa-connectdevelop'
      },
      {
        id: 184,
        text: '<span><i class="fa fa-contao"></i> fa fa-contao</span> ',
        html: '<span><i class="fa fa-contao"></i> fa fa-contao</span> ',
        title: 'fa fa-contao'
      },
      {
        id: 185,
        text: '<span><i class="fa fa-copy"></i> fa fa-copy</span> ',
        html: '<span><i class="fa fa-copy"></i> fa fa-copy</span> ',
        title: 'fa fa-copy'
      },
      {
        id: 186,
        text: '<span><i class="fa fa-copyright"></i> fa fa-copyright</span> ',
        html: '<span><i class="fa fa-copyright"></i> fa fa-copyright</span> ',
        title: 'fa fa-copyright'
      },
      {
        id: 187,
        text: '<span><i class="fa fa-creative-commons"></i> fa fa-creative-commons</span> ',
        html: '<span><i class="fa fa-creative-commons"></i> fa fa-creative-commons</span> ',
        title: 'fa fa-creative-commons'
      },
      {
        id: 188,
        text: '<span><i class="fa fa-credit-card"></i> fa fa-credit-card</span> ',
        html: '<span><i class="fa fa-credit-card"></i> fa fa-credit-card</span> ',
        title: 'fa fa-credit-card'
      },
      {
        id: 189,
        text: '<span><i class="fa fa-credit-card-alt"></i> fa fa-credit-card-alt</span> ',
        html: '<span><i class="fa fa-credit-card-alt"></i> fa fa-credit-card-alt</span> ',
        title: 'fa fa-credit-card-alt'
      },
      {
        id: 190,
        text: '<span><i class="fa fa-crop"></i> fa fa-crop</span> ',
        html: '<span><i class="fa fa-crop"></i> fa fa-crop</span> ',
        title: 'fa fa-crop'
      },
      {
        id: 191,
        text: '<span><i class="fa fa-crosshairs"></i> fa fa-crosshairs</span> ',
        html: '<span><i class="fa fa-crosshairs"></i> fa fa-crosshairs</span> ',
        title: 'fa fa-crosshairs'
      },
      {
        id: 192,
        text: '<span><i class="fa fa-css3"></i> fa fa-css3</span> ',
        html: '<span><i class="fa fa-css3"></i> fa fa-css3</span> ',
        title: 'fa fa-css3'
      },
      {
        id: 193,
        text: '<span><i class="fa fa-cube"></i> fa fa-cube</span> ',
        html: '<span><i class="fa fa-cube"></i> fa fa-cube</span> ',
        title: 'fa fa-cube'
      },
      {
        id: 194,
        text: '<span><i class="fa fa-cubes"></i> fa fa-cubes</span> ',
        html: '<span><i class="fa fa-cubes"></i> fa fa-cubes</span> ',
        title: 'fa fa-cubes'
      },
      {
        id: 195,
        text: '<span><i class="fa fa-cut"></i> fa fa-cut</span> ',
        html: '<span><i class="fa fa-cut"></i> fa fa-cut</span> ',
        title: 'fa fa-cut'
      },
      {
        id: 196,
        text: '<span><i class="fa fa-cutlery"></i> fa fa-cutlery</span> ',
        html: '<span><i class="fa fa-cutlery"></i> fa fa-cutlery</span> ',
        title: 'fa fa-cutlery'
      },
      {
        id: 197,
        text: '<span><i class="fa fa-dashboard"></i> fa fa-dashboard</span> ',
        html: '<span><i class="fa fa-dashboard"></i> fa fa-dashboard</span> ',
        title: 'fa fa-dashboard'
      },
      {
        id: 198,
        text: '<span><i class="fa fa-dashcube"></i> fa fa-dashcube</span> ',
        html: '<span><i class="fa fa-dashcube"></i> fa fa-dashcube</span> ',
        title: 'fa fa-dashcube'
      },
      {
        id: 199,
        text: '<span><i class="fa fa-database"></i> fa fa-database</span> ',
        html: '<span><i class="fa fa-database"></i> fa fa-database</span> ',
        title: 'fa fa-database'
      },
      {
        id: 200,
        text: '<span><i class="fa fa-deaf"></i> fa fa-deaf</span> ',
        html: '<span><i class="fa fa-deaf"></i> fa fa-deaf</span> ',
        title: 'fa fa-deaf'
      },
      {
        id: 201,
        text: '<span><i class="fa fa-deafness"></i> fa fa-deafness</span> ',
        html: '<span><i class="fa fa-deafness"></i> fa fa-deafness</span> ',
        title: 'fa fa-deafness'
      },
      {
        id: 202,
        text: '<span><i class="fa fa-dedent"></i> fa fa-dedent</span> ',
        html: '<span><i class="fa fa-dedent"></i> fa fa-dedent</span> ',
        title: 'fa fa-dedent'
      },
      {
        id: 203,
        text: '<span><i class="fa fa-delicious"></i> fa fa-delicious</span> ',
        html: '<span><i class="fa fa-delicious"></i> fa fa-delicious</span> ',
        title: 'fa fa-delicious'
      },
      {
        id: 204,
        text: '<span><i class="fa fa-desktop"></i> fa fa-desktop</span> ',
        html: '<span><i class="fa fa-desktop"></i> fa fa-desktop</span> ',
        title: 'fa fa-desktop'
      },
      {
        id: 205,
        text: '<span><i class="fa fa-deviantart"></i> fa fa-deviantart</span> ',
        html: '<span><i class="fa fa-deviantart"></i> fa fa-deviantart</span> ',
        title: 'fa fa-deviantart'
      },
      {
        id: 206,
        text: '<span><i class="fa fa-diamond"></i> fa fa-diamond</span> ',
        html: '<span><i class="fa fa-diamond"></i> fa fa-diamond</span> ',
        title: 'fa fa-diamond'
      },
      {
        id: 207,
        text: '<span><i class="fa fa-digg"></i> fa fa-digg</span> ',
        html: '<span><i class="fa fa-digg"></i> fa fa-digg</span> ',
        title: 'fa fa-digg'
      },
      {
        id: 208,
        text: '<span><i class="fa fa-dollar"></i> fa fa-dollar</span> ',
        html: '<span><i class="fa fa-dollar"></i> fa fa-dollar</span> ',
        title: 'fa fa-dollar'
      },
      {
        id: 209,
        text: '<span><i class="fa fa-dot-circle-o"></i> fa fa-dot-circle-o</span> ',
        html: '<span><i class="fa fa-dot-circle-o"></i> fa fa-dot-circle-o</span> ',
        title: 'fa fa-dot-circle-o'
      },
      {
        id: 210,
        text: '<span><i class="fa fa-download"></i> fa fa-download</span> ',
        html: '<span><i class="fa fa-download"></i> fa fa-download</span> ',
        title: 'fa fa-download'
      },
      {
        id: 211,
        text: '<span><i class="fa fa-dribbble"></i> fa fa-dribbble</span> ',
        html: '<span><i class="fa fa-dribbble"></i> fa fa-dribbble</span> ',
        title: 'fa fa-dribbble'
      },
      {
        id: 212,
        text: '<span><i class="fa fa-drivers-license"></i> fa fa-drivers-license</span> ',
        html: '<span><i class="fa fa-drivers-license"></i> fa fa-drivers-license</span> ',
        title: 'fa fa-drivers-license'
      },
      {
        id: 213,
        text: '<span><i class="fa fa-drivers-license-o"></i> fa fa-drivers-license-o</span> ',
        html: '<span><i class="fa fa-drivers-license-o"></i> fa fa-drivers-license-o</span> ',
        title: 'fa fa-drivers-license-o'
      },
      {
        id: 214,
        text: '<span><i class="fa fa-dropbox"></i> fa fa-dropbox</span> ',
        html: '<span><i class="fa fa-dropbox"></i> fa fa-dropbox</span> ',
        title: 'fa fa-dropbox'
      },
      {
        id: 215,
        text: '<span><i class="fa fa-drupal"></i> fa fa-drupal</span> ',
        html: '<span><i class="fa fa-drupal"></i> fa fa-drupal</span> ',
        title: 'fa fa-drupal'
      },
      {
        id: 216,
        text: '<span><i class="fa fa-edge"></i> fa fa-edge</span> ',
        html: '<span><i class="fa fa-edge"></i> fa fa-edge</span> ',
        title: 'fa fa-edge'
      },
      {
        id: 217,
        text: '<span><i class="fa fa-edit"></i> fa fa-edit</span> ',
        html: '<span><i class="fa fa-edit"></i> fa fa-edit</span> ',
        title: 'fa fa-edit'
      },
      {
        id: 218,
        text: '<span><i class="fa fa-eercast"></i> fa fa-eercast</span> ',
        html: '<span><i class="fa fa-eercast"></i> fa fa-eercast</span> ',
        title: 'fa fa-eercast'
      },
      {
        id: 219,
        text: '<span><i class="fa fa-eject"></i> fa fa-eject</span> ',
        html: '<span><i class="fa fa-eject"></i> fa fa-eject</span> ',
        title: 'fa fa-eject'
      },
      {
        id: 220,
        text: '<span><i class="fa fa-ellipsis-h"></i> fa fa-ellipsis-h</span> ',
        html: '<span><i class="fa fa-ellipsis-h"></i> fa fa-ellipsis-h</span> ',
        title: 'fa fa-ellipsis-h'
      },
      {
        id: 221,
        text: '<span><i class="fa fa-ellipsis-v"></i> fa fa-ellipsis-v</span> ',
        html: '<span><i class="fa fa-ellipsis-v"></i> fa fa-ellipsis-v</span> ',
        title: 'fa fa-ellipsis-v'
      },
      {
        id: 222,
        text: '<span><i class="fa fa-empire"></i> fa fa-empire</span> ',
        html: '<span><i class="fa fa-empire"></i> fa fa-empire</span> ',
        title: 'fa fa-empire'
      },
      {
        id: 223,
        text: '<span><i class="fa fa-envelope"></i> fa fa-envelope</span> ',
        html: '<span><i class="fa fa-envelope"></i> fa fa-envelope</span> ',
        title: 'fa fa-envelope'
      },
      {
        id: 224,
        text: '<span><i class="fa fa-envelope-o"></i> fa fa-envelope-o</span> ',
        html: '<span><i class="fa fa-envelope-o"></i> fa fa-envelope-o</span> ',
        title: 'fa fa-envelope-o'
      },
      {
        id: 225,
        text: '<span><i class="fa fa-envelope-open"></i> fa fa-envelope-open</span> ',
        html: '<span><i class="fa fa-envelope-open"></i> fa fa-envelope-open</span> ',
        title: 'fa fa-envelope-open'
      },
      {
        id: 226,
        text: '<span><i class="fa fa-envelope-open-o"></i> fa fa-envelope-open-o</span> ',
        html: '<span><i class="fa fa-envelope-open-o"></i> fa fa-envelope-open-o</span> ',
        title: 'fa fa-envelope-open-o'
      },
      {
        id: 227,
        text: '<span><i class="fa fa-envelope-square"></i> fa fa-envelope-square</span> ',
        html: '<span><i class="fa fa-envelope-square"></i> fa fa-envelope-square</span> ',
        title: 'fa fa-envelope-square'
      },
      {
        id: 228,
        text: '<span><i class="fa fa-envira"></i> fa fa-envira</span> ',
        html: '<span><i class="fa fa-envira"></i> fa fa-envira</span> ',
        title: 'fa fa-envira'
      },
      {
        id: 229,
        text: '<span><i class="fa fa-eraser"></i> fa fa-eraser</span> ',
        html: '<span><i class="fa fa-eraser"></i> fa fa-eraser</span> ',
        title: 'fa fa-eraser'
      },
      {
        id: 230,
        text: '<span><i class="fa fa-etsy"></i> fa fa-etsy</span> ',
        html: '<span><i class="fa fa-etsy"></i> fa fa-etsy</span> ',
        title: 'fa fa-etsy'
      },
      {
        id: 231,
        text: '<span><i class="fa fa-eur"></i> fa fa-eur</span> ',
        html: '<span><i class="fa fa-eur"></i> fa fa-eur</span> ',
        title: 'fa fa-eur'
      },
      {
        id: 232,
        text: '<span><i class="fa fa-euro"></i> fa fa-euro</span> ',
        html: '<span><i class="fa fa-euro"></i> fa fa-euro</span> ',
        title: 'fa fa-euro'
      },
      {
        id: 233,
        text: '<span><i class="fa fa-exchange"></i> fa fa-exchange</span> ',
        html: '<span><i class="fa fa-exchange"></i> fa fa-exchange</span> ',
        title: 'fa fa-exchange'
      },
      {
        id: 234,
        text: '<span><i class="fa fa-exclamation"></i> fa fa-exclamation</span> ',
        html: '<span><i class="fa fa-exclamation"></i> fa fa-exclamation</span> ',
        title: 'fa fa-exclamation'
      },
      {
        id: 235,
        text: '<span><i class="fa fa-exclamation-circle"></i> fa fa-exclamation-circle</span> ',
        html: '<span><i class="fa fa-exclamation-circle"></i> fa fa-exclamation-circle</span> ',
        title: 'fa fa-exclamation-circle'
      },
      {
        id: 236,
        text: '<span><i class="fa fa-exclamation-triangle"></i> fa fa-exclamation-triangle</span> ',
        html: '<span><i class="fa fa-exclamation-triangle"></i> fa fa-exclamation-triangle</span> ',
        title: 'fa fa-exclamation-triangle'
      },
      {
        id: 237,
        text: '<span><i class="fa fa-expand"></i> fa fa-expand</span> ',
        html: '<span><i class="fa fa-expand"></i> fa fa-expand</span> ',
        title: 'fa fa-expand'
      },
      {
        id: 238,
        text: '<span><i class="fa fa-expeditedssl"></i> fa fa-expeditedssl</span> ',
        html: '<span><i class="fa fa-expeditedssl"></i> fa fa-expeditedssl</span> ',
        title: 'fa fa-expeditedssl'
      },
      {
        id: 239,
        text: '<span><i class="fa fa-external-link"></i> fa fa-external-link</span> ',
        html: '<span><i class="fa fa-external-link"></i> fa fa-external-link</span> ',
        title: 'fa fa-external-link'
      },
      {
        id: 240,
        text: '<span><i class="fa fa-external-link-square"></i> fa fa-external-link-square</span> ',
        html: '<span><i class="fa fa-external-link-square"></i> fa fa-external-link-square</span> ',
        title: 'fa fa-external-link-square'
      },
      {
        id: 241,
        text: '<span><i class="fa fa-eye"></i> fa fa-eye</span> ',
        html: '<span><i class="fa fa-eye"></i> fa fa-eye</span> ',
        title: 'fa fa-eye'
      },
      {
        id: 242,
        text: '<span><i class="fa fa-eye-slash"></i> fa fa-eye-slash</span> ',
        html: '<span><i class="fa fa-eye-slash"></i> fa fa-eye-slash</span> ',
        title: 'fa fa-eye-slash'
      },
      {
        id: 243,
        text: '<span><i class="fa fa-eyedropper"></i> fa fa-eyedropper</span> ',
        html: '<span><i class="fa fa-eyedropper"></i> fa fa-eyedropper</span> ',
        title: 'fa fa-eyedropper'
      },
      {
        id: 244,
        text: '<span><i class="fa fa-fa"></i> fa fa-fa</span> ',
        html: '<span><i class="fa fa-fa"></i> fa fa-fa</span> ',
        title: 'fa fa-fa'
      },
      {
        id: 245,
        text: '<span><i class="fa fa-facebook"></i> fa fa-facebook</span> ',
        html: '<span><i class="fa fa-facebook"></i> fa fa-facebook</span> ',
        title: 'fa fa-facebook'
      },
      {
        id: 246,
        text: '<span><i class="fa fa-facebook-f"></i> fa fa-facebook-f</span> ',
        html: '<span><i class="fa fa-facebook-f"></i> fa fa-facebook-f</span> ',
        title: 'fa fa-facebook-f'
      },
      {
        id: 247,
        text: '<span><i class="fa fa-facebook-official"></i> fa fa-facebook-official</span> ',
        html: '<span><i class="fa fa-facebook-official"></i> fa fa-facebook-official</span> ',
        title: 'fa fa-facebook-official'
      },
      {
        id: 248,
        text: '<span><i class="fa fa-facebook-square"></i> fa fa-facebook-square</span> ',
        html: '<span><i class="fa fa-facebook-square"></i> fa fa-facebook-square</span> ',
        title: 'fa fa-facebook-square'
      },
      {
        id: 249,
        text: '<span><i class="fa fa-fast-backward"></i> fa fa-fast-backward</span> ',
        html: '<span><i class="fa fa-fast-backward"></i> fa fa-fast-backward</span> ',
        title: 'fa fa-fast-backward'
      },
      {
        id: 250,
        text: '<span><i class="fa fa-fast-forward"></i> fa fa-fast-forward</span> ',
        html: '<span><i class="fa fa-fast-forward"></i> fa fa-fast-forward</span> ',
        title: 'fa fa-fast-forward'
      },
      {
        id: 251,
        text: '<span><i class="fa fa-fax"></i> fa fa-fax</span> ',
        html: '<span><i class="fa fa-fax"></i> fa fa-fax</span> ',
        title: 'fa fa-fax'
      },
      {
        id: 252,
        text: '<span><i class="fa fa-feed"></i> fa fa-feed</span> ',
        html: '<span><i class="fa fa-feed"></i> fa fa-feed</span> ',
        title: 'fa fa-feed'
      },
      {
        id: 253,
        text: '<span><i class="fa fa-female"></i> fa fa-female</span> ',
        html: '<span><i class="fa fa-female"></i> fa fa-female</span> ',
        title: 'fa fa-female'
      },
      {
        id: 254,
        text: '<span><i class="fa fa-fighter-jet"></i> fa fa-fighter-jet</span> ',
        html: '<span><i class="fa fa-fighter-jet"></i> fa fa-fighter-jet</span> ',
        title: 'fa fa-fighter-jet'
      },
      {
        id: 255,
        text: '<span><i class="fa fa-file"></i> fa fa-file</span> ',
        html: '<span><i class="fa fa-file"></i> fa fa-file</span> ',
        title: 'fa fa-file'
      },
      {
        id: 256,
        text: '<span><i class="fa fa-file-archive-o"></i> fa fa-file-archive-o</span> ',
        html: '<span><i class="fa fa-file-archive-o"></i> fa fa-file-archive-o</span> ',
        title: 'fa fa-file-archive-o'
      },
      {
        id: 257,
        text: '<span><i class="fa fa-file-audio-o"></i> fa fa-file-audio-o</span> ',
        html: '<span><i class="fa fa-file-audio-o"></i> fa fa-file-audio-o</span> ',
        title: 'fa fa-file-audio-o'
      },
      {
        id: 258,
        text: '<span><i class="fa fa-file-code-o"></i> fa fa-file-code-o</span> ',
        html: '<span><i class="fa fa-file-code-o"></i> fa fa-file-code-o</span> ',
        title: 'fa fa-file-code-o'
      },
      {
        id: 259,
        text: '<span><i class="fa fa-file-excel-o"></i> fa fa-file-excel-o</span> ',
        html: '<span><i class="fa fa-file-excel-o"></i> fa fa-file-excel-o</span> ',
        title: 'fa fa-file-excel-o'
      },
      {
        id: 260,
        text: '<span><i class="fa fa-file-image-o"></i> fa fa-file-image-o</span> ',
        html: '<span><i class="fa fa-file-image-o"></i> fa fa-file-image-o</span> ',
        title: 'fa fa-file-image-o'
      },
      {
        id: 261,
        text: '<span><i class="fa fa-file-movie-o"></i> fa fa-file-movie-o</span> ',
        html: '<span><i class="fa fa-file-movie-o"></i> fa fa-file-movie-o</span> ',
        title: 'fa fa-file-movie-o'
      },
      {
        id: 262,
        text: '<span><i class="fa fa-file-o"></i> fa fa-file-o</span> ',
        html: '<span><i class="fa fa-file-o"></i> fa fa-file-o</span> ',
        title: 'fa fa-file-o'
      },
      {
        id: 263,
        text: '<span><i class="fa fa-file-pdf-o"></i> fa fa-file-pdf-o</span> ',
        html: '<span><i class="fa fa-file-pdf-o"></i> fa fa-file-pdf-o</span> ',
        title: 'fa fa-file-pdf-o'
      },
      {
        id: 264,
        text: '<span><i class="fa fa-file-photo-o"></i> fa fa-file-photo-o</span> ',
        html: '<span><i class="fa fa-file-photo-o"></i> fa fa-file-photo-o</span> ',
        title: 'fa fa-file-photo-o'
      },
      {
        id: 265,
        text: '<span><i class="fa fa-file-picture-o"></i> fa fa-file-picture-o</span> ',
        html: '<span><i class="fa fa-file-picture-o"></i> fa fa-file-picture-o</span> ',
        title: 'fa fa-file-picture-o'
      },
      {
        id: 266,
        text: '<span><i class="fa fa-file-powerpoint-o"></i> fa fa-file-powerpoint-o</span> ',
        html: '<span><i class="fa fa-file-powerpoint-o"></i> fa fa-file-powerpoint-o</span> ',
        title: 'fa fa-file-powerpoint-o'
      },
      {
        id: 267,
        text: '<span><i class="fa fa-file-sound-o"></i> fa fa-file-sound-o</span> ',
        html: '<span><i class="fa fa-file-sound-o"></i> fa fa-file-sound-o</span> ',
        title: 'fa fa-file-sound-o'
      },
      {
        id: 268,
        text: '<span><i class="fa fa-file-text"></i> fa fa-file-text</span> ',
        html: '<span><i class="fa fa-file-text"></i> fa fa-file-text</span> ',
        title: 'fa fa-file-text'
      },
      {
        id: 269,
        text: '<span><i class="fa fa-file-text-o"></i> fa fa-file-text-o</span> ',
        html: '<span><i class="fa fa-file-text-o"></i> fa fa-file-text-o</span> ',
        title: 'fa fa-file-text-o'
      },
      {
        id: 270,
        text: '<span><i class="fa fa-file-video-o"></i> fa fa-file-video-o</span> ',
        html: '<span><i class="fa fa-file-video-o"></i> fa fa-file-video-o</span> ',
        title: 'fa fa-file-video-o'
      },
      {
        id: 271,
        text: '<span><i class="fa fa-file-word-o"></i> fa fa-file-word-o</span> ',
        html: '<span><i class="fa fa-file-word-o"></i> fa fa-file-word-o</span> ',
        title: 'fa fa-file-word-o'
      },
      {
        id: 272,
        text: '<span><i class="fa fa-file-zip-o"></i> fa fa-file-zip-o</span> ',
        html: '<span><i class="fa fa-file-zip-o"></i> fa fa-file-zip-o</span> ',
        title: 'fa fa-file-zip-o'
      },
      {
        id: 273,
        text: '<span><i class="fa fa-files-o"></i> fa fa-files-o</span> ',
        html: '<span><i class="fa fa-files-o"></i> fa fa-files-o</span> ',
        title: 'fa fa-files-o'
      },
      {
        id: 274,
        text: '<span><i class="fa fa-film"></i> fa fa-film</span> ',
        html: '<span><i class="fa fa-film"></i> fa fa-film</span> ',
        title: 'fa fa-film'
      },
      {
        id: 275,
        text: '<span><i class="fa fa-filter"></i> fa fa-filter</span> ',
        html: '<span><i class="fa fa-filter"></i> fa fa-filter</span> ',
        title: 'fa fa-filter'
      },
      {
        id: 276,
        text: '<span><i class="fa fa-fire"></i> fa fa-fire</span> ',
        html: '<span><i class="fa fa-fire"></i> fa fa-fire</span> ',
        title: 'fa fa-fire'
      },
      {
        id: 277,
        text: '<span><i class="fa fa-fire-extinguisher"></i> fa fa-fire-extinguisher</span> ',
        html: '<span><i class="fa fa-fire-extinguisher"></i> fa fa-fire-extinguisher</span> ',
        title: 'fa fa-fire-extinguisher'
      },
      {
        id: 278,
        text: '<span><i class="fa fa-firefox"></i> fa fa-firefox</span> ',
        html: '<span><i class="fa fa-firefox"></i> fa fa-firefox</span> ',
        title: 'fa fa-firefox'
      },
      {
        id: 279,
        text: '<span><i class="fa fa-first-order"></i> fa fa-first-order</span> ',
        html: '<span><i class="fa fa-first-order"></i> fa fa-first-order</span> ',
        title: 'fa fa-first-order'
      },
      {
        id: 280,
        text: '<span><i class="fa fa-flag"></i> fa fa-flag</span> ',
        html: '<span><i class="fa fa-flag"></i> fa fa-flag</span> ',
        title: 'fa fa-flag'
      },
      {
        id: 281,
        text: '<span><i class="fa fa-flag-checkered"></i> fa fa-flag-checkered</span> ',
        html: '<span><i class="fa fa-flag-checkered"></i> fa fa-flag-checkered</span> ',
        title: 'fa fa-flag-checkered'
      },
      {
        id: 282,
        text: '<span><i class="fa fa-flag-o"></i> fa fa-flag-o</span> ',
        html: '<span><i class="fa fa-flag-o"></i> fa fa-flag-o</span> ',
        title: 'fa fa-flag-o'
      },
      {
        id: 283,
        text: '<span><i class="fa fa-flash"></i> fa fa-flash</span> ',
        html: '<span><i class="fa fa-flash"></i> fa fa-flash</span> ',
        title: 'fa fa-flash'
      },
      {
        id: 284,
        text: '<span><i class="fa fa-flask"></i> fa fa-flask</span> ',
        html: '<span><i class="fa fa-flask"></i> fa fa-flask</span> ',
        title: 'fa fa-flask'
      },
      {
        id: 285,
        text: '<span><i class="fa fa-flickr"></i> fa fa-flickr</span> ',
        html: '<span><i class="fa fa-flickr"></i> fa fa-flickr</span> ',
        title: 'fa fa-flickr'
      },
      {
        id: 286,
        text: '<span><i class="fa fa-floppy-o"></i> fa fa-floppy-o</span> ',
        html: '<span><i class="fa fa-floppy-o"></i> fa fa-floppy-o</span> ',
        title: 'fa fa-floppy-o'
      },
      {
        id: 287,
        text: '<span><i class="fa fa-folder"></i> fa fa-folder</span> ',
        html: '<span><i class="fa fa-folder"></i> fa fa-folder</span> ',
        title: 'fa fa-folder'
      },
      {
        id: 288,
        text: '<span><i class="fa fa-folder-o"></i> fa fa-folder-o</span> ',
        html: '<span><i class="fa fa-folder-o"></i> fa fa-folder-o</span> ',
        title: 'fa fa-folder-o'
      },
      {
        id: 289,
        text: '<span><i class="fa fa-folder-open"></i> fa fa-folder-open</span> ',
        html: '<span><i class="fa fa-folder-open"></i> fa fa-folder-open</span> ',
        title: 'fa fa-folder-open'
      },
      {
        id: 290,
        text: '<span><i class="fa fa-folder-open-o"></i> fa fa-folder-open-o</span> ',
        html: '<span><i class="fa fa-folder-open-o"></i> fa fa-folder-open-o</span> ',
        title: 'fa fa-folder-open-o'
      },
      {
        id: 291,
        text: '<span><i class="fa fa-font"></i> fa fa-font</span> ',
        html: '<span><i class="fa fa-font"></i> fa fa-font</span> ',
        title: 'fa fa-font'
      },
      {
        id: 292,
        text: '<span><i class="fa fa-font-awesome"></i> fa fa-font-awesome</span> ',
        html: '<span><i class="fa fa-font-awesome"></i> fa fa-font-awesome</span> ',
        title: 'fa fa-font-awesome'
      },
      {
        id: 293,
        text: '<span><i class="fa fa-fonticons"></i> fa fa-fonticons</span> ',
        html: '<span><i class="fa fa-fonticons"></i> fa fa-fonticons</span> ',
        title: 'fa fa-fonticons'
      },
      {
        id: 294,
        text: '<span><i class="fa fa-fort-awesome"></i> fa fa-fort-awesome</span> ',
        html: '<span><i class="fa fa-fort-awesome"></i> fa fa-fort-awesome</span> ',
        title: 'fa fa-fort-awesome'
      },
      {
        id: 295,
        text: '<span><i class="fa fa-forumbee"></i> fa fa-forumbee</span> ',
        html: '<span><i class="fa fa-forumbee"></i> fa fa-forumbee</span> ',
        title: 'fa fa-forumbee'
      },
      {
        id: 296,
        text: '<span><i class="fa fa-forward"></i> fa fa-forward</span> ',
        html: '<span><i class="fa fa-forward"></i> fa fa-forward</span> ',
        title: 'fa fa-forward'
      },
      {
        id: 297,
        text: '<span><i class="fa fa-foursquare"></i> fa fa-foursquare</span> ',
        html: '<span><i class="fa fa-foursquare"></i> fa fa-foursquare</span> ',
        title: 'fa fa-foursquare'
      },
      {
        id: 298,
        text: '<span><i class="fa fa-free-code-camp"></i> fa fa-free-code-camp</span> ',
        html: '<span><i class="fa fa-free-code-camp"></i> fa fa-free-code-camp</span> ',
        title: 'fa fa-free-code-camp'
      },
      {
        id: 299,
        text: '<span><i class="fa fa-frown-o"></i> fa fa-frown-o</span> ',
        html: '<span><i class="fa fa-frown-o"></i> fa fa-frown-o</span> ',
        title: 'fa fa-frown-o'
      },
      {
        id: 300,
        text: '<span><i class="fa fa-futbol-o"></i> fa fa-futbol-o</span> ',
        html: '<span><i class="fa fa-futbol-o"></i> fa fa-futbol-o</span> ',
        title: 'fa fa-futbol-o'
      },
      {
        id: 301,
        text: '<span><i class="fa fa-gamepad"></i> fa fa-gamepad</span> ',
        html: '<span><i class="fa fa-gamepad"></i> fa fa-gamepad</span> ',
        title: 'fa fa-gamepad'
      },
      {
        id: 302,
        text: '<span><i class="fa fa-gavel"></i> fa fa-gavel</span> ',
        html: '<span><i class="fa fa-gavel"></i> fa fa-gavel</span> ',
        title: 'fa fa-gavel'
      },
      {
        id: 303,
        text: '<span><i class="fa fa-gbp"></i> fa fa-gbp</span> ',
        html: '<span><i class="fa fa-gbp"></i> fa fa-gbp</span> ',
        title: 'fa fa-gbp'
      },
      {
        id: 304,
        text: '<span><i class="fa fa-ge"></i> fa fa-ge</span> ',
        html: '<span><i class="fa fa-ge"></i> fa fa-ge</span> ',
        title: 'fa fa-ge'
      },
      {
        id: 305,
        text: '<span><i class="fa fa-gear"></i> fa fa-gear</span> ',
        html: '<span><i class="fa fa-gear"></i> fa fa-gear</span> ',
        title: 'fa fa-gear'
      },
      {
        id: 306,
        text: '<span><i class="fa fa-gears"></i> fa fa-gears</span> ',
        html: '<span><i class="fa fa-gears"></i> fa fa-gears</span> ',
        title: 'fa fa-gears'
      },
      {
        id: 307,
        text: '<span><i class="fa fa-genderless"></i> fa fa-genderless</span> ',
        html: '<span><i class="fa fa-genderless"></i> fa fa-genderless</span> ',
        title: 'fa fa-genderless'
      },
      {
        id: 308,
        text: '<span><i class="fa fa-get-pocket"></i> fa fa-get-pocket</span> ',
        html: '<span><i class="fa fa-get-pocket"></i> fa fa-get-pocket</span> ',
        title: 'fa fa-get-pocket'
      },
      {
        id: 309,
        text: '<span><i class="fa fa-gg"></i> fa fa-gg</span> ',
        html: '<span><i class="fa fa-gg"></i> fa fa-gg</span> ',
        title: 'fa fa-gg'
      },
      {
        id: 310,
        text: '<span><i class="fa fa-gg-circle"></i> fa fa-gg-circle</span> ',
        html: '<span><i class="fa fa-gg-circle"></i> fa fa-gg-circle</span> ',
        title: 'fa fa-gg-circle'
      },
      {
        id: 311,
        text: '<span><i class="fa fa-gift"></i> fa fa-gift</span> ',
        html: '<span><i class="fa fa-gift"></i> fa fa-gift</span> ',
        title: 'fa fa-gift'
      },
      {
        id: 312,
        text: '<span><i class="fa fa-git"></i> fa fa-git</span> ',
        html: '<span><i class="fa fa-git"></i> fa fa-git</span> ',
        title: 'fa fa-git'
      },
      {
        id: 313,
        text: '<span><i class="fa fa-git-square"></i> fa fa-git-square</span> ',
        html: '<span><i class="fa fa-git-square"></i> fa fa-git-square</span> ',
        title: 'fa fa-git-square'
      },
      {
        id: 314,
        text: '<span><i class="fa fa-github"></i> fa fa-github</span> ',
        html: '<span><i class="fa fa-github"></i> fa fa-github</span> ',
        title: 'fa fa-github'
      },
      {
        id: 315,
        text: '<span><i class="fa fa-github-alt"></i> fa fa-github-alt</span> ',
        html: '<span><i class="fa fa-github-alt"></i> fa fa-github-alt</span> ',
        title: 'fa fa-github-alt'
      },
      {
        id: 316,
        text: '<span><i class="fa fa-github-square"></i> fa fa-github-square</span> ',
        html: '<span><i class="fa fa-github-square"></i> fa fa-github-square</span> ',
        title: 'fa fa-github-square'
      },
      {
        id: 317,
        text: '<span><i class="fa fa-gitlab"></i> fa fa-gitlab</span> ',
        html: '<span><i class="fa fa-gitlab"></i> fa fa-gitlab</span> ',
        title: 'fa fa-gitlab'
      },
      {
        id: 318,
        text: '<span><i class="fa fa-gittip"></i> fa fa-gittip</span> ',
        html: '<span><i class="fa fa-gittip"></i> fa fa-gittip</span> ',
        title: 'fa fa-gittip'
      },
      {
        id: 319,
        text: '<span><i class="fa fa-glass"></i> fa fa-glass</span> ',
        html: '<span><i class="fa fa-glass"></i> fa fa-glass</span> ',
        title: 'fa fa-glass'
      },
      {
        id: 320,
        text: '<span><i class="fa fa-glide"></i> fa fa-glide</span> ',
        html: '<span><i class="fa fa-glide"></i> fa fa-glide</span> ',
        title: 'fa fa-glide'
      },
      {
        id: 321,
        text: '<span><i class="fa fa-glide-g"></i> fa fa-glide-g</span> ',
        html: '<span><i class="fa fa-glide-g"></i> fa fa-glide-g</span> ',
        title: 'fa fa-glide-g'
      },
      {
        id: 322,
        text: '<span><i class="fa fa-globe"></i> fa fa-globe</span> ',
        html: '<span><i class="fa fa-globe"></i> fa fa-globe</span> ',
        title: 'fa fa-globe'
      },
      {
        id: 323,
        text: '<span><i class="fa fa-google"></i> fa fa-google</span> ',
        html: '<span><i class="fa fa-google"></i> fa fa-google</span> ',
        title: 'fa fa-google'
      },
      {
        id: 324,
        text: '<span><i class="fa fa-google-plus"></i> fa fa-google-plus</span> ',
        html: '<span><i class="fa fa-google-plus"></i> fa fa-google-plus</span> ',
        title: 'fa fa-google-plus'
      },
      {
        id: 325,
        text: '<span><i class="fa fa-google-plus-circle"></i> fa fa-google-plus-circle</span> ',
        html: '<span><i class="fa fa-google-plus-circle"></i> fa fa-google-plus-circle</span> ',
        title: 'fa fa-google-plus-circle'
      },
      {
        id: 326,
        text: '<span><i class="fa fa-google-plus-official"></i> fa fa-google-plus-official</span> ',
        html: '<span><i class="fa fa-google-plus-official"></i> fa fa-google-plus-official</span> ',
        title: 'fa fa-google-plus-official'
      },
      {
        id: 327,
        text: '<span><i class="fa fa-google-plus-square"></i> fa fa-google-plus-square</span> ',
        html: '<span><i class="fa fa-google-plus-square"></i> fa fa-google-plus-square</span> ',
        title: 'fa fa-google-plus-square'
      },
      {
        id: 328,
        text: '<span><i class="fa fa-google-wallet"></i> fa fa-google-wallet</span> ',
        html: '<span><i class="fa fa-google-wallet"></i> fa fa-google-wallet</span> ',
        title: 'fa fa-google-wallet'
      },
      {
        id: 329,
        text: '<span><i class="fa fa-graduation-cap"></i> fa fa-graduation-cap</span> ',
        html: '<span><i class="fa fa-graduation-cap"></i> fa fa-graduation-cap</span> ',
        title: 'fa fa-graduation-cap'
      },
      {
        id: 330,
        text: '<span><i class="fa fa-gratipay"></i> fa fa-gratipay</span> ',
        html: '<span><i class="fa fa-gratipay"></i> fa fa-gratipay</span> ',
        title: 'fa fa-gratipay'
      },
      {
        id: 331,
        text: '<span><i class="fa fa-grav"></i> fa fa-grav</span> ',
        html: '<span><i class="fa fa-grav"></i> fa fa-grav</span> ',
        title: 'fa fa-grav'
      },
      {
        id: 332,
        text: '<span><i class="fa fa-group"></i> fa fa-group</span> ',
        html: '<span><i class="fa fa-group"></i> fa fa-group</span> ',
        title: 'fa fa-group'
      },
      {
        id: 333,
        text: '<span><i class="fa fa-h-square"></i> fa fa-h-square</span> ',
        html: '<span><i class="fa fa-h-square"></i> fa fa-h-square</span> ',
        title: 'fa fa-h-square'
      },
      {
        id: 334,
        text: '<span><i class="fa fa-hacker-news"></i> fa fa-hacker-news</span> ',
        html: '<span><i class="fa fa-hacker-news"></i> fa fa-hacker-news</span> ',
        title: 'fa fa-hacker-news'
      },
      {
        id: 335,
        text: '<span><i class="fa fa-hand-grab-o"></i> fa fa-hand-grab-o</span> ',
        html: '<span><i class="fa fa-hand-grab-o"></i> fa fa-hand-grab-o</span> ',
        title: 'fa fa-hand-grab-o'
      },
      {
        id: 336,
        text: '<span><i class="fa fa-hand-lizard-o"></i> fa fa-hand-lizard-o</span> ',
        html: '<span><i class="fa fa-hand-lizard-o"></i> fa fa-hand-lizard-o</span> ',
        title: 'fa fa-hand-lizard-o'
      },
      {
        id: 337,
        text: '<span><i class="fa fa-hand-o-down"></i> fa fa-hand-o-down</span> ',
        html: '<span><i class="fa fa-hand-o-down"></i> fa fa-hand-o-down</span> ',
        title: 'fa fa-hand-o-down'
      },
      {
        id: 338,
        text: '<span><i class="fa fa-hand-o-left"></i> fa fa-hand-o-left</span> ',
        html: '<span><i class="fa fa-hand-o-left"></i> fa fa-hand-o-left</span> ',
        title: 'fa fa-hand-o-left'
      },
      {
        id: 339,
        text: '<span><i class="fa fa-hand-o-right"></i> fa fa-hand-o-right</span> ',
        html: '<span><i class="fa fa-hand-o-right"></i> fa fa-hand-o-right</span> ',
        title: 'fa fa-hand-o-right'
      },
      {
        id: 340,
        text: '<span><i class="fa fa-hand-o-up"></i> fa fa-hand-o-up</span> ',
        html: '<span><i class="fa fa-hand-o-up"></i> fa fa-hand-o-up</span> ',
        title: 'fa fa-hand-o-up'
      },
      {
        id: 341,
        text: '<span><i class="fa fa-hand-paper-o"></i> fa fa-hand-paper-o</span> ',
        html: '<span><i class="fa fa-hand-paper-o"></i> fa fa-hand-paper-o</span> ',
        title: 'fa fa-hand-paper-o'
      },
      {
        id: 342,
        text: '<span><i class="fa fa-hand-peace-o"></i> fa fa-hand-peace-o</span> ',
        html: '<span><i class="fa fa-hand-peace-o"></i> fa fa-hand-peace-o</span> ',
        title: 'fa fa-hand-peace-o'
      },
      {
        id: 343,
        text: '<span><i class="fa fa-hand-pointer-o"></i> fa fa-hand-pointer-o</span> ',
        html: '<span><i class="fa fa-hand-pointer-o"></i> fa fa-hand-pointer-o</span> ',
        title: 'fa fa-hand-pointer-o'
      },
      {
        id: 344,
        text: '<span><i class="fa fa-hand-rock-o"></i> fa fa-hand-rock-o</span> ',
        html: '<span><i class="fa fa-hand-rock-o"></i> fa fa-hand-rock-o</span> ',
        title: 'fa fa-hand-rock-o'
      },
      {
        id: 345,
        text: '<span><i class="fa fa-hand-scissors-o"></i> fa fa-hand-scissors-o</span> ',
        html: '<span><i class="fa fa-hand-scissors-o"></i> fa fa-hand-scissors-o</span> ',
        title: 'fa fa-hand-scissors-o'
      },
      {
        id: 346,
        text: '<span><i class="fa fa-hand-spock-o"></i> fa fa-hand-spock-o</span> ',
        html: '<span><i class="fa fa-hand-spock-o"></i> fa fa-hand-spock-o</span> ',
        title: 'fa fa-hand-spock-o'
      },
      {
        id: 347,
        text: '<span><i class="fa fa-hand-stop-o"></i> fa fa-hand-stop-o</span> ',
        html: '<span><i class="fa fa-hand-stop-o"></i> fa fa-hand-stop-o</span> ',
        title: 'fa fa-hand-stop-o'
      },
      {
        id: 348,
        text: '<span><i class="fa fa-handshake-o"></i> fa fa-handshake-o</span> ',
        html: '<span><i class="fa fa-handshake-o"></i> fa fa-handshake-o</span> ',
        title: 'fa fa-handshake-o'
      },
      {
        id: 349,
        text: '<span><i class="fa fa-hard-of-hearing"></i> fa fa-hard-of-hearing</span> ',
        html: '<span><i class="fa fa-hard-of-hearing"></i> fa fa-hard-of-hearing</span> ',
        title: 'fa fa-hard-of-hearing'
      },
      {
        id: 350,
        text: '<span><i class="fa fa-hashtag"></i> fa fa-hashtag</span> ',
        html: '<span><i class="fa fa-hashtag"></i> fa fa-hashtag</span> ',
        title: 'fa fa-hashtag'
      },
      {
        id: 351,
        text: '<span><i class="fa fa-hdd-o"></i> fa fa-hdd-o</span> ',
        html: '<span><i class="fa fa-hdd-o"></i> fa fa-hdd-o</span> ',
        title: 'fa fa-hdd-o'
      },
      {
        id: 352,
        text: '<span><i class="fa fa-header"></i> fa fa-header</span> ',
        html: '<span><i class="fa fa-header"></i> fa fa-header</span> ',
        title: 'fa fa-header'
      },
      {
        id: 353,
        text: '<span><i class="fa fa-headphones"></i> fa fa-headphones</span> ',
        html: '<span><i class="fa fa-headphones"></i> fa fa-headphones</span> ',
        title: 'fa fa-headphones'
      },
      {
        id: 354,
        text: '<span><i class="fa fa-heart"></i> fa fa-heart</span> ',
        html: '<span><i class="fa fa-heart"></i> fa fa-heart</span> ',
        title: 'fa fa-heart'
      },
      {
        id: 355,
        text: '<span><i class="fa fa-heart-o"></i> fa fa-heart-o</span> ',
        html: '<span><i class="fa fa-heart-o"></i> fa fa-heart-o</span> ',
        title: 'fa fa-heart-o'
      },
      {
        id: 356,
        text: '<span><i class="fa fa-heartbeat"></i> fa fa-heartbeat</span> ',
        html: '<span><i class="fa fa-heartbeat"></i> fa fa-heartbeat</span> ',
        title: 'fa fa-heartbeat'
      },
      {
        id: 357,
        text: '<span><i class="fa fa-history"></i> fa fa-history</span> ',
        html: '<span><i class="fa fa-history"></i> fa fa-history</span> ',
        title: 'fa fa-history'
      },
      {
        id: 358,
        text: '<span><i class="fa fa-home"></i> fa fa-home</span> ',
        html: '<span><i class="fa fa-home"></i> fa fa-home</span> ',
        title: 'fa fa-home'
      },
      {
        id: 359,
        text: '<span><i class="fa fa-hospital-o"></i> fa fa-hospital-o</span> ',
        html: '<span><i class="fa fa-hospital-o"></i> fa fa-hospital-o</span> ',
        title: 'fa fa-hospital-o'
      },
      {
        id: 360,
        text: '<span><i class="fa fa-hotel"></i> fa fa-hotel</span> ',
        html: '<span><i class="fa fa-hotel"></i> fa fa-hotel</span> ',
        title: 'fa fa-hotel'
      },
      {
        id: 361,
        text: '<span><i class="fa fa-hourglass"></i> fa fa-hourglass</span> ',
        html: '<span><i class="fa fa-hourglass"></i> fa fa-hourglass</span> ',
        title: 'fa fa-hourglass'
      },
      {
        id: 362,
        text: '<span><i class="fa fa-hourglass-1"></i> fa fa-hourglass-1</span> ',
        html: '<span><i class="fa fa-hourglass-1"></i> fa fa-hourglass-1</span> ',
        title: 'fa fa-hourglass-1'
      },
      {
        id: 363,
        text: '<span><i class="fa fa-hourglass-2"></i> fa fa-hourglass-2</span> ',
        html: '<span><i class="fa fa-hourglass-2"></i> fa fa-hourglass-2</span> ',
        title: 'fa fa-hourglass-2'
      },
      {
        id: 364,
        text: '<span><i class="fa fa-hourglass-3"></i> fa fa-hourglass-3</span> ',
        html: '<span><i class="fa fa-hourglass-3"></i> fa fa-hourglass-3</span> ',
        title: 'fa fa-hourglass-3'
      },
      {
        id: 365,
        text: '<span><i class="fa fa-hourglass-end"></i> fa fa-hourglass-end</span> ',
        html: '<span><i class="fa fa-hourglass-end"></i> fa fa-hourglass-end</span> ',
        title: 'fa fa-hourglass-end'
      },
      {
        id: 366,
        text: '<span><i class="fa fa-hourglass-half"></i> fa fa-hourglass-half</span> ',
        html: '<span><i class="fa fa-hourglass-half"></i> fa fa-hourglass-half</span> ',
        title: 'fa fa-hourglass-half'
      },
      {
        id: 367,
        text: '<span><i class="fa fa-hourglass-o"></i> fa fa-hourglass-o</span> ',
        html: '<span><i class="fa fa-hourglass-o"></i> fa fa-hourglass-o</span> ',
        title: 'fa fa-hourglass-o'
      },
      {
        id: 368,
        text: '<span><i class="fa fa-hourglass-start"></i> fa fa-hourglass-start</span> ',
        html: '<span><i class="fa fa-hourglass-start"></i> fa fa-hourglass-start</span> ',
        title: 'fa fa-hourglass-start'
      },
      {
        id: 369,
        text: '<span><i class="fa fa-houzz"></i> fa fa-houzz</span> ',
        html: '<span><i class="fa fa-houzz"></i> fa fa-houzz</span> ',
        title: 'fa fa-houzz'
      },
      {
        id: 370,
        text: '<span><i class="fa fa-html5"></i> fa fa-html5</span> ',
        html: '<span><i class="fa fa-html5"></i> fa fa-html5</span> ',
        title: 'fa fa-html5'
      },
      {
        id: 371,
        text: '<span><i class="fa fa-i-cursor"></i> fa fa-i-cursor</span> ',
        html: '<span><i class="fa fa-i-cursor"></i> fa fa-i-cursor</span> ',
        title: 'fa fa-i-cursor'
      },
      {
        id: 372,
        text: '<span><i class="fa fa-id-badge"></i> fa fa-id-badge</span> ',
        html: '<span><i class="fa fa-id-badge"></i> fa fa-id-badge</span> ',
        title: 'fa fa-id-badge'
      },
      {
        id: 373,
        text: '<span><i class="fa fa-id-card"></i> fa fa-id-card</span> ',
        html: '<span><i class="fa fa-id-card"></i> fa fa-id-card</span> ',
        title: 'fa fa-id-card'
      },
      {
        id: 374,
        text: '<span><i class="fa fa-id-card-o"></i> fa fa-id-card-o</span> ',
        html: '<span><i class="fa fa-id-card-o"></i> fa fa-id-card-o</span> ',
        title: 'fa fa-id-card-o'
      },
      {
        id: 375,
        text: '<span><i class="fa fa-ils"></i> fa fa-ils</span> ',
        html: '<span><i class="fa fa-ils"></i> fa fa-ils</span> ',
        title: 'fa fa-ils'
      },
      {
        id: 376,
        text: '<span><i class="fa fa-image"></i> fa fa-image</span> ',
        html: '<span><i class="fa fa-image"></i> fa fa-image</span> ',
        title: 'fa fa-image'
      },
      {
        id: 377,
        text: '<span><i class="fa fa-imdb"></i> fa fa-imdb</span> ',
        html: '<span><i class="fa fa-imdb"></i> fa fa-imdb</span> ',
        title: 'fa fa-imdb'
      },
      {
        id: 378,
        text: '<span><i class="fa fa-inbox"></i> fa fa-inbox</span> ',
        html: '<span><i class="fa fa-inbox"></i> fa fa-inbox</span> ',
        title: 'fa fa-inbox'
      },
      {
        id: 379,
        text: '<span><i class="fa fa-indent"></i> fa fa-indent</span> ',
        html: '<span><i class="fa fa-indent"></i> fa fa-indent</span> ',
        title: 'fa fa-indent'
      },
      {
        id: 380,
        text: '<span><i class="fa fa-industry"></i> fa fa-industry</span> ',
        html: '<span><i class="fa fa-industry"></i> fa fa-industry</span> ',
        title: 'fa fa-industry'
      },
      {
        id: 381,
        text: '<span><i class="fa fa-info"></i> fa fa-info</span> ',
        html: '<span><i class="fa fa-info"></i> fa fa-info</span> ',
        title: 'fa fa-info'
      },
      {
        id: 382,
        text: '<span><i class="fa fa-info-circle"></i> fa fa-info-circle</span> ',
        html: '<span><i class="fa fa-info-circle"></i> fa fa-info-circle</span> ',
        title: 'fa fa-info-circle'
      },
      {
        id: 383,
        text: '<span><i class="fa fa-inr"></i> fa fa-inr</span> ',
        html: '<span><i class="fa fa-inr"></i> fa fa-inr</span> ',
        title: 'fa fa-inr'
      },
      {
        id: 384,
        text: '<span><i class="fa fa-instagram"></i> fa fa-instagram</span> ',
        html: '<span><i class="fa fa-instagram"></i> fa fa-instagram</span> ',
        title: 'fa fa-instagram'
      },
      {
        id: 385,
        text: '<span><i class="fa fa-institution"></i> fa fa-institution</span> ',
        html: '<span><i class="fa fa-institution"></i> fa fa-institution</span> ',
        title: 'fa fa-institution'
      },
      {
        id: 386,
        text: '<span><i class="fa fa-internet-explorer"></i> fa fa-internet-explorer</span> ',
        html: '<span><i class="fa fa-internet-explorer"></i> fa fa-internet-explorer</span> ',
        title: 'fa fa-internet-explorer'
      },
      {
        id: 387,
        text: '<span><i class="fa fa-intersex"></i> fa fa-intersex</span> ',
        html: '<span><i class="fa fa-intersex"></i> fa fa-intersex</span> ',
        title: 'fa fa-intersex'
      },
      {
        id: 388,
        text: '<span><i class="fa fa-ioxhost"></i> fa fa-ioxhost</span> ',
        html: '<span><i class="fa fa-ioxhost"></i> fa fa-ioxhost</span> ',
        title: 'fa fa-ioxhost'
      },
      {
        id: 389,
        text: '<span><i class="fa fa-italic"></i> fa fa-italic</span> ',
        html: '<span><i class="fa fa-italic"></i> fa fa-italic</span> ',
        title: 'fa fa-italic'
      },
      {
        id: 390,
        text: '<span><i class="fa fa-joomla"></i> fa fa-joomla</span> ',
        html: '<span><i class="fa fa-joomla"></i> fa fa-joomla</span> ',
        title: 'fa fa-joomla'
      },
      {
        id: 391,
        text: '<span><i class="fa fa-jpy"></i> fa fa-jpy</span> ',
        html: '<span><i class="fa fa-jpy"></i> fa fa-jpy</span> ',
        title: 'fa fa-jpy'
      },
      {
        id: 392,
        text: '<span><i class="fa fa-jsfiddle"></i> fa fa-jsfiddle</span> ',
        html: '<span><i class="fa fa-jsfiddle"></i> fa fa-jsfiddle</span> ',
        title: 'fa fa-jsfiddle'
      },
      {
        id: 393,
        text: '<span><i class="fa fa-key"></i> fa fa-key</span> ',
        html: '<span><i class="fa fa-key"></i> fa fa-key</span> ',
        title: 'fa fa-key'
      },
      {
        id: 394,
        text: '<span><i class="fa fa-keyboard-o"></i> fa fa-keyboard-o</span> ',
        html: '<span><i class="fa fa-keyboard-o"></i> fa fa-keyboard-o</span> ',
        title: 'fa fa-keyboard-o'
      },
      {
        id: 395,
        text: '<span><i class="fa fa-krw"></i> fa fa-krw</span> ',
        html: '<span><i class="fa fa-krw"></i> fa fa-krw</span> ',
        title: 'fa fa-krw'
      },
      {
        id: 396,
        text: '<span><i class="fa fa-language"></i> fa fa-language</span> ',
        html: '<span><i class="fa fa-language"></i> fa fa-language</span> ',
        title: 'fa fa-language'
      },
      {
        id: 397,
        text: '<span><i class="fa fa-laptop"></i> fa fa-laptop</span> ',
        html: '<span><i class="fa fa-laptop"></i> fa fa-laptop</span> ',
        title: 'fa fa-laptop'
      },
      {
        id: 398,
        text: '<span><i class="fa fa-lastfm"></i> fa fa-lastfm</span> ',
        html: '<span><i class="fa fa-lastfm"></i> fa fa-lastfm</span> ',
        title: 'fa fa-lastfm'
      },
      {
        id: 399,
        text: '<span><i class="fa fa-lastfm-square"></i> fa fa-lastfm-square</span> ',
        html: '<span><i class="fa fa-lastfm-square"></i> fa fa-lastfm-square</span> ',
        title: 'fa fa-lastfm-square'
      },
      {
        id: 400,
        text: '<span><i class="fa fa-leaf"></i> fa fa-leaf</span> ',
        html: '<span><i class="fa fa-leaf"></i> fa fa-leaf</span> ',
        title: 'fa fa-leaf'
      },
      {
        id: 401,
        text: '<span><i class="fa fa-leanpub"></i> fa fa-leanpub</span> ',
        html: '<span><i class="fa fa-leanpub"></i> fa fa-leanpub</span> ',
        title: 'fa fa-leanpub'
      },
      {
        id: 402,
        text: '<span><i class="fa fa-legal"></i> fa fa-legal</span> ',
        html: '<span><i class="fa fa-legal"></i> fa fa-legal</span> ',
        title: 'fa fa-legal'
      },
      {
        id: 403,
        text: '<span><i class="fa fa-lemon-o"></i> fa fa-lemon-o</span> ',
        html: '<span><i class="fa fa-lemon-o"></i> fa fa-lemon-o</span> ',
        title: 'fa fa-lemon-o'
      },
      {
        id: 404,
        text: '<span><i class="fa fa-level-down"></i> fa fa-level-down</span> ',
        html: '<span><i class="fa fa-level-down"></i> fa fa-level-down</span> ',
        title: 'fa fa-level-down'
      },
      {
        id: 405,
        text: '<span><i class="fa fa-level-up"></i> fa fa-level-up</span> ',
        html: '<span><i class="fa fa-level-up"></i> fa fa-level-up</span> ',
        title: 'fa fa-level-up'
      },
      {
        id: 406,
        text: '<span><i class="fa fa-life-bouy"></i> fa fa-life-bouy</span> ',
        html: '<span><i class="fa fa-life-bouy"></i> fa fa-life-bouy</span> ',
        title: 'fa fa-life-bouy'
      },
      {
        id: 407,
        text: '<span><i class="fa fa-life-buoy"></i> fa fa-life-buoy</span> ',
        html: '<span><i class="fa fa-life-buoy"></i> fa fa-life-buoy</span> ',
        title: 'fa fa-life-buoy'
      },
      {
        id: 408,
        text: '<span><i class="fa fa-life-ring"></i> fa fa-life-ring</span> ',
        html: '<span><i class="fa fa-life-ring"></i> fa fa-life-ring</span> ',
        title: 'fa fa-life-ring'
      },
      {
        id: 409,
        text: '<span><i class="fa fa-life-saver"></i> fa fa-life-saver</span> ',
        html: '<span><i class="fa fa-life-saver"></i> fa fa-life-saver</span> ',
        title: 'fa fa-life-saver'
      },
      {
        id: 410,
        text: '<span><i class="fa fa-lightbulb-o"></i> fa fa-lightbulb-o</span> ',
        html: '<span><i class="fa fa-lightbulb-o"></i> fa fa-lightbulb-o</span> ',
        title: 'fa fa-lightbulb-o'
      },
      {
        id: 411,
        text: '<span><i class="fa fa-line-chart"></i> fa fa-line-chart</span> ',
        html: '<span><i class="fa fa-line-chart"></i> fa fa-line-chart</span> ',
        title: 'fa fa-line-chart'
      },
      {
        id: 412,
        text: '<span><i class="fa fa-link"></i> fa fa-link</span> ',
        html: '<span><i class="fa fa-link"></i> fa fa-link</span> ',
        title: 'fa fa-link'
      },
      {
        id: 413,
        text: '<span><i class="fa fa-linkedin"></i> fa fa-linkedin</span> ',
        html: '<span><i class="fa fa-linkedin"></i> fa fa-linkedin</span> ',
        title: 'fa fa-linkedin'
      },
      {
        id: 414,
        text: '<span><i class="fa fa-linkedin-square"></i> fa fa-linkedin-square</span> ',
        html: '<span><i class="fa fa-linkedin-square"></i> fa fa-linkedin-square</span> ',
        title: 'fa fa-linkedin-square'
      },
      {
        id: 415,
        text: '<span><i class="fa fa-linode"></i> fa fa-linode</span> ',
        html: '<span><i class="fa fa-linode"></i> fa fa-linode</span> ',
        title: 'fa fa-linode'
      },
      {
        id: 416,
        text: '<span><i class="fa fa-linux"></i> fa fa-linux</span> ',
        html: '<span><i class="fa fa-linux"></i> fa fa-linux</span> ',
        title: 'fa fa-linux'
      },
      {
        id: 417,
        text: '<span><i class="fa fa-list"></i> fa fa-list</span> ',
        html: '<span><i class="fa fa-list"></i> fa fa-list</span> ',
        title: 'fa fa-list'
      },
      {
        id: 418,
        text: '<span><i class="fa fa-list-alt"></i> fa fa-list-alt</span> ',
        html: '<span><i class="fa fa-list-alt"></i> fa fa-list-alt</span> ',
        title: 'fa fa-list-alt'
      },
      {
        id: 419,
        text: '<span><i class="fa fa-list-ol"></i> fa fa-list-ol</span> ',
        html: '<span><i class="fa fa-list-ol"></i> fa fa-list-ol</span> ',
        title: 'fa fa-list-ol'
      },
      {
        id: 420,
        text: '<span><i class="fa fa-list-ul"></i> fa fa-list-ul</span> ',
        html: '<span><i class="fa fa-list-ul"></i> fa fa-list-ul</span> ',
        title: 'fa fa-list-ul'
      },
      {
        id: 421,
        text: '<span><i class="fa fa-location-arrow"></i> fa fa-location-arrow</span> ',
        html: '<span><i class="fa fa-location-arrow"></i> fa fa-location-arrow</span> ',
        title: 'fa fa-location-arrow'
      },
      {
        id: 422,
        text: '<span><i class="fa fa-lock"></i> fa fa-lock</span> ',
        html: '<span><i class="fa fa-lock"></i> fa fa-lock</span> ',
        title: 'fa fa-lock'
      },
      {
        id: 423,
        text: '<span><i class="fa fa-long-arrow-down"></i> fa fa-long-arrow-down</span> ',
        html: '<span><i class="fa fa-long-arrow-down"></i> fa fa-long-arrow-down</span> ',
        title: 'fa fa-long-arrow-down'
      },
      {
        id: 424,
        text: '<span><i class="fa fa-long-arrow-left"></i> fa fa-long-arrow-left</span> ',
        html: '<span><i class="fa fa-long-arrow-left"></i> fa fa-long-arrow-left</span> ',
        title: 'fa fa-long-arrow-left'
      },
      {
        id: 425,
        text: '<span><i class="fa fa-long-arrow-right"></i> fa fa-long-arrow-right</span> ',
        html: '<span><i class="fa fa-long-arrow-right"></i> fa fa-long-arrow-right</span> ',
        title: 'fa fa-long-arrow-right'
      },
      {
        id: 426,
        text: '<span><i class="fa fa-long-arrow-up"></i> fa fa-long-arrow-up</span> ',
        html: '<span><i class="fa fa-long-arrow-up"></i> fa fa-long-arrow-up</span> ',
        title: 'fa fa-long-arrow-up'
      },
      {
        id: 427,
        text: '<span><i class="fa fa-low-vision"></i> fa fa-low-vision</span> ',
        html: '<span><i class="fa fa-low-vision"></i> fa fa-low-vision</span> ',
        title: 'fa fa-low-vision'
      },
      {
        id: 428,
        text: '<span><i class="fa fa-magic"></i> fa fa-magic</span> ',
        html: '<span><i class="fa fa-magic"></i> fa fa-magic</span> ',
        title: 'fa fa-magic'
      },
      {
        id: 429,
        text: '<span><i class="fa fa-magnet"></i> fa fa-magnet</span> ',
        html: '<span><i class="fa fa-magnet"></i> fa fa-magnet</span> ',
        title: 'fa fa-magnet'
      },
      {
        id: 430,
        text: '<span><i class="fa fa-mail-forward"></i> fa fa-mail-forward</span> ',
        html: '<span><i class="fa fa-mail-forward"></i> fa fa-mail-forward</span> ',
        title: 'fa fa-mail-forward'
      },
      {
        id: 431,
        text: '<span><i class="fa fa-mail-reply"></i> fa fa-mail-reply</span> ',
        html: '<span><i class="fa fa-mail-reply"></i> fa fa-mail-reply</span> ',
        title: 'fa fa-mail-reply'
      },
      {
        id: 432,
        text: '<span><i class="fa fa-mail-reply-all"></i> fa fa-mail-reply-all</span> ',
        html: '<span><i class="fa fa-mail-reply-all"></i> fa fa-mail-reply-all</span> ',
        title: 'fa fa-mail-reply-all'
      },
      {
        id: 433,
        text: '<span><i class="fa fa-male"></i> fa fa-male</span> ',
        html: '<span><i class="fa fa-male"></i> fa fa-male</span> ',
        title: 'fa fa-male'
      },
      {
        id: 434,
        text: '<span><i class="fa fa-map"></i> fa fa-map</span> ',
        html: '<span><i class="fa fa-map"></i> fa fa-map</span> ',
        title: 'fa fa-map'
      },
      {
        id: 435,
        text: '<span><i class="fa fa-map-marker"></i> fa fa-map-marker</span> ',
        html: '<span><i class="fa fa-map-marker"></i> fa fa-map-marker</span> ',
        title: 'fa fa-map-marker'
      },
      {
        id: 436,
        text: '<span><i class="fa fa-map-o"></i> fa fa-map-o</span> ',
        html: '<span><i class="fa fa-map-o"></i> fa fa-map-o</span> ',
        title: 'fa fa-map-o'
      },
      {
        id: 437,
        text: '<span><i class="fa fa-map-pin"></i> fa fa-map-pin</span> ',
        html: '<span><i class="fa fa-map-pin"></i> fa fa-map-pin</span> ',
        title: 'fa fa-map-pin'
      },
      {
        id: 438,
        text: '<span><i class="fa fa-map-signs"></i> fa fa-map-signs</span> ',
        html: '<span><i class="fa fa-map-signs"></i> fa fa-map-signs</span> ',
        title: 'fa fa-map-signs'
      },
      {
        id: 439,
        text: '<span><i class="fa fa-mars"></i> fa fa-mars</span> ',
        html: '<span><i class="fa fa-mars"></i> fa fa-mars</span> ',
        title: 'fa fa-mars'
      },
      {
        id: 440,
        text: '<span><i class="fa fa-mars-double"></i> fa fa-mars-double</span> ',
        html: '<span><i class="fa fa-mars-double"></i> fa fa-mars-double</span> ',
        title: 'fa fa-mars-double'
      },
      {
        id: 441,
        text: '<span><i class="fa fa-mars-stroke"></i> fa fa-mars-stroke</span> ',
        html: '<span><i class="fa fa-mars-stroke"></i> fa fa-mars-stroke</span> ',
        title: 'fa fa-mars-stroke'
      },
      {
        id: 442,
        text: '<span><i class="fa fa-mars-stroke-h"></i> fa fa-mars-stroke-h</span> ',
        html: '<span><i class="fa fa-mars-stroke-h"></i> fa fa-mars-stroke-h</span> ',
        title: 'fa fa-mars-stroke-h'
      },
      {
        id: 443,
        text: '<span><i class="fa fa-mars-stroke-v"></i> fa fa-mars-stroke-v</span> ',
        html: '<span><i class="fa fa-mars-stroke-v"></i> fa fa-mars-stroke-v</span> ',
        title: 'fa fa-mars-stroke-v'
      },
      {
        id: 444,
        text: '<span><i class="fa fa-maxcdn"></i> fa fa-maxcdn</span> ',
        html: '<span><i class="fa fa-maxcdn"></i> fa fa-maxcdn</span> ',
        title: 'fa fa-maxcdn'
      },
      {
        id: 445,
        text: '<span><i class="fa fa-meanpath"></i> fa fa-meanpath</span> ',
        html: '<span><i class="fa fa-meanpath"></i> fa fa-meanpath</span> ',
        title: 'fa fa-meanpath'
      },
      {
        id: 446,
        text: '<span><i class="fa fa-medium"></i> fa fa-medium</span> ',
        html: '<span><i class="fa fa-medium"></i> fa fa-medium</span> ',
        title: 'fa fa-medium'
      },
      {
        id: 447,
        text: '<span><i class="fa fa-medkit"></i> fa fa-medkit</span> ',
        html: '<span><i class="fa fa-medkit"></i> fa fa-medkit</span> ',
        title: 'fa fa-medkit'
      },
      {
        id: 448,
        text: '<span><i class="fa fa-meetup"></i> fa fa-meetup</span> ',
        html: '<span><i class="fa fa-meetup"></i> fa fa-meetup</span> ',
        title: 'fa fa-meetup'
      },
      {
        id: 449,
        text: '<span><i class="fa fa-meh-o"></i> fa fa-meh-o</span> ',
        html: '<span><i class="fa fa-meh-o"></i> fa fa-meh-o</span> ',
        title: 'fa fa-meh-o'
      },
      {
        id: 450,
        text: '<span><i class="fa fa-mercury"></i> fa fa-mercury</span> ',
        html: '<span><i class="fa fa-mercury"></i> fa fa-mercury</span> ',
        title: 'fa fa-mercury'
      },
      {
        id: 451,
        text: '<span><i class="fa fa-microchip"></i> fa fa-microchip</span> ',
        html: '<span><i class="fa fa-microchip"></i> fa fa-microchip</span> ',
        title: 'fa fa-microchip'
      },
      {
        id: 452,
        text: '<span><i class="fa fa-microphone"></i> fa fa-microphone</span> ',
        html: '<span><i class="fa fa-microphone"></i> fa fa-microphone</span> ',
        title: 'fa fa-microphone'
      },
      {
        id: 453,
        text: '<span><i class="fa fa-microphone-slash"></i> fa fa-microphone-slash</span> ',
        html: '<span><i class="fa fa-microphone-slash"></i> fa fa-microphone-slash</span> ',
        title: 'fa fa-microphone-slash'
      },
      {
        id: 454,
        text: '<span><i class="fa fa-minus"></i> fa fa-minus</span> ',
        html: '<span><i class="fa fa-minus"></i> fa fa-minus</span> ',
        title: 'fa fa-minus'
      },
      {
        id: 455,
        text: '<span><i class="fa fa-minus-circle"></i> fa fa-minus-circle</span> ',
        html: '<span><i class="fa fa-minus-circle"></i> fa fa-minus-circle</span> ',
        title: 'fa fa-minus-circle'
      },
      {
        id: 456,
        text: '<span><i class="fa fa-minus-square"></i> fa fa-minus-square</span> ',
        html: '<span><i class="fa fa-minus-square"></i> fa fa-minus-square</span> ',
        title: 'fa fa-minus-square'
      },
      {
        id: 457,
        text: '<span><i class="fa fa-minus-square-o"></i> fa fa-minus-square-o</span> ',
        html: '<span><i class="fa fa-minus-square-o"></i> fa fa-minus-square-o</span> ',
        title: 'fa fa-minus-square-o'
      },
      {
        id: 458,
        text: '<span><i class="fa fa-mixcloud"></i> fa fa-mixcloud</span> ',
        html: '<span><i class="fa fa-mixcloud"></i> fa fa-mixcloud</span> ',
        title: 'fa fa-mixcloud'
      },
      {
        id: 459,
        text: '<span><i class="fa fa-mobile"></i> fa fa-mobile</span> ',
        html: '<span><i class="fa fa-mobile"></i> fa fa-mobile</span> ',
        title: 'fa fa-mobile'
      },
      {
        id: 460,
        text: '<span><i class="fa fa-mobile-phone"></i> fa fa-mobile-phone</span> ',
        html: '<span><i class="fa fa-mobile-phone"></i> fa fa-mobile-phone</span> ',
        title: 'fa fa-mobile-phone'
      },
      {
        id: 461,
        text: '<span><i class="fa fa-modx"></i> fa fa-modx</span> ',
        html: '<span><i class="fa fa-modx"></i> fa fa-modx</span> ',
        title: 'fa fa-modx'
      },
      {
        id: 462,
        text: '<span><i class="fa fa-money"></i> fa fa-money</span> ',
        html: '<span><i class="fa fa-money"></i> fa fa-money</span> ',
        title: 'fa fa-money'
      },
      {
        id: 463,
        text: '<span><i class="fa fa-moon-o"></i> fa fa-moon-o</span> ',
        html: '<span><i class="fa fa-moon-o"></i> fa fa-moon-o</span> ',
        title: 'fa fa-moon-o'
      },
      {
        id: 464,
        text: '<span><i class="fa fa-mortar-board"></i> fa fa-mortar-board</span> ',
        html: '<span><i class="fa fa-mortar-board"></i> fa fa-mortar-board</span> ',
        title: 'fa fa-mortar-board'
      },
      {
        id: 465,
        text: '<span><i class="fa fa-motorcycle"></i> fa fa-motorcycle</span> ',
        html: '<span><i class="fa fa-motorcycle"></i> fa fa-motorcycle</span> ',
        title: 'fa fa-motorcycle'
      },
      {
        id: 466,
        text: '<span><i class="fa fa-mouse-pointer"></i> fa fa-mouse-pointer</span> ',
        html: '<span><i class="fa fa-mouse-pointer"></i> fa fa-mouse-pointer</span> ',
        title: 'fa fa-mouse-pointer'
      },
      {
        id: 467,
        text: '<span><i class="fa fa-music"></i> fa fa-music</span> ',
        html: '<span><i class="fa fa-music"></i> fa fa-music</span> ',
        title: 'fa fa-music'
      },
      {
        id: 468,
        text: '<span><i class="fa fa-navicon"></i> fa fa-navicon</span> ',
        html: '<span><i class="fa fa-navicon"></i> fa fa-navicon</span> ',
        title: 'fa fa-navicon'
      },
      {
        id: 469,
        text: '<span><i class="fa fa-neuter"></i> fa fa-neuter</span> ',
        html: '<span><i class="fa fa-neuter"></i> fa fa-neuter</span> ',
        title: 'fa fa-neuter'
      },
      {
        id: 470,
        text: '<span><i class="fa fa-newspaper-o"></i> fa fa-newspaper-o</span> ',
        html: '<span><i class="fa fa-newspaper-o"></i> fa fa-newspaper-o</span> ',
        title: 'fa fa-newspaper-o'
      },
      {
        id: 471,
        text: '<span><i class="fa fa-object-group"></i> fa fa-object-group</span> ',
        html: '<span><i class="fa fa-object-group"></i> fa fa-object-group</span> ',
        title: 'fa fa-object-group'
      },
      {
        id: 472,
        text: '<span><i class="fa fa-object-ungroup"></i> fa fa-object-ungroup</span> ',
        html: '<span><i class="fa fa-object-ungroup"></i> fa fa-object-ungroup</span> ',
        title: 'fa fa-object-ungroup'
      },
      {
        id: 473,
        text: '<span><i class="fa fa-odnoklassniki"></i> fa fa-odnoklassniki</span> ',
        html: '<span><i class="fa fa-odnoklassniki"></i> fa fa-odnoklassniki</span> ',
        title: 'fa fa-odnoklassniki'
      },
      {
        id: 474,
        text: '<span><i class="fa fa-odnoklassniki-square"></i> fa fa-odnoklassniki-square</span> ',
        html: '<span><i class="fa fa-odnoklassniki-square"></i> fa fa-odnoklassniki-square</span> ',
        title: 'fa fa-odnoklassniki-square'
      },
      {
        id: 475,
        text: '<span><i class="fa fa-opencart"></i> fa fa-opencart</span> ',
        html: '<span><i class="fa fa-opencart"></i> fa fa-opencart</span> ',
        title: 'fa fa-opencart'
      },
      {
        id: 476,
        text: '<span><i class="fa fa-openid"></i> fa fa-openid</span> ',
        html: '<span><i class="fa fa-openid"></i> fa fa-openid</span> ',
        title: 'fa fa-openid'
      },
      {
        id: 477,
        text: '<span><i class="fa fa-opera"></i> fa fa-opera</span> ',
        html: '<span><i class="fa fa-opera"></i> fa fa-opera</span> ',
        title: 'fa fa-opera'
      },
      {
        id: 478,
        text: '<span><i class="fa fa-optin-monster"></i> fa fa-optin-monster</span> ',
        html: '<span><i class="fa fa-optin-monster"></i> fa fa-optin-monster</span> ',
        title: 'fa fa-optin-monster'
      },
      {
        id: 479,
        text: '<span><i class="fa fa-outdent"></i> fa fa-outdent</span> ',
        html: '<span><i class="fa fa-outdent"></i> fa fa-outdent</span> ',
        title: 'fa fa-outdent'
      },
      {
        id: 480,
        text: '<span><i class="fa fa-pagelines"></i> fa fa-pagelines</span> ',
        html: '<span><i class="fa fa-pagelines"></i> fa fa-pagelines</span> ',
        title: 'fa fa-pagelines'
      },
      {
        id: 481,
        text: '<span><i class="fa fa-paint-brush"></i> fa fa-paint-brush</span> ',
        html: '<span><i class="fa fa-paint-brush"></i> fa fa-paint-brush</span> ',
        title: 'fa fa-paint-brush'
      },
      {
        id: 482,
        text: '<span><i class="fa fa-paper-plane"></i> fa fa-paper-plane</span> ',
        html: '<span><i class="fa fa-paper-plane"></i> fa fa-paper-plane</span> ',
        title: 'fa fa-paper-plane'
      },
      {
        id: 483,
        text: '<span><i class="fa fa-paper-plane-o"></i> fa fa-paper-plane-o</span> ',
        html: '<span><i class="fa fa-paper-plane-o"></i> fa fa-paper-plane-o</span> ',
        title: 'fa fa-paper-plane-o'
      },
      {
        id: 484,
        text: '<span><i class="fa fa-paperclip"></i> fa fa-paperclip</span> ',
        html: '<span><i class="fa fa-paperclip"></i> fa fa-paperclip</span> ',
        title: 'fa fa-paperclip'
      },
      {
        id: 485,
        text: '<span><i class="fa fa-paragraph"></i> fa fa-paragraph</span> ',
        html: '<span><i class="fa fa-paragraph"></i> fa fa-paragraph</span> ',
        title: 'fa fa-paragraph'
      },
      {
        id: 486,
        text: '<span><i class="fa fa-paste"></i> fa fa-paste</span> ',
        html: '<span><i class="fa fa-paste"></i> fa fa-paste</span> ',
        title: 'fa fa-paste'
      },
      {
        id: 487,
        text: '<span><i class="fa fa-pause"></i> fa fa-pause</span> ',
        html: '<span><i class="fa fa-pause"></i> fa fa-pause</span> ',
        title: 'fa fa-pause'
      },
      {
        id: 488,
        text: '<span><i class="fa fa-pause-circle"></i> fa fa-pause-circle</span> ',
        html: '<span><i class="fa fa-pause-circle"></i> fa fa-pause-circle</span> ',
        title: 'fa fa-pause-circle'
      },
      {
        id: 489,
        text: '<span><i class="fa fa-pause-circle-o"></i> fa fa-pause-circle-o</span> ',
        html: '<span><i class="fa fa-pause-circle-o"></i> fa fa-pause-circle-o</span> ',
        title: 'fa fa-pause-circle-o'
      },
      {
        id: 490,
        text: '<span><i class="fa fa-paw"></i> fa fa-paw</span> ',
        html: '<span><i class="fa fa-paw"></i> fa fa-paw</span> ',
        title: 'fa fa-paw'
      },
      {
        id: 491,
        text: '<span><i class="fa fa-paypal"></i> fa fa-paypal</span> ',
        html: '<span><i class="fa fa-paypal"></i> fa fa-paypal</span> ',
        title: 'fa fa-paypal'
      },
      {
        id: 492,
        text: '<span><i class="fa fa-pencil"></i> fa fa-pencil</span> ',
        html: '<span><i class="fa fa-pencil"></i> fa fa-pencil</span> ',
        title: 'fa fa-pencil'
      },
      {
        id: 493,
        text: '<span><i class="fa fa-pencil-square"></i> fa fa-pencil-square</span> ',
        html: '<span><i class="fa fa-pencil-square"></i> fa fa-pencil-square</span> ',
        title: 'fa fa-pencil-square'
      },
      {
        id: 494,
        text: '<span><i class="fa fa-pencil-square-o"></i> fa fa-pencil-square-o</span> ',
        html: '<span><i class="fa fa-pencil-square-o"></i> fa fa-pencil-square-o</span> ',
        title: 'fa fa-pencil-square-o'
      },
      {
        id: 495,
        text: '<span><i class="fa fa-percent"></i> fa fa-percent</span> ',
        html: '<span><i class="fa fa-percent"></i> fa fa-percent</span> ',
        title: 'fa fa-percent'
      },
      {
        id: 496,
        text: '<span><i class="fa fa-phone"></i> fa fa-phone</span> ',
        html: '<span><i class="fa fa-phone"></i> fa fa-phone</span> ',
        title: 'fa fa-phone'
      },
      {
        id: 497,
        text: '<span><i class="fa fa-phone-square"></i> fa fa-phone-square</span> ',
        html: '<span><i class="fa fa-phone-square"></i> fa fa-phone-square</span> ',
        title: 'fa fa-phone-square'
      },
      {
        id: 498,
        text: '<span><i class="fa fa-photo"></i> fa fa-photo</span> ',
        html: '<span><i class="fa fa-photo"></i> fa fa-photo</span> ',
        title: 'fa fa-photo'
      },
      {
        id: 499,
        text: '<span><i class="fa fa-picture-o"></i> fa fa-picture-o</span> ',
        html: '<span><i class="fa fa-picture-o"></i> fa fa-picture-o</span> ',
        title: 'fa fa-picture-o'
      },
      {
        id: 500,
        text: '<span><i class="fa fa-pie-chart"></i> fa fa-pie-chart</span> ',
        html: '<span><i class="fa fa-pie-chart"></i> fa fa-pie-chart</span> ',
        title: 'fa fa-pie-chart'
      },
      {
        id: 501,
        text: '<span><i class="fa fa-pied-piper"></i> fa fa-pied-piper</span> ',
        html: '<span><i class="fa fa-pied-piper"></i> fa fa-pied-piper</span> ',
        title: 'fa fa-pied-piper'
      },
      {
        id: 502,
        text: '<span><i class="fa fa-pied-piper-alt"></i> fa fa-pied-piper-alt</span> ',
        html: '<span><i class="fa fa-pied-piper-alt"></i> fa fa-pied-piper-alt</span> ',
        title: 'fa fa-pied-piper-alt'
      },
      {
        id: 503,
        text: '<span><i class="fa fa-pied-piper-pp"></i> fa fa-pied-piper-pp</span> ',
        html: '<span><i class="fa fa-pied-piper-pp"></i> fa fa-pied-piper-pp</span> ',
        title: 'fa fa-pied-piper-pp'
      },
      {
        id: 504,
        text: '<span><i class="fa fa-pinterest"></i> fa fa-pinterest</span> ',
        html: '<span><i class="fa fa-pinterest"></i> fa fa-pinterest</span> ',
        title: 'fa fa-pinterest'
      },
      {
        id: 505,
        text: '<span><i class="fa fa-pinterest-p"></i> fa fa-pinterest-p</span> ',
        html: '<span><i class="fa fa-pinterest-p"></i> fa fa-pinterest-p</span> ',
        title: 'fa fa-pinterest-p'
      },
      {
        id: 506,
        text: '<span><i class="fa fa-pinterest-square"></i> fa fa-pinterest-square</span> ',
        html: '<span><i class="fa fa-pinterest-square"></i> fa fa-pinterest-square</span> ',
        title: 'fa fa-pinterest-square'
      },
      {
        id: 507,
        text: '<span><i class="fa fa-plane"></i> fa fa-plane</span> ',
        html: '<span><i class="fa fa-plane"></i> fa fa-plane</span> ',
        title: 'fa fa-plane'
      },
      {
        id: 508,
        text: '<span><i class="fa fa-play"></i> fa fa-play</span> ',
        html: '<span><i class="fa fa-play"></i> fa fa-play</span> ',
        title: 'fa fa-play'
      },
      {
        id: 509,
        text: '<span><i class="fa fa-play-circle"></i> fa fa-play-circle</span> ',
        html: '<span><i class="fa fa-play-circle"></i> fa fa-play-circle</span> ',
        title: 'fa fa-play-circle'
      },
      {
        id: 510,
        text: '<span><i class="fa fa-play-circle-o"></i> fa fa-play-circle-o</span> ',
        html: '<span><i class="fa fa-play-circle-o"></i> fa fa-play-circle-o</span> ',
        title: 'fa fa-play-circle-o'
      },
      {
        id: 511,
        text: '<span><i class="fa fa-plug"></i> fa fa-plug</span> ',
        html: '<span><i class="fa fa-plug"></i> fa fa-plug</span> ',
        title: 'fa fa-plug'
      },
      {
        id: 512,
        text: '<span><i class="fa fa-plus"></i> fa fa-plus</span> ',
        html: '<span><i class="fa fa-plus"></i> fa fa-plus</span> ',
        title: 'fa fa-plus'
      },
      {
        id: 513,
        text: '<span><i class="fa fa-plus-circle"></i> fa fa-plus-circle</span> ',
        html: '<span><i class="fa fa-plus-circle"></i> fa fa-plus-circle</span> ',
        title: 'fa fa-plus-circle'
      },
      {
        id: 514,
        text: '<span><i class="fa fa-plus-square"></i> fa fa-plus-square</span> ',
        html: '<span><i class="fa fa-plus-square"></i> fa fa-plus-square</span> ',
        title: 'fa fa-plus-square'
      },
      {
        id: 515,
        text: '<span><i class="fa fa-plus-square-o"></i> fa fa-plus-square-o</span> ',
        html: '<span><i class="fa fa-plus-square-o"></i> fa fa-plus-square-o</span> ',
        title: 'fa fa-plus-square-o'
      },
      {
        id: 516,
        text: '<span><i class="fa fa-podcast"></i> fa fa-podcast</span> ',
        html: '<span><i class="fa fa-podcast"></i> fa fa-podcast</span> ',
        title: 'fa fa-podcast'
      },
      {
        id: 517,
        text: '<span><i class="fa fa-power-off"></i> fa fa-power-off</span> ',
        html: '<span><i class="fa fa-power-off"></i> fa fa-power-off</span> ',
        title: 'fa fa-power-off'
      },
      {
        id: 518,
        text: '<span><i class="fa fa-print"></i> fa fa-print</span> ',
        html: '<span><i class="fa fa-print"></i> fa fa-print</span> ',
        title: 'fa fa-print'
      },
      {
        id: 519,
        text: '<span><i class="fa fa-product-hunt"></i> fa fa-product-hunt</span> ',
        html: '<span><i class="fa fa-product-hunt"></i> fa fa-product-hunt</span> ',
        title: 'fa fa-product-hunt'
      },
      {
        id: 520,
        text: '<span><i class="fa fa-puzzle-piece"></i> fa fa-puzzle-piece</span> ',
        html: '<span><i class="fa fa-puzzle-piece"></i> fa fa-puzzle-piece</span> ',
        title: 'fa fa-puzzle-piece'
      },
      {
        id: 521,
        text: '<span><i class="fa fa-qq"></i> fa fa-qq</span> ',
        html: '<span><i class="fa fa-qq"></i> fa fa-qq</span> ',
        title: 'fa fa-qq'
      },
      {
        id: 522,
        text: '<span><i class="fa fa-qrcode"></i> fa fa-qrcode</span> ',
        html: '<span><i class="fa fa-qrcode"></i> fa fa-qrcode</span> ',
        title: 'fa fa-qrcode'
      },
      {
        id: 523,
        text: '<span><i class="fa fa-question"></i> fa fa-question</span> ',
        html: '<span><i class="fa fa-question"></i> fa fa-question</span> ',
        title: 'fa fa-question'
      },
      {
        id: 524,
        text: '<span><i class="fa fa-question-circle"></i> fa fa-question-circle</span> ',
        html: '<span><i class="fa fa-question-circle"></i> fa fa-question-circle</span> ',
        title: 'fa fa-question-circle'
      },
      {
        id: 525,
        text: '<span><i class="fa fa-question-circle-o"></i> fa fa-question-circle-o</span> ',
        html: '<span><i class="fa fa-question-circle-o"></i> fa fa-question-circle-o</span> ',
        title: 'fa fa-question-circle-o'
      },
      {
        id: 526,
        text: '<span><i class="fa fa-quora"></i> fa fa-quora</span> ',
        html: '<span><i class="fa fa-quora"></i> fa fa-quora</span> ',
        title: 'fa fa-quora'
      },
      {
        id: 527,
        text: '<span><i class="fa fa-quote-left"></i> fa fa-quote-left</span> ',
        html: '<span><i class="fa fa-quote-left"></i> fa fa-quote-left</span> ',
        title: 'fa fa-quote-left'
      },
      {
        id: 528,
        text: '<span><i class="fa fa-quote-right"></i> fa fa-quote-right</span> ',
        html: '<span><i class="fa fa-quote-right"></i> fa fa-quote-right</span> ',
        title: 'fa fa-quote-right'
      },
      {
        id: 529,
        text: '<span><i class="fa fa-ra"></i> fa fa-ra</span> ',
        html: '<span><i class="fa fa-ra"></i> fa fa-ra</span> ',
        title: 'fa fa-ra'
      },
      {
        id: 530,
        text: '<span><i class="fa fa-random"></i> fa fa-random</span> ',
        html: '<span><i class="fa fa-random"></i> fa fa-random</span> ',
        title: 'fa fa-random'
      },
      {
        id: 531,
        text: '<span><i class="fa fa-ravelry"></i> fa fa-ravelry</span> ',
        html: '<span><i class="fa fa-ravelry"></i> fa fa-ravelry</span> ',
        title: 'fa fa-ravelry'
      },
      {
        id: 532,
        text: '<span><i class="fa fa-rebel"></i> fa fa-rebel</span> ',
        html: '<span><i class="fa fa-rebel"></i> fa fa-rebel</span> ',
        title: 'fa fa-rebel'
      },
      {
        id: 533,
        text: '<span><i class="fa fa-recycle"></i> fa fa-recycle</span> ',
        html: '<span><i class="fa fa-recycle"></i> fa fa-recycle</span> ',
        title: 'fa fa-recycle'
      },
      {
        id: 534,
        text: '<span><i class="fa fa-reddit"></i> fa fa-reddit</span> ',
        html: '<span><i class="fa fa-reddit"></i> fa fa-reddit</span> ',
        title: 'fa fa-reddit'
      },
      {
        id: 535,
        text: '<span><i class="fa fa-reddit-alien"></i> fa fa-reddit-alien</span> ',
        html: '<span><i class="fa fa-reddit-alien"></i> fa fa-reddit-alien</span> ',
        title: 'fa fa-reddit-alien'
      },
      {
        id: 536,
        text: '<span><i class="fa fa-reddit-square"></i> fa fa-reddit-square</span> ',
        html: '<span><i class="fa fa-reddit-square"></i> fa fa-reddit-square</span> ',
        title: 'fa fa-reddit-square'
      },
      {
        id: 537,
        text: '<span><i class="fa fa-refresh"></i> fa fa-refresh</span> ',
        html: '<span><i class="fa fa-refresh"></i> fa fa-refresh</span> ',
        title: 'fa fa-refresh'
      },
      {
        id: 538,
        text: '<span><i class="fa fa-registered"></i> fa fa-registered</span> ',
        html: '<span><i class="fa fa-registered"></i> fa fa-registered</span> ',
        title: 'fa fa-registered'
      },
      {
        id: 539,
        text: '<span><i class="fa fa-remove"></i> fa fa-remove</span> ',
        html: '<span><i class="fa fa-remove"></i> fa fa-remove</span> ',
        title: 'fa fa-remove'
      },
      {
        id: 540,
        text: '<span><i class="fa fa-renren"></i> fa fa-renren</span> ',
        html: '<span><i class="fa fa-renren"></i> fa fa-renren</span> ',
        title: 'fa fa-renren'
      },
      {
        id: 541,
        text: '<span><i class="fa fa-reorder"></i> fa fa-reorder</span> ',
        html: '<span><i class="fa fa-reorder"></i> fa fa-reorder</span> ',
        title: 'fa fa-reorder'
      },
      {
        id: 542,
        text: '<span><i class="fa fa-repeat"></i> fa fa-repeat</span> ',
        html: '<span><i class="fa fa-repeat"></i> fa fa-repeat</span> ',
        title: 'fa fa-repeat'
      },
      {
        id: 543,
        text: '<span><i class="fa fa-reply"></i> fa fa-reply</span> ',
        html: '<span><i class="fa fa-reply"></i> fa fa-reply</span> ',
        title: 'fa fa-reply'
      },
      {
        id: 544,
        text: '<span><i class="fa fa-reply-all"></i> fa fa-reply-all</span> ',
        html: '<span><i class="fa fa-reply-all"></i> fa fa-reply-all</span> ',
        title: 'fa fa-reply-all'
      },
      {
        id: 545,
        text: '<span><i class="fa fa-resistance"></i> fa fa-resistance</span> ',
        html: '<span><i class="fa fa-resistance"></i> fa fa-resistance</span> ',
        title: 'fa fa-resistance'
      },
      {
        id: 546,
        text: '<span><i class="fa fa-retweet"></i> fa fa-retweet</span> ',
        html: '<span><i class="fa fa-retweet"></i> fa fa-retweet</span> ',
        title: 'fa fa-retweet'
      },
      {
        id: 547,
        text: '<span><i class="fa fa-rmb"></i> fa fa-rmb</span> ',
        html: '<span><i class="fa fa-rmb"></i> fa fa-rmb</span> ',
        title: 'fa fa-rmb'
      },
      {
        id: 548,
        text: '<span><i class="fa fa-road"></i> fa fa-road</span> ',
        html: '<span><i class="fa fa-road"></i> fa fa-road</span> ',
        title: 'fa fa-road'
      },
      {
        id: 549,
        text: '<span><i class="fa fa-rocket"></i> fa fa-rocket</span> ',
        html: '<span><i class="fa fa-rocket"></i> fa fa-rocket</span> ',
        title: 'fa fa-rocket'
      },
      {
        id: 550,
        text: '<span><i class="fa fa-rotate-left"></i> fa fa-rotate-left</span> ',
        html: '<span><i class="fa fa-rotate-left"></i> fa fa-rotate-left</span> ',
        title: 'fa fa-rotate-left'
      },
      {
        id: 551,
        text: '<span><i class="fa fa-rotate-right"></i> fa fa-rotate-right</span> ',
        html: '<span><i class="fa fa-rotate-right"></i> fa fa-rotate-right</span> ',
        title: 'fa fa-rotate-right'
      },
      {
        id: 552,
        text: '<span><i class="fa fa-rouble"></i> fa fa-rouble</span> ',
        html: '<span><i class="fa fa-rouble"></i> fa fa-rouble</span> ',
        title: 'fa fa-rouble'
      },
      {
        id: 553,
        text: '<span><i class="fa fa-rss"></i> fa fa-rss</span> ',
        html: '<span><i class="fa fa-rss"></i> fa fa-rss</span> ',
        title: 'fa fa-rss'
      },
      {
        id: 554,
        text: '<span><i class="fa fa-rss-square"></i> fa fa-rss-square</span> ',
        html: '<span><i class="fa fa-rss-square"></i> fa fa-rss-square</span> ',
        title: 'fa fa-rss-square'
      },
      {
        id: 555,
        text: '<span><i class="fa fa-rub"></i> fa fa-rub</span> ',
        html: '<span><i class="fa fa-rub"></i> fa fa-rub</span> ',
        title: 'fa fa-rub'
      },
      {
        id: 556,
        text: '<span><i class="fa fa-ruble"></i> fa fa-ruble</span> ',
        html: '<span><i class="fa fa-ruble"></i> fa fa-ruble</span> ',
        title: 'fa fa-ruble'
      },
      {
        id: 557,
        text: '<span><i class="fa fa-rupee"></i> fa fa-rupee</span> ',
        html: '<span><i class="fa fa-rupee"></i> fa fa-rupee</span> ',
        title: 'fa fa-rupee'
      },
      {
        id: 558,
        text: '<span><i class="fa fa-s15"></i> fa fa-s15</span> ',
        html: '<span><i class="fa fa-s15"></i> fa fa-s15</span> ',
        title: 'fa fa-s15'
      },
      {
        id: 559,
        text: '<span><i class="fa fa-safari"></i> fa fa-safari</span> ',
        html: '<span><i class="fa fa-safari"></i> fa fa-safari</span> ',
        title: 'fa fa-safari'
      },
      {
        id: 560,
        text: '<span><i class="fa fa-save"></i> fa fa-save</span> ',
        html: '<span><i class="fa fa-save"></i> fa fa-save</span> ',
        title: 'fa fa-save'
      },
      {
        id: 561,
        text: '<span><i class="fa fa-scissors"></i> fa fa-scissors</span> ',
        html: '<span><i class="fa fa-scissors"></i> fa fa-scissors</span> ',
        title: 'fa fa-scissors'
      },
      {
        id: 562,
        text: '<span><i class="fa fa-scribd"></i> fa fa-scribd</span> ',
        html: '<span><i class="fa fa-scribd"></i> fa fa-scribd</span> ',
        title: 'fa fa-scribd'
      },
      {
        id: 563,
        text: '<span><i class="fa fa-search"></i> fa fa-search</span> ',
        html: '<span><i class="fa fa-search"></i> fa fa-search</span> ',
        title: 'fa fa-search'
      },
      {
        id: 564,
        text: '<span><i class="fa fa-search-minus"></i> fa fa-search-minus</span> ',
        html: '<span><i class="fa fa-search-minus"></i> fa fa-search-minus</span> ',
        title: 'fa fa-search-minus'
      },
      {
        id: 565,
        text: '<span><i class="fa fa-search-plus"></i> fa fa-search-plus</span> ',
        html: '<span><i class="fa fa-search-plus"></i> fa fa-search-plus</span> ',
        title: 'fa fa-search-plus'
      },
      {
        id: 566,
        text: '<span><i class="fa fa-sellsy"></i> fa fa-sellsy</span> ',
        html: '<span><i class="fa fa-sellsy"></i> fa fa-sellsy</span> ',
        title: 'fa fa-sellsy'
      },
      {
        id: 567,
        text: '<span><i class="fa fa-send"></i> fa fa-send</span> ',
        html: '<span><i class="fa fa-send"></i> fa fa-send</span> ',
        title: 'fa fa-send'
      },
      {
        id: 568,
        text: '<span><i class="fa fa-send-o"></i> fa fa-send-o</span> ',
        html: '<span><i class="fa fa-send-o"></i> fa fa-send-o</span> ',
        title: 'fa fa-send-o'
      },
      {
        id: 569,
        text: '<span><i class="fa fa-server"></i> fa fa-server</span> ',
        html: '<span><i class="fa fa-server"></i> fa fa-server</span> ',
        title: 'fa fa-server'
      },
      {
        id: 570,
        text: '<span><i class="fa fa-share"></i> fa fa-share</span> ',
        html: '<span><i class="fa fa-share"></i> fa fa-share</span> ',
        title: 'fa fa-share'
      },
      {
        id: 571,
        text: '<span><i class="fa fa-share-alt"></i> fa fa-share-alt</span> ',
        html: '<span><i class="fa fa-share-alt"></i> fa fa-share-alt</span> ',
        title: 'fa fa-share-alt'
      },
      {
        id: 572,
        text: '<span><i class="fa fa-share-alt-square"></i> fa fa-share-alt-square</span> ',
        html: '<span><i class="fa fa-share-alt-square"></i> fa fa-share-alt-square</span> ',
        title: 'fa fa-share-alt-square'
      },
      {
        id: 573,
        text: '<span><i class="fa fa-share-square"></i> fa fa-share-square</span> ',
        html: '<span><i class="fa fa-share-square"></i> fa fa-share-square</span> ',
        title: 'fa fa-share-square'
      },
      {
        id: 574,
        text: '<span><i class="fa fa-share-square-o"></i> fa fa-share-square-o</span> ',
        html: '<span><i class="fa fa-share-square-o"></i> fa fa-share-square-o</span> ',
        title: 'fa fa-share-square-o'
      },
      {
        id: 575,
        text: '<span><i class="fa fa-shekel"></i> fa fa-shekel</span> ',
        html: '<span><i class="fa fa-shekel"></i> fa fa-shekel</span> ',
        title: 'fa fa-shekel'
      },
      {
        id: 576,
        text: '<span><i class="fa fa-sheqel"></i> fa fa-sheqel</span> ',
        html: '<span><i class="fa fa-sheqel"></i> fa fa-sheqel</span> ',
        title: 'fa fa-sheqel'
      },
      {
        id: 577,
        text: '<span><i class="fa fa-shield"></i> fa fa-shield</span> ',
        html: '<span><i class="fa fa-shield"></i> fa fa-shield</span> ',
        title: 'fa fa-shield'
      },
      {
        id: 578,
        text: '<span><i class="fa fa-ship"></i> fa fa-ship</span> ',
        html: '<span><i class="fa fa-ship"></i> fa fa-ship</span> ',
        title: 'fa fa-ship'
      },
      {
        id: 579,
        text: '<span><i class="fa fa-shirtsinbulk"></i> fa fa-shirtsinbulk</span> ',
        html: '<span><i class="fa fa-shirtsinbulk"></i> fa fa-shirtsinbulk</span> ',
        title: 'fa fa-shirtsinbulk'
      },
      {
        id: 580,
        text: '<span><i class="fa fa-shopping-bag"></i> fa fa-shopping-bag</span> ',
        html: '<span><i class="fa fa-shopping-bag"></i> fa fa-shopping-bag</span> ',
        title: 'fa fa-shopping-bag'
      },
      {
        id: 581,
        text: '<span><i class="fa fa-shopping-basket"></i> fa fa-shopping-basket</span> ',
        html: '<span><i class="fa fa-shopping-basket"></i> fa fa-shopping-basket</span> ',
        title: 'fa fa-shopping-basket'
      },
      {
        id: 582,
        text: '<span><i class="fa fa-shopping-cart"></i> fa fa-shopping-cart</span> ',
        html: '<span><i class="fa fa-shopping-cart"></i> fa fa-shopping-cart</span> ',
        title: 'fa fa-shopping-cart'
      },
      {
        id: 583,
        text: '<span><i class="fa fa-shower"></i> fa fa-shower</span> ',
        html: '<span><i class="fa fa-shower"></i> fa fa-shower</span> ',
        title: 'fa fa-shower'
      },
      {
        id: 584,
        text: '<span><i class="fa fa-sign-in"></i> fa fa-sign-in</span> ',
        html: '<span><i class="fa fa-sign-in"></i> fa fa-sign-in</span> ',
        title: 'fa fa-sign-in'
      },
      {
        id: 585,
        text: '<span><i class="fa fa-sign-language"></i> fa fa-sign-language</span> ',
        html: '<span><i class="fa fa-sign-language"></i> fa fa-sign-language</span> ',
        title: 'fa fa-sign-language'
      },
      {
        id: 586,
        text: '<span><i class="fa fa-sign-out"></i> fa fa-sign-out</span> ',
        html: '<span><i class="fa fa-sign-out"></i> fa fa-sign-out</span> ',
        title: 'fa fa-sign-out'
      },
      {
        id: 587,
        text: '<span><i class="fa fa-signal"></i> fa fa-signal</span> ',
        html: '<span><i class="fa fa-signal"></i> fa fa-signal</span> ',
        title: 'fa fa-signal'
      },
      {
        id: 588,
        text: '<span><i class="fa fa-signing"></i> fa fa-signing</span> ',
        html: '<span><i class="fa fa-signing"></i> fa fa-signing</span> ',
        title: 'fa fa-signing'
      },
      {
        id: 589,
        text: '<span><i class="fa fa-simplybuilt"></i> fa fa-simplybuilt</span> ',
        html: '<span><i class="fa fa-simplybuilt"></i> fa fa-simplybuilt</span> ',
        title: 'fa fa-simplybuilt'
      },
      {
        id: 590,
        text: '<span><i class="fa fa-sitemap"></i> fa fa-sitemap</span> ',
        html: '<span><i class="fa fa-sitemap"></i> fa fa-sitemap</span> ',
        title: 'fa fa-sitemap'
      },
      {
        id: 591,
        text: '<span><i class="fa fa-skyatlas"></i> fa fa-skyatlas</span> ',
        html: '<span><i class="fa fa-skyatlas"></i> fa fa-skyatlas</span> ',
        title: 'fa fa-skyatlas'
      },
      {
        id: 592,
        text: '<span><i class="fa fa-skype"></i> fa fa-skype</span> ',
        html: '<span><i class="fa fa-skype"></i> fa fa-skype</span> ',
        title: 'fa fa-skype'
      },
      {
        id: 593,
        text: '<span><i class="fa fa-slack"></i> fa fa-slack</span> ',
        html: '<span><i class="fa fa-slack"></i> fa fa-slack</span> ',
        title: 'fa fa-slack'
      },
      {
        id: 594,
        text: '<span><i class="fa fa-sliders"></i> fa fa-sliders</span> ',
        html: '<span><i class="fa fa-sliders"></i> fa fa-sliders</span> ',
        title: 'fa fa-sliders'
      },
      {
        id: 595,
        text: '<span><i class="fa fa-slideshare"></i> fa fa-slideshare</span> ',
        html: '<span><i class="fa fa-slideshare"></i> fa fa-slideshare</span> ',
        title: 'fa fa-slideshare'
      },
      {
        id: 596,
        text: '<span><i class="fa fa-smile-o"></i> fa fa-smile-o</span> ',
        html: '<span><i class="fa fa-smile-o"></i> fa fa-smile-o</span> ',
        title: 'fa fa-smile-o'
      },
      {
        id: 597,
        text: '<span><i class="fa fa-snapchat"></i> fa fa-snapchat</span> ',
        html: '<span><i class="fa fa-snapchat"></i> fa fa-snapchat</span> ',
        title: 'fa fa-snapchat'
      },
      {
        id: 598,
        text: '<span><i class="fa fa-snapchat-ghost"></i> fa fa-snapchat-ghost</span> ',
        html: '<span><i class="fa fa-snapchat-ghost"></i> fa fa-snapchat-ghost</span> ',
        title: 'fa fa-snapchat-ghost'
      },
      {
        id: 599,
        text: '<span><i class="fa fa-snapchat-square"></i> fa fa-snapchat-square</span> ',
        html: '<span><i class="fa fa-snapchat-square"></i> fa fa-snapchat-square</span> ',
        title: 'fa fa-snapchat-square'
      },
      {
        id: 600,
        text: '<span><i class="fa fa-snowflake-o"></i> fa fa-snowflake-o</span> ',
        html: '<span><i class="fa fa-snowflake-o"></i> fa fa-snowflake-o</span> ',
        title: 'fa fa-snowflake-o'
      },
      {
        id: 601,
        text: '<span><i class="fa fa-soccer-ball-o"></i> fa fa-soccer-ball-o</span> ',
        html: '<span><i class="fa fa-soccer-ball-o"></i> fa fa-soccer-ball-o</span> ',
        title: 'fa fa-soccer-ball-o'
      },
      {
        id: 602,
        text: '<span><i class="fa fa-sort"></i> fa fa-sort</span> ',
        html: '<span><i class="fa fa-sort"></i> fa fa-sort</span> ',
        title: 'fa fa-sort'
      },
      {
        id: 603,
        text: '<span><i class="fa fa-sort-alpha-asc"></i> fa fa-sort-alpha-asc</span> ',
        html: '<span><i class="fa fa-sort-alpha-asc"></i> fa fa-sort-alpha-asc</span> ',
        title: 'fa fa-sort-alpha-asc'
      },
      {
        id: 604,
        text: '<span><i class="fa fa-sort-alpha-desc"></i> fa fa-sort-alpha-desc</span> ',
        html: '<span><i class="fa fa-sort-alpha-desc"></i> fa fa-sort-alpha-desc</span> ',
        title: 'fa fa-sort-alpha-desc'
      },
      {
        id: 605,
        text: '<span><i class="fa fa-sort-amount-asc"></i> fa fa-sort-amount-asc</span> ',
        html: '<span><i class="fa fa-sort-amount-asc"></i> fa fa-sort-amount-asc</span> ',
        title: 'fa fa-sort-amount-asc'
      },
      {
        id: 606,
        text: '<span><i class="fa fa-sort-amount-desc"></i> fa fa-sort-amount-desc</span> ',
        html: '<span><i class="fa fa-sort-amount-desc"></i> fa fa-sort-amount-desc</span> ',
        title: 'fa fa-sort-amount-desc'
      },
      {
        id: 607,
        text: '<span><i class="fa fa-sort-asc"></i> fa fa-sort-asc</span> ',
        html: '<span><i class="fa fa-sort-asc"></i> fa fa-sort-asc</span> ',
        title: 'fa fa-sort-asc'
      },
      {
        id: 608,
        text: '<span><i class="fa fa-sort-desc"></i> fa fa-sort-desc</span> ',
        html: '<span><i class="fa fa-sort-desc"></i> fa fa-sort-desc</span> ',
        title: 'fa fa-sort-desc'
      },
      {
        id: 609,
        text: '<span><i class="fa fa-sort-down"></i> fa fa-sort-down</span> ',
        html: '<span><i class="fa fa-sort-down"></i> fa fa-sort-down</span> ',
        title: 'fa fa-sort-down'
      },
      {
        id: 610,
        text: '<span><i class="fa fa-sort-numeric-asc"></i> fa fa-sort-numeric-asc</span> ',
        html: '<span><i class="fa fa-sort-numeric-asc"></i> fa fa-sort-numeric-asc</span> ',
        title: 'fa fa-sort-numeric-asc'
      },
      {
        id: 611,
        text: '<span><i class="fa fa-sort-numeric-desc"></i> fa fa-sort-numeric-desc</span> ',
        html: '<span><i class="fa fa-sort-numeric-desc"></i> fa fa-sort-numeric-desc</span> ',
        title: 'fa fa-sort-numeric-desc'
      },
      {
        id: 612,
        text: '<span><i class="fa fa-sort-up"></i> fa fa-sort-up</span> ',
        html: '<span><i class="fa fa-sort-up"></i> fa fa-sort-up</span> ',
        title: 'fa fa-sort-up'
      },
      {
        id: 613,
        text: '<span><i class="fa fa-soundcloud"></i> fa fa-soundcloud</span> ',
        html: '<span><i class="fa fa-soundcloud"></i> fa fa-soundcloud</span> ',
        title: 'fa fa-soundcloud'
      },
      {
        id: 614,
        text: '<span><i class="fa fa-space-shuttle"></i> fa fa-space-shuttle</span> ',
        html: '<span><i class="fa fa-space-shuttle"></i> fa fa-space-shuttle</span> ',
        title: 'fa fa-space-shuttle'
      },
      {
        id: 615,
        text: '<span><i class="fa fa-spinner"></i> fa fa-spinner</span> ',
        html: '<span><i class="fa fa-spinner"></i> fa fa-spinner</span> ',
        title: 'fa fa-spinner'
      },
      {
        id: 616,
        text: '<span><i class="fa fa-spoon"></i> fa fa-spoon</span> ',
        html: '<span><i class="fa fa-spoon"></i> fa fa-spoon</span> ',
        title: 'fa fa-spoon'
      },
      {
        id: 617,
        text: '<span><i class="fa fa-spotify"></i> fa fa-spotify</span> ',
        html: '<span><i class="fa fa-spotify"></i> fa fa-spotify</span> ',
        title: 'fa fa-spotify'
      },
      {
        id: 618,
        text: '<span><i class="fa fa-square"></i> fa fa-square</span> ',
        html: '<span><i class="fa fa-square"></i> fa fa-square</span> ',
        title: 'fa fa-square'
      },
      {
        id: 619,
        text: '<span><i class="fa fa-square-o"></i> fa fa-square-o</span> ',
        html: '<span><i class="fa fa-square-o"></i> fa fa-square-o</span> ',
        title: 'fa fa-square-o'
      },
      {
        id: 620,
        text: '<span><i class="fa fa-stack-exchange"></i> fa fa-stack-exchange</span> ',
        html: '<span><i class="fa fa-stack-exchange"></i> fa fa-stack-exchange</span> ',
        title: 'fa fa-stack-exchange'
      },
      {
        id: 621,
        text: '<span><i class="fa fa-stack-overflow"></i> fa fa-stack-overflow</span> ',
        html: '<span><i class="fa fa-stack-overflow"></i> fa fa-stack-overflow</span> ',
        title: 'fa fa-stack-overflow'
      },
      {
        id: 622,
        text: '<span><i class="fa fa-star"></i> fa fa-star</span> ',
        html: '<span><i class="fa fa-star"></i> fa fa-star</span> ',
        title: 'fa fa-star'
      },
      {
        id: 623,
        text: '<span><i class="fa fa-star-half"></i> fa fa-star-half</span> ',
        html: '<span><i class="fa fa-star-half"></i> fa fa-star-half</span> ',
        title: 'fa fa-star-half'
      },
      {
        id: 624,
        text: '<span><i class="fa fa-star-half-empty"></i> fa fa-star-half-empty</span> ',
        html: '<span><i class="fa fa-star-half-empty"></i> fa fa-star-half-empty</span> ',
        title: 'fa fa-star-half-empty'
      },
      {
        id: 625,
        text: '<span><i class="fa fa-star-half-full"></i> fa fa-star-half-full</span> ',
        html: '<span><i class="fa fa-star-half-full"></i> fa fa-star-half-full</span> ',
        title: 'fa fa-star-half-full'
      },
      {
        id: 626,
        text: '<span><i class="fa fa-star-half-o"></i> fa fa-star-half-o</span> ',
        html: '<span><i class="fa fa-star-half-o"></i> fa fa-star-half-o</span> ',
        title: 'fa fa-star-half-o'
      },
      {
        id: 627,
        text: '<span><i class="fa fa-star-o"></i> fa fa-star-o</span> ',
        html: '<span><i class="fa fa-star-o"></i> fa fa-star-o</span> ',
        title: 'fa fa-star-o'
      },
      {
        id: 628,
        text: '<span><i class="fa fa-steam"></i> fa fa-steam</span> ',
        html: '<span><i class="fa fa-steam"></i> fa fa-steam</span> ',
        title: 'fa fa-steam'
      },
      {
        id: 629,
        text: '<span><i class="fa fa-steam-square"></i> fa fa-steam-square</span> ',
        html: '<span><i class="fa fa-steam-square"></i> fa fa-steam-square</span> ',
        title: 'fa fa-steam-square'
      },
      {
        id: 630,
        text: '<span><i class="fa fa-step-backward"></i> fa fa-step-backward</span> ',
        html: '<span><i class="fa fa-step-backward"></i> fa fa-step-backward</span> ',
        title: 'fa fa-step-backward'
      },
      {
        id: 631,
        text: '<span><i class="fa fa-step-forward"></i> fa fa-step-forward</span> ',
        html: '<span><i class="fa fa-step-forward"></i> fa fa-step-forward</span> ',
        title: 'fa fa-step-forward'
      },
      {
        id: 632,
        text: '<span><i class="fa fa-stethoscope"></i> fa fa-stethoscope</span> ',
        html: '<span><i class="fa fa-stethoscope"></i> fa fa-stethoscope</span> ',
        title: 'fa fa-stethoscope'
      },
      {
        id: 633,
        text: '<span><i class="fa fa-sticky-note"></i> fa fa-sticky-note</span> ',
        html: '<span><i class="fa fa-sticky-note"></i> fa fa-sticky-note</span> ',
        title: 'fa fa-sticky-note'
      },
      {
        id: 634,
        text: '<span><i class="fa fa-sticky-note-o"></i> fa fa-sticky-note-o</span> ',
        html: '<span><i class="fa fa-sticky-note-o"></i> fa fa-sticky-note-o</span> ',
        title: 'fa fa-sticky-note-o'
      },
      {
        id: 635,
        text: '<span><i class="fa fa-stop"></i> fa fa-stop</span> ',
        html: '<span><i class="fa fa-stop"></i> fa fa-stop</span> ',
        title: 'fa fa-stop'
      },
      {
        id: 636,
        text: '<span><i class="fa fa-stop-circle"></i> fa fa-stop-circle</span> ',
        html: '<span><i class="fa fa-stop-circle"></i> fa fa-stop-circle</span> ',
        title: 'fa fa-stop-circle'
      },
      {
        id: 637,
        text: '<span><i class="fa fa-stop-circle-o"></i> fa fa-stop-circle-o</span> ',
        html: '<span><i class="fa fa-stop-circle-o"></i> fa fa-stop-circle-o</span> ',
        title: 'fa fa-stop-circle-o'
      },
      {
        id: 638,
        text: '<span><i class="fa fa-street-view"></i> fa fa-street-view</span> ',
        html: '<span><i class="fa fa-street-view"></i> fa fa-street-view</span> ',
        title: 'fa fa-street-view'
      },
      {
        id: 639,
        text: '<span><i class="fa fa-strikethrough"></i> fa fa-strikethrough</span> ',
        html: '<span><i class="fa fa-strikethrough"></i> fa fa-strikethrough</span> ',
        title: 'fa fa-strikethrough'
      },
      {
        id: 640,
        text: '<span><i class="fa fa-stumbleupon"></i> fa fa-stumbleupon</span> ',
        html: '<span><i class="fa fa-stumbleupon"></i> fa fa-stumbleupon</span> ',
        title: 'fa fa-stumbleupon'
      },
      {
        id: 641,
        text: '<span><i class="fa fa-stumbleupon-circle"></i> fa fa-stumbleupon-circle</span> ',
        html: '<span><i class="fa fa-stumbleupon-circle"></i> fa fa-stumbleupon-circle</span> ',
        title: 'fa fa-stumbleupon-circle'
      },
      {
        id: 642,
        text: '<span><i class="fa fa-subscript"></i> fa fa-subscript</span> ',
        html: '<span><i class="fa fa-subscript"></i> fa fa-subscript</span> ',
        title: 'fa fa-subscript'
      },
      {
        id: 643,
        text: '<span><i class="fa fa-subway"></i> fa fa-subway</span> ',
        html: '<span><i class="fa fa-subway"></i> fa fa-subway</span> ',
        title: 'fa fa-subway'
      },
      {
        id: 644,
        text: '<span><i class="fa fa-suitcase"></i> fa fa-suitcase</span> ',
        html: '<span><i class="fa fa-suitcase"></i> fa fa-suitcase</span> ',
        title: 'fa fa-suitcase'
      },
      {
        id: 645,
        text: '<span><i class="fa fa-sun-o"></i> fa fa-sun-o</span> ',
        html: '<span><i class="fa fa-sun-o"></i> fa fa-sun-o</span> ',
        title: 'fa fa-sun-o'
      },
      {
        id: 646,
        text: '<span><i class="fa fa-superpowers"></i> fa fa-superpowers</span> ',
        html: '<span><i class="fa fa-superpowers"></i> fa fa-superpowers</span> ',
        title: 'fa fa-superpowers'
      },
      {
        id: 647,
        text: '<span><i class="fa fa-superscript"></i> fa fa-superscript</span> ',
        html: '<span><i class="fa fa-superscript"></i> fa fa-superscript</span> ',
        title: 'fa fa-superscript'
      },
      {
        id: 648,
        text: '<span><i class="fa fa-support"></i> fa fa-support</span> ',
        html: '<span><i class="fa fa-support"></i> fa fa-support</span> ',
        title: 'fa fa-support'
      },
      {
        id: 649,
        text: '<span><i class="fa fa-table"></i> fa fa-table</span> ',
        html: '<span><i class="fa fa-table"></i> fa fa-table</span> ',
        title: 'fa fa-table'
      },
      {
        id: 650,
        text: '<span><i class="fa fa-tablet"></i> fa fa-tablet</span> ',
        html: '<span><i class="fa fa-tablet"></i> fa fa-tablet</span> ',
        title: 'fa fa-tablet'
      },
      {
        id: 651,
        text: '<span><i class="fa fa-tachometer"></i> fa fa-tachometer</span> ',
        html: '<span><i class="fa fa-tachometer"></i> fa fa-tachometer</span> ',
        title: 'fa fa-tachometer'
      },
      {
        id: 652,
        text: '<span><i class="fa fa-tag"></i> fa fa-tag</span> ',
        html: '<span><i class="fa fa-tag"></i> fa fa-tag</span> ',
        title: 'fa fa-tag'
      },
      {
        id: 653,
        text: '<span><i class="fa fa-tags"></i> fa fa-tags</span> ',
        html: '<span><i class="fa fa-tags"></i> fa fa-tags</span> ',
        title: 'fa fa-tags'
      },
      {
        id: 654,
        text: '<span><i class="fa fa-tasks"></i> fa fa-tasks</span> ',
        html: '<span><i class="fa fa-tasks"></i> fa fa-tasks</span> ',
        title: 'fa fa-tasks'
      },
      {
        id: 655,
        text: '<span><i class="fa fa-taxi"></i> fa fa-taxi</span> ',
        html: '<span><i class="fa fa-taxi"></i> fa fa-taxi</span> ',
        title: 'fa fa-taxi'
      },
      {
        id: 656,
        text: '<span><i class="fa fa-telegram"></i> fa fa-telegram</span> ',
        html: '<span><i class="fa fa-telegram"></i> fa fa-telegram</span> ',
        title: 'fa fa-telegram'
      },
      {
        id: 657,
        text: '<span><i class="fa fa-television"></i> fa fa-television</span> ',
        html: '<span><i class="fa fa-television"></i> fa fa-television</span> ',
        title: 'fa fa-television'
      },
      {
        id: 658,
        text: '<span><i class="fa fa-tencent-weibo"></i> fa fa-tencent-weibo</span> ',
        html: '<span><i class="fa fa-tencent-weibo"></i> fa fa-tencent-weibo</span> ',
        title: 'fa fa-tencent-weibo'
      },
      {
        id: 659,
        text: '<span><i class="fa fa-terminal"></i> fa fa-terminal</span> ',
        html: '<span><i class="fa fa-terminal"></i> fa fa-terminal</span> ',
        title: 'fa fa-terminal'
      },
      {
        id: 660,
        text: '<span><i class="fa fa-text-height"></i> fa fa-text-height</span> ',
        html: '<span><i class="fa fa-text-height"></i> fa fa-text-height</span> ',
        title: 'fa fa-text-height'
      },
      {
        id: 661,
        text: '<span><i class="fa fa-text-width"></i> fa fa-text-width</span> ',
        html: '<span><i class="fa fa-text-width"></i> fa fa-text-width</span> ',
        title: 'fa fa-text-width'
      },
      {
        id: 662,
        text: '<span><i class="fa fa-th"></i> fa fa-th</span> ',
        html: '<span><i class="fa fa-th"></i> fa fa-th</span> ',
        title: 'fa fa-th'
      },
      {
        id: 663,
        text: '<span><i class="fa fa-th-large"></i> fa fa-th-large</span> ',
        html: '<span><i class="fa fa-th-large"></i> fa fa-th-large</span> ',
        title: 'fa fa-th-large'
      },
      {
        id: 664,
        text: '<span><i class="fa fa-th-list"></i> fa fa-th-list</span> ',
        html: '<span><i class="fa fa-th-list"></i> fa fa-th-list</span> ',
        title: 'fa fa-th-list'
      },
      {
        id: 665,
        text: '<span><i class="fa fa-themeisle"></i> fa fa-themeisle</span> ',
        html: '<span><i class="fa fa-themeisle"></i> fa fa-themeisle</span> ',
        title: 'fa fa-themeisle'
      },
      {
        id: 666,
        text: '<span><i class="fa fa-thermometer"></i> fa fa-thermometer</span> ',
        html: '<span><i class="fa fa-thermometer"></i> fa fa-thermometer</span> ',
        title: 'fa fa-thermometer'
      },
      {
        id: 667,
        text: '<span><i class="fa fa-thermometer-0"></i> fa fa-thermometer-0</span> ',
        html: '<span><i class="fa fa-thermometer-0"></i> fa fa-thermometer-0</span> ',
        title: 'fa fa-thermometer-0'
      },
      {
        id: 668,
        text: '<span><i class="fa fa-thermometer-1"></i> fa fa-thermometer-1</span> ',
        html: '<span><i class="fa fa-thermometer-1"></i> fa fa-thermometer-1</span> ',
        title: 'fa fa-thermometer-1'
      },
      {
        id: 669,
        text: '<span><i class="fa fa-thermometer-2"></i> fa fa-thermometer-2</span> ',
        html: '<span><i class="fa fa-thermometer-2"></i> fa fa-thermometer-2</span> ',
        title: 'fa fa-thermometer-2'
      },
      {
        id: 670,
        text: '<span><i class="fa fa-thermometer-3"></i> fa fa-thermometer-3</span> ',
        html: '<span><i class="fa fa-thermometer-3"></i> fa fa-thermometer-3</span> ',
        title: 'fa fa-thermometer-3'
      },
      {
        id: 671,
        text: '<span><i class="fa fa-thermometer-4"></i> fa fa-thermometer-4</span> ',
        html: '<span><i class="fa fa-thermometer-4"></i> fa fa-thermometer-4</span> ',
        title: 'fa fa-thermometer-4'
      },
      {
        id: 672,
        text: '<span><i class="fa fa-thermometer-empty"></i> fa fa-thermometer-empty</span> ',
        html: '<span><i class="fa fa-thermometer-empty"></i> fa fa-thermometer-empty</span> ',
        title: 'fa fa-thermometer-empty'
      },
      {
        id: 673,
        text: '<span><i class="fa fa-thermometer-full"></i> fa fa-thermometer-full</span> ',
        html: '<span><i class="fa fa-thermometer-full"></i> fa fa-thermometer-full</span> ',
        title: 'fa fa-thermometer-full'
      },
      {
        id: 674,
        text: '<span><i class="fa fa-thermometer-half"></i> fa fa-thermometer-half</span> ',
        html: '<span><i class="fa fa-thermometer-half"></i> fa fa-thermometer-half</span> ',
        title: 'fa fa-thermometer-half'
      },
      {
        id: 675,
        text: '<span><i class="fa fa-thermometer-quarter"></i> fa fa-thermometer-quarter</span> ',
        html: '<span><i class="fa fa-thermometer-quarter"></i> fa fa-thermometer-quarter</span> ',
        title: 'fa fa-thermometer-quarter'
      },
      {
        id: 676,
        text: '<span><i class="fa fa-thermometer-three-quarters"></i> fa fa-thermometer-three-quarters</span> ',
        html: '<span><i class="fa fa-thermometer-three-quarters"></i> fa fa-thermometer-three-quarters</span> ',
        title: 'fa fa-thermometer-three-quarters'
      },
      {
        id: 677,
        text: '<span><i class="fa fa-thumb-tack"></i> fa fa-thumb-tack</span> ',
        html: '<span><i class="fa fa-thumb-tack"></i> fa fa-thumb-tack</span> ',
        title: 'fa fa-thumb-tack'
      },
      {
        id: 678,
        text: '<span><i class="fa fa-thumbs-down"></i> fa fa-thumbs-down</span> ',
        html: '<span><i class="fa fa-thumbs-down"></i> fa fa-thumbs-down</span> ',
        title: 'fa fa-thumbs-down'
      },
      {
        id: 679,
        text: '<span><i class="fa fa-thumbs-o-down"></i> fa fa-thumbs-o-down</span> ',
        html: '<span><i class="fa fa-thumbs-o-down"></i> fa fa-thumbs-o-down</span> ',
        title: 'fa fa-thumbs-o-down'
      },
      {
        id: 680,
        text: '<span><i class="fa fa-thumbs-o-up"></i> fa fa-thumbs-o-up</span> ',
        html: '<span><i class="fa fa-thumbs-o-up"></i> fa fa-thumbs-o-up</span> ',
        title: 'fa fa-thumbs-o-up'
      },
      {
        id: 681,
        text: '<span><i class="fa fa-thumbs-up"></i> fa fa-thumbs-up</span> ',
        html: '<span><i class="fa fa-thumbs-up"></i> fa fa-thumbs-up</span> ',
        title: 'fa fa-thumbs-up'
      },
      {
        id: 682,
        text: '<span><i class="fa fa-ticket"></i> fa fa-ticket</span> ',
        html: '<span><i class="fa fa-ticket"></i> fa fa-ticket</span> ',
        title: 'fa fa-ticket'
      },
      {
        id: 683,
        text: '<span><i class="fa fa-times"></i> fa fa-times</span> ',
        html: '<span><i class="fa fa-times"></i> fa fa-times</span> ',
        title: 'fa fa-times'
      },
      {
        id: 684,
        text: '<span><i class="fa fa-times-circle"></i> fa fa-times-circle</span> ',
        html: '<span><i class="fa fa-times-circle"></i> fa fa-times-circle</span> ',
        title: 'fa fa-times-circle'
      },
      {
        id: 685,
        text: '<span><i class="fa fa-times-circle-o"></i> fa fa-times-circle-o</span> ',
        html: '<span><i class="fa fa-times-circle-o"></i> fa fa-times-circle-o</span> ',
        title: 'fa fa-times-circle-o'
      },
      {
        id: 686,
        text: '<span><i class="fa fa-times-rectangle"></i> fa fa-times-rectangle</span> ',
        html: '<span><i class="fa fa-times-rectangle"></i> fa fa-times-rectangle</span> ',
        title: 'fa fa-times-rectangle'
      },
      {
        id: 687,
        text: '<span><i class="fa fa-times-rectangle-o"></i> fa fa-times-rectangle-o</span> ',
        html: '<span><i class="fa fa-times-rectangle-o"></i> fa fa-times-rectangle-o</span> ',
        title: 'fa fa-times-rectangle-o'
      },
      {
        id: 688,
        text: '<span><i class="fa fa-tint"></i> fa fa-tint</span> ',
        html: '<span><i class="fa fa-tint"></i> fa fa-tint</span> ',
        title: 'fa fa-tint'
      },
      {
        id: 689,
        text: '<span><i class="fa fa-toggle-down"></i> fa fa-toggle-down</span> ',
        html: '<span><i class="fa fa-toggle-down"></i> fa fa-toggle-down</span> ',
        title: 'fa fa-toggle-down'
      },
      {
        id: 690,
        text: '<span><i class="fa fa-toggle-left"></i> fa fa-toggle-left</span> ',
        html: '<span><i class="fa fa-toggle-left"></i> fa fa-toggle-left</span> ',
        title: 'fa fa-toggle-left'
      },
      {
        id: 691,
        text: '<span><i class="fa fa-toggle-off"></i> fa fa-toggle-off</span> ',
        html: '<span><i class="fa fa-toggle-off"></i> fa fa-toggle-off</span> ',
        title: 'fa fa-toggle-off'
      },
      {
        id: 692,
        text: '<span><i class="fa fa-toggle-on"></i> fa fa-toggle-on</span> ',
        html: '<span><i class="fa fa-toggle-on"></i> fa fa-toggle-on</span> ',
        title: 'fa fa-toggle-on'
      },
      {
        id: 693,
        text: '<span><i class="fa fa-toggle-right"></i> fa fa-toggle-right</span> ',
        html: '<span><i class="fa fa-toggle-right"></i> fa fa-toggle-right</span> ',
        title: 'fa fa-toggle-right'
      },
      {
        id: 694,
        text: '<span><i class="fa fa-toggle-up"></i> fa fa-toggle-up</span> ',
        html: '<span><i class="fa fa-toggle-up"></i> fa fa-toggle-up</span> ',
        title: 'fa fa-toggle-up'
      },
      {
        id: 695,
        text: '<span><i class="fa fa-trademark"></i> fa fa-trademark</span> ',
        html: '<span><i class="fa fa-trademark"></i> fa fa-trademark</span> ',
        title: 'fa fa-trademark'
      },
      {
        id: 696,
        text: '<span><i class="fa fa-train"></i> fa fa-train</span> ',
        html: '<span><i class="fa fa-train"></i> fa fa-train</span> ',
        title: 'fa fa-train'
      },
      {
        id: 697,
        text: '<span><i class="fa fa-transgender"></i> fa fa-transgender</span> ',
        html: '<span><i class="fa fa-transgender"></i> fa fa-transgender</span> ',
        title: 'fa fa-transgender'
      },
      {
        id: 698,
        text: '<span><i class="fa fa-transgender-alt"></i> fa fa-transgender-alt</span> ',
        html: '<span><i class="fa fa-transgender-alt"></i> fa fa-transgender-alt</span> ',
        title: 'fa fa-transgender-alt'
      },
      {
        id: 699,
        text: '<span><i class="fa fa-trash"></i> fa fa-trash</span> ',
        html: '<span><i class="fa fa-trash"></i> fa fa-trash</span> ',
        title: 'fa fa-trash'
      },
      {
        id: 700,
        text: '<span><i class="fa fa-trash-o"></i> fa fa-trash-o</span> ',
        html: '<span><i class="fa fa-trash-o"></i> fa fa-trash-o</span> ',
        title: 'fa fa-trash-o'
      },
      {
        id: 701,
        text: '<span><i class="fa fa-tree"></i> fa fa-tree</span> ',
        html: '<span><i class="fa fa-tree"></i> fa fa-tree</span> ',
        title: 'fa fa-tree'
      },
      {
        id: 702,
        text: '<span><i class="fa fa-trello"></i> fa fa-trello</span> ',
        html: '<span><i class="fa fa-trello"></i> fa fa-trello</span> ',
        title: 'fa fa-trello'
      },
      {
        id: 703,
        text: '<span><i class="fa fa-tripadvisor"></i> fa fa-tripadvisor</span> ',
        html: '<span><i class="fa fa-tripadvisor"></i> fa fa-tripadvisor</span> ',
        title: 'fa fa-tripadvisor'
      },
      {
        id: 704,
        text: '<span><i class="fa fa-trophy"></i> fa fa-trophy</span> ',
        html: '<span><i class="fa fa-trophy"></i> fa fa-trophy</span> ',
        title: 'fa fa-trophy'
      },
      {
        id: 705,
        text: '<span><i class="fa fa-truck"></i> fa fa-truck</span> ',
        html: '<span><i class="fa fa-truck"></i> fa fa-truck</span> ',
        title: 'fa fa-truck'
      },
      {
        id: 706,
        text: '<span><i class="fa fa-try"></i> fa fa-try</span> ',
        html: '<span><i class="fa fa-try"></i> fa fa-try</span> ',
        title: 'fa fa-try'
      },
      {
        id: 707,
        text: '<span><i class="fa fa-tty"></i> fa fa-tty</span> ',
        html: '<span><i class="fa fa-tty"></i> fa fa-tty</span> ',
        title: 'fa fa-tty'
      },
      {
        id: 708,
        text: '<span><i class="fa fa-tumblr"></i> fa fa-tumblr</span> ',
        html: '<span><i class="fa fa-tumblr"></i> fa fa-tumblr</span> ',
        title: 'fa fa-tumblr'
      },
      {
        id: 709,
        text: '<span><i class="fa fa-tumblr-square"></i> fa fa-tumblr-square</span> ',
        html: '<span><i class="fa fa-tumblr-square"></i> fa fa-tumblr-square</span> ',
        title: 'fa fa-tumblr-square'
      },
      {
        id: 710,
        text: '<span><i class="fa fa-turkish-lira"></i> fa fa-turkish-lira</span> ',
        html: '<span><i class="fa fa-turkish-lira"></i> fa fa-turkish-lira</span> ',
        title: 'fa fa-turkish-lira'
      },
      {
        id: 711,
        text: '<span><i class="fa fa-tv"></i> fa fa-tv</span> ',
        html: '<span><i class="fa fa-tv"></i> fa fa-tv</span> ',
        title: 'fa fa-tv'
      },
      {
        id: 712,
        text: '<span><i class="fa fa-twitch"></i> fa fa-twitch</span> ',
        html: '<span><i class="fa fa-twitch"></i> fa fa-twitch</span> ',
        title: 'fa fa-twitch'
      },
      {
        id: 713,
        text: '<span><i class="fa fa-twitter"></i> fa fa-twitter</span> ',
        html: '<span><i class="fa fa-twitter"></i> fa fa-twitter</span> ',
        title: 'fa fa-twitter'
      },
      {
        id: 714,
        text: '<span><i class="fa fa-twitter-square"></i> fa fa-twitter-square</span> ',
        html: '<span><i class="fa fa-twitter-square"></i> fa fa-twitter-square</span> ',
        title: 'fa fa-twitter-square'
      },
      {
        id: 715,
        text: '<span><i class="fa fa-umbrella"></i> fa fa-umbrella</span> ',
        html: '<span><i class="fa fa-umbrella"></i> fa fa-umbrella</span> ',
        title: 'fa fa-umbrella'
      },
      {
        id: 716,
        text: '<span><i class="fa fa-underline"></i> fa fa-underline</span> ',
        html: '<span><i class="fa fa-underline"></i> fa fa-underline</span> ',
        title: 'fa fa-underline'
      },
      {
        id: 717,
        text: '<span><i class="fa fa-undo"></i> fa fa-undo</span> ',
        html: '<span><i class="fa fa-undo"></i> fa fa-undo</span> ',
        title: 'fa fa-undo'
      },
      {
        id: 718,
        text: '<span><i class="fa fa-universal-access"></i> fa fa-universal-access</span> ',
        html: '<span><i class="fa fa-universal-access"></i> fa fa-universal-access</span> ',
        title: 'fa fa-universal-access'
      },
      {
        id: 719,
        text: '<span><i class="fa fa-university"></i> fa fa-university</span> ',
        html: '<span><i class="fa fa-university"></i> fa fa-university</span> ',
        title: 'fa fa-university'
      },
      {
        id: 720,
        text: '<span><i class="fa fa-unlink"></i> fa fa-unlink</span> ',
        html: '<span><i class="fa fa-unlink"></i> fa fa-unlink</span> ',
        title: 'fa fa-unlink'
      },
      {
        id: 721,
        text: '<span><i class="fa fa-unlock"></i> fa fa-unlock</span> ',
        html: '<span><i class="fa fa-unlock"></i> fa fa-unlock</span> ',
        title: 'fa fa-unlock'
      },
      {
        id: 722,
        text: '<span><i class="fa fa-unlock-alt"></i> fa fa-unlock-alt</span> ',
        html: '<span><i class="fa fa-unlock-alt"></i> fa fa-unlock-alt</span> ',
        title: 'fa fa-unlock-alt'
      },
      {
        id: 723,
        text: '<span><i class="fa fa-unsorted"></i> fa fa-unsorted</span> ',
        html: '<span><i class="fa fa-unsorted"></i> fa fa-unsorted</span> ',
        title: 'fa fa-unsorted'
      },
      {
        id: 724,
        text: '<span><i class="fa fa-upload"></i> fa fa-upload</span> ',
        html: '<span><i class="fa fa-upload"></i> fa fa-upload</span> ',
        title: 'fa fa-upload'
      },
      {
        id: 725,
        text: '<span><i class="fa fa-usb"></i> fa fa-usb</span> ',
        html: '<span><i class="fa fa-usb"></i> fa fa-usb</span> ',
        title: 'fa fa-usb'
      },
      {
        id: 726,
        text: '<span><i class="fa fa-usd"></i> fa fa-usd</span> ',
        html: '<span><i class="fa fa-usd"></i> fa fa-usd</span> ',
        title: 'fa fa-usd'
      },
      {
        id: 727,
        text: '<span><i class="fa fa-user"></i> fa fa-user</span> ',
        html: '<span><i class="fa fa-user"></i> fa fa-user</span> ',
        title: 'fa fa-user'
      },
      {
        id: 728,
        text: '<span><i class="fa fa-user-circle"></i> fa fa-user-circle</span> ',
        html: '<span><i class="fa fa-user-circle"></i> fa fa-user-circle</span> ',
        title: 'fa fa-user-circle'
      },
      {
        id: 729,
        text: '<span><i class="fa fa-user-circle-o"></i> fa fa-user-circle-o</span> ',
        html: '<span><i class="fa fa-user-circle-o"></i> fa fa-user-circle-o</span> ',
        title: 'fa fa-user-circle-o'
      },
      {
        id: 730,
        text: '<span><i class="fa fa-user-md"></i> fa fa-user-md</span> ',
        html: '<span><i class="fa fa-user-md"></i> fa fa-user-md</span> ',
        title: 'fa fa-user-md'
      },
      {
        id: 731,
        text: '<span><i class="fa fa-user-o"></i> fa fa-user-o</span> ',
        html: '<span><i class="fa fa-user-o"></i> fa fa-user-o</span> ',
        title: 'fa fa-user-o'
      },
      {
        id: 732,
        text: '<span><i class="fa fa-user-plus"></i> fa fa-user-plus</span> ',
        html: '<span><i class="fa fa-user-plus"></i> fa fa-user-plus</span> ',
        title: 'fa fa-user-plus'
      },
      {
        id: 733,
        text: '<span><i class="fa fa-user-secret"></i> fa fa-user-secret</span> ',
        html: '<span><i class="fa fa-user-secret"></i> fa fa-user-secret</span> ',
        title: 'fa fa-user-secret'
      },
      {
        id: 734,
        text: '<span><i class="fa fa-user-times"></i> fa fa-user-times</span> ',
        html: '<span><i class="fa fa-user-times"></i> fa fa-user-times</span> ',
        title: 'fa fa-user-times'
      },
      {
        id: 735,
        text: '<span><i class="fa fa-users"></i> fa fa-users</span> ',
        html: '<span><i class="fa fa-users"></i> fa fa-users</span> ',
        title: 'fa fa-users'
      },
      {
        id: 736,
        text: '<span><i class="fa fa-vcard"></i> fa fa-vcard</span> ',
        html: '<span><i class="fa fa-vcard"></i> fa fa-vcard</span> ',
        title: 'fa fa-vcard'
      },
      {
        id: 737,
        text: '<span><i class="fa fa-vcard-o"></i> fa fa-vcard-o</span> ',
        html: '<span><i class="fa fa-vcard-o"></i> fa fa-vcard-o</span> ',
        title: 'fa fa-vcard-o'
      },
      {
        id: 738,
        text: '<span><i class="fa fa-venus"></i> fa fa-venus</span> ',
        html: '<span><i class="fa fa-venus"></i> fa fa-venus</span> ',
        title: 'fa fa-venus'
      },
      {
        id: 739,
        text: '<span><i class="fa fa-venus-double"></i> fa fa-venus-double</span> ',
        html: '<span><i class="fa fa-venus-double"></i> fa fa-venus-double</span> ',
        title: 'fa fa-venus-double'
      },
      {
        id: 740,
        text: '<span><i class="fa fa-venus-mars"></i> fa fa-venus-mars</span> ',
        html: '<span><i class="fa fa-venus-mars"></i> fa fa-venus-mars</span> ',
        title: 'fa fa-venus-mars'
      },
      {
        id: 741,
        text: '<span><i class="fa fa-viacoin"></i> fa fa-viacoin</span> ',
        html: '<span><i class="fa fa-viacoin"></i> fa fa-viacoin</span> ',
        title: 'fa fa-viacoin'
      },
      {
        id: 742,
        text: '<span><i class="fa fa-viadeo"></i> fa fa-viadeo</span> ',
        html: '<span><i class="fa fa-viadeo"></i> fa fa-viadeo</span> ',
        title: 'fa fa-viadeo'
      },
      {
        id: 743,
        text: '<span><i class="fa fa-viadeo-square"></i> fa fa-viadeo-square</span> ',
        html: '<span><i class="fa fa-viadeo-square"></i> fa fa-viadeo-square</span> ',
        title: 'fa fa-viadeo-square'
      },
      {
        id: 744,
        text: '<span><i class="fa fa-video-camera"></i> fa fa-video-camera</span> ',
        html: '<span><i class="fa fa-video-camera"></i> fa fa-video-camera</span> ',
        title: 'fa fa-video-camera'
      },
      {
        id: 745,
        text: '<span><i class="fa fa-vimeo"></i> fa fa-vimeo</span> ',
        html: '<span><i class="fa fa-vimeo"></i> fa fa-vimeo</span> ',
        title: 'fa fa-vimeo'
      },
      {
        id: 746,
        text: '<span><i class="fa fa-vimeo-square"></i> fa fa-vimeo-square</span> ',
        html: '<span><i class="fa fa-vimeo-square"></i> fa fa-vimeo-square</span> ',
        title: 'fa fa-vimeo-square'
      },
      {
        id: 747,
        text: '<span><i class="fa fa-vine"></i> fa fa-vine</span> ',
        html: '<span><i class="fa fa-vine"></i> fa fa-vine</span> ',
        title: 'fa fa-vine'
      },
      {
        id: 748,
        text: '<span><i class="fa fa-vk"></i> fa fa-vk</span> ',
        html: '<span><i class="fa fa-vk"></i> fa fa-vk</span> ',
        title: 'fa fa-vk'
      },
      {
        id: 749,
        text: '<span><i class="fa fa-volume-control-phone"></i> fa fa-volume-control-phone</span> ',
        html: '<span><i class="fa fa-volume-control-phone"></i> fa fa-volume-control-phone</span> ',
        title: 'fa fa-volume-control-phone'
      },
      {
        id: 750,
        text: '<span><i class="fa fa-volume-down"></i> fa fa-volume-down</span> ',
        html: '<span><i class="fa fa-volume-down"></i> fa fa-volume-down</span> ',
        title: 'fa fa-volume-down'
      },
      {
        id: 751,
        text: '<span><i class="fa fa-volume-off"></i> fa fa-volume-off</span> ',
        html: '<span><i class="fa fa-volume-off"></i> fa fa-volume-off</span> ',
        title: 'fa fa-volume-off'
      },
      {
        id: 752,
        text: '<span><i class="fa fa-volume-up"></i> fa fa-volume-up</span> ',
        html: '<span><i class="fa fa-volume-up"></i> fa fa-volume-up</span> ',
        title: 'fa fa-volume-up'
      },
      {
        id: 753,
        text: '<span><i class="fa fa-warning"></i> fa fa-warning</span> ',
        html: '<span><i class="fa fa-warning"></i> fa fa-warning</span> ',
        title: 'fa fa-warning'
      },
      {
        id: 754,
        text: '<span><i class="fa fa-wechat"></i> fa fa-wechat</span> ',
        html: '<span><i class="fa fa-wechat"></i> fa fa-wechat</span> ',
        title: 'fa fa-wechat'
      },
      {
        id: 755,
        text: '<span><i class="fa fa-weibo"></i> fa fa-weibo</span> ',
        html: '<span><i class="fa fa-weibo"></i> fa fa-weibo</span> ',
        title: 'fa fa-weibo'
      },
      {
        id: 756,
        text: '<span><i class="fa fa-weixin"></i> fa fa-weixin</span> ',
        html: '<span><i class="fa fa-weixin"></i> fa fa-weixin</span> ',
        title: 'fa fa-weixin'
      },
      {
        id: 757,
        text: '<span><i class="fa fa-whatsapp"></i> fa fa-whatsapp</span> ',
        html: '<span><i class="fa fa-whatsapp"></i> fa fa-whatsapp</span> ',
        title: 'fa fa-whatsapp'
      },
      {
        id: 758,
        text: '<span><i class="fa fa-wheelchair"></i> fa fa-wheelchair</span> ',
        html: '<span><i class="fa fa-wheelchair"></i> fa fa-wheelchair</span> ',
        title: 'fa fa-wheelchair'
      },
      {
        id: 759,
        text: '<span><i class="fa fa-wheelchair-alt"></i> fa fa-wheelchair-alt</span> ',
        html: '<span><i class="fa fa-wheelchair-alt"></i> fa fa-wheelchair-alt</span> ',
        title: 'fa fa-wheelchair-alt'
      },
      {
        id: 760,
        text: '<span><i class="fa fa-wifi"></i> fa fa-wifi</span> ',
        html: '<span><i class="fa fa-wifi"></i> fa fa-wifi</span> ',
        title: 'fa fa-wifi'
      },
      {
        id: 761,
        text: '<span><i class="fa fa-wikipedia-w"></i> fa fa-wikipedia-w</span> ',
        html: '<span><i class="fa fa-wikipedia-w"></i> fa fa-wikipedia-w</span> ',
        title: 'fa fa-wikipedia-w'
      },
      {
        id: 762,
        text: '<span><i class="fa fa-window-close"></i> fa fa-window-close</span> ',
        html: '<span><i class="fa fa-window-close"></i> fa fa-window-close</span> ',
        title: 'fa fa-window-close'
      },
      {
        id: 763,
        text: '<span><i class="fa fa-window-close-o"></i> fa fa-window-close-o</span> ',
        html: '<span><i class="fa fa-window-close-o"></i> fa fa-window-close-o</span> ',
        title: 'fa fa-window-close-o'
      },
      {
        id: 764,
        text: '<span><i class="fa fa-window-maximize"></i> fa fa-window-maximize</span> ',
        html: '<span><i class="fa fa-window-maximize"></i> fa fa-window-maximize</span> ',
        title: 'fa fa-window-maximize'
      },
      {
        id: 765,
        text: '<span><i class="fa fa-window-minimize"></i> fa fa-window-minimize</span> ',
        html: '<span><i class="fa fa-window-minimize"></i> fa fa-window-minimize</span> ',
        title: 'fa fa-window-minimize'
      },
      {
        id: 766,
        text: '<span><i class="fa fa-window-restore"></i> fa fa-window-restore</span> ',
        html: '<span><i class="fa fa-window-restore"></i> fa fa-window-restore</span> ',
        title: 'fa fa-window-restore'
      },
      {
        id: 767,
        text: '<span><i class="fa fa-windows"></i> fa fa-windows</span> ',
        html: '<span><i class="fa fa-windows"></i> fa fa-windows</span> ',
        title: 'fa fa-windows'
      },
      {
        id: 768,
        text: '<span><i class="fa fa-won"></i> fa fa-won</span> ',
        html: '<span><i class="fa fa-won"></i> fa fa-won</span> ',
        title: 'fa fa-won'
      },
      {
        id: 769,
        text: '<span><i class="fa fa-wordpress"></i> fa fa-wordpress</span> ',
        html: '<span><i class="fa fa-wordpress"></i> fa fa-wordpress</span> ',
        title: 'fa fa-wordpress'
      },
      {
        id: 770,
        text: '<span><i class="fa fa-wpbeginner"></i> fa fa-wpbeginner</span> ',
        html: '<span><i class="fa fa-wpbeginner"></i> fa fa-wpbeginner</span> ',
        title: 'fa fa-wpbeginner'
      },
      {
        id: 771,
        text: '<span><i class="fa fa-wpexplorer"></i> fa fa-wpexplorer</span> ',
        html: '<span><i class="fa fa-wpexplorer"></i> fa fa-wpexplorer</span> ',
        title: 'fa fa-wpexplorer'
      },
      {
        id: 772,
        text: '<span><i class="fa fa-wpforms"></i> fa fa-wpforms</span> ',
        html: '<span><i class="fa fa-wpforms"></i> fa fa-wpforms</span> ',
        title: 'fa fa-wpforms'
      },
      {
        id: 773,
        text: '<span><i class="fa fa-wrench"></i> fa fa-wrench</span> ',
        html: '<span><i class="fa fa-wrench"></i> fa fa-wrench</span> ',
        title: 'fa fa-wrench'
      },
      {
        id: 774,
        text: '<span><i class="fa fa-xing"></i> fa fa-xing</span> ',
        html: '<span><i class="fa fa-xing"></i> fa fa-xing</span> ',
        title: 'fa fa-xing'
      },
      {
        id: 775,
        text: '<span><i class="fa fa-xing-square"></i> fa fa-xing-square</span> ',
        html: '<span><i class="fa fa-xing-square"></i> fa fa-xing-square</span> ',
        title: 'fa fa-xing-square'
      },
      {
        id: 776,
        text: '<span><i class="fa fa-y-combinator"></i> fa fa-y-combinator</span> ',
        html: '<span><i class="fa fa-y-combinator"></i> fa fa-y-combinator</span> ',
        title: 'fa fa-y-combinator'
      },
      {
        id: 777,
        text: '<span><i class="fa fa-y-combinator-square"></i> fa fa-y-combinator-square</span> ',
        html: '<span><i class="fa fa-y-combinator-square"></i> fa fa-y-combinator-square</span> ',
        title: 'fa fa-y-combinator-square'
      },
      {
        id: 778,
        text: '<span><i class="fa fa-yahoo"></i> fa fa-yahoo</span> ',
        html: '<span><i class="fa fa-yahoo"></i> fa fa-yahoo</span> ',
        title: 'fa fa-yahoo'
      },
      {
        id: 779,
        text: '<span><i class="fa fa-yc"></i> fa fa-yc</span> ',
        html: '<span><i class="fa fa-yc"></i> fa fa-yc</span> ',
        title: 'fa fa-yc'
      },
      {
        id: 780,
        text: '<span><i class="fa fa-yc-square"></i> fa fa-yc-square</span> ',
        html: '<span><i class="fa fa-yc-square"></i> fa fa-yc-square</span> ',
        title: 'fa fa-yc-square'
      },
      {
        id: 781,
        text: '<span><i class="fa fa-yelp"></i> fa fa-yelp</span> ',
        html: '<span><i class="fa fa-yelp"></i> fa fa-yelp</span> ',
        title: 'fa fa-yelp'
      },
      {
        id: 782,
        text: '<span><i class="fa fa-yen"></i> fa fa-yen</span> ',
        html: '<span><i class="fa fa-yen"></i> fa fa-yen</span> ',
        title: 'fa fa-yen'
      },
      {
        id: 783,
        text: '<span><i class="fa fa-yoast"></i> fa fa-yoast</span> ',
        html: '<span><i class="fa fa-yoast"></i> fa fa-yoast</span> ',
        title: 'fa fa-yoast'
      },
      {
        id: 784,
        text: '<span><i class="fa fa-youtube"></i> fa fa-youtube</span> ',
        html: '<span><i class="fa fa-youtube"></i> fa fa-youtube</span> ',
        title: 'fa fa-youtube'
      },
      {
        id: 785,
        text: '<span><i class="fa fa-youtube-play"></i> fa fa-youtube-play</span> ',
        html: '<span><i class="fa fa-youtube-play"></i> fa fa-youtube-play</span> ',
        title: 'fa fa-youtube-play'
      },
      {
        id: 786,
        text: '<span><i class="fa fa-youtube-square"></i> fa fa-youtube-square</span> ',
        html: '<span><i class="fa fa-youtube-square"></i> fa fa-youtube-square</span> ',
        title: 'fa fa-youtube-square'
      },
    ];

    $(".fontawesome_").select2({
      data: data,
      templateResult: function (d) { return $(d.text); },
      templateSelection: function (d) { return $(d.text); },
      
    })
  });
</script>