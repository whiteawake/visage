$(".namein").keyup( function() {
  if ($(this).val() == "") {$(".nameout").text("_")}
  else {$(".nameout").text( $(this).val()) };
});

$(".emailin").keyup( function() {
  if ($(this).val() == "") {$(".emailout").text("_")}
  else {$(".emailout").text( $(this).val()) };
});

$(".namein2").keyup( function() {
  if ($(this).val() == "") {$(".nameout2").text("_")}
  else {$(".nameout2").text( $(this).val()) };
});

$(".emailin2").keyup( function() {
  if ($(this).val() == "") {$(".emailout2").text("_")}
  else {$(".emailout2").text( $(this).val()) };
});

$(".subjectin").keyup( function() {
  if ($(this).val() == "") {$(".subjectout").text("_")}
  else {$(".subjectout").text( $(this).val()) };
});

$(".message").keyup( function() {
  if ($(this).val() == "") {$(".messageout").text("_")}
  else {$(".messageout").text( $(this).val()) };
});

$(".bcc").keyup( function() {
  if ($(this).val() == "") {$(".bcc_out").text("_")}
  else {$(".bcc_out").text( $(this).val()) };
});

$(".posin").keyup( function() {
  if ($(this).val() == "") {$(".posout").text("_")}
  else {$(".posout").text( $(this).val()) };
});

$(".compin").keyup( function() {
  if ($(this).val() == "") {$(".compout").text("_")}
  else {$(".compout").text( $(this).val()) };
});

$(".furlin").keyup( function() {
  if ($(this).val() == "") {$(".furlout").text("_")}
  else {$(".furlout").text( $(this).val()) };
});
