$(document).ready(function() {
  $("select").on('change', function() {
    $(this).find(
      "option:selected").each(function() {
      $(".Book").css('display', (
        this.value === 'Book') ? 'block' : 'none');
      $(".DVD").css('display', (
        this.value === 'DVD') ? 'block' : 'none');
      $(".Furniture").css('display', (
        this.value === 'Furniture') ? 'block' : 'none');
    });
  }).change();
});
