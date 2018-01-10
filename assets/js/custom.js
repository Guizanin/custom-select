// organizar em function para cada pagina
$(function(){
 
});
// MENU DROPDOWN
$(function(){
  $("[data-el=dropdown] .title").click(function() {
  	$this = $(this);
  	// container supremo dropdown
  	$elWrap = $this.closest(".wrap-menu-dropdown");
  	// testar se será sincronizado os menus
  	if($elWrap.attr("data-sync") == "yes"){
  		if(!$this.next("[data-el-open=dropdown]").is(":visible")){
  			$elWrap.find("[data-el-open=dropdown]").slideUp();
  			 // muda o icone
  			$elWrap.find(".title").each(function(key, value){
  				$iconOpen = $(this).find(".icon").attr("data-open");
  				$iconClosed = $(this).find(".icon").attr("data-closed");
  				$(this).find(".icon").removeClass($iconOpen);
  				$(this).find(".icon").addClass($iconClosed);
  			});
  			$this.next("[data-el-open=dropdown]").slideDown();
  			$this.find("> .icon").addClass($this.find(".icon").attr("data-open"));
  			$this.find("> .icon").removeClass($this.find(".icon").attr("data-closed"));
  		}else{
  			$this.next("[data-el-open=dropdown]").slideUp();
  			$this.find(".icon").removeClass($this.find(".icon").attr("data-open"));
  			$this.find(".icon").addClass($this.find(".icon").attr("data-closed"));
  		}
  	 // se nao tiver o syn
  	}else{
  		$this.next("[data-el-open=dropdown]").slideToggle();
  		$this.find(".icon").toggleClass($this.find(".icon").attr("data-open"));
  		$this.find(".icon").toggleClass($this.find(".icon").attr("data-closed"));
  	}
  });
});
// CHECK ICON
$(function(){
	$("[data-input=icon-checkbox] input").click(function(){
		$this = $(this);
		$check = $this.next('.icon').attr("data-check") ;
		$checked = $this.next('.icon').attr("data-checked") ;
		$this.next(".icon").toggleClass($check);
		$this.next(".icon").toggleClass($checked);
	});
	/* Check focus */
	$("[data-input=icon-checkbox] input").focus(function(){
		$(this).closest(".c-checkbox").addClass("check-focus");
	});

	$("[data-input=icon-checkbox] input").focusout(function(){
		$(this).closest(".c-checkbox").removeClass("check-focus");
	});
});
// RADIO ICON
$(function(){
	$("[data-input=icon-radio] input").click(function(){
		$this = $(this);
		$elWrap = $this.closest(".wrap-radio");
		$check = $this.next('.icon').attr("data-check");
		$checked = $this.next('.icon').attr("data-checked");
		if(!$this.checked){
			$elWrap.find(".icon").removeClass($checked);
			$elWrap.find(".icon").addClass($check);
			$this.next(".icon").addClass($checked);
		}
	});
	/* Radio focus */
	$("[data-input=icon-radio] input").focus(function(){
		$(this).closest(".c-radiobutton").addClass("radio-focus");
	});
	$("[data-input=icon-radio] input").focusout(function(){
		$(this).closest(".c-radiobutton").removeClass("radio-focus");
	});
});
// SELECT
$(function(){
	// abre select
	$("[data-el=select] .top").click(function(){
		$this = $(this);
		$elSelect = $this.next("[data-el=cmp-select]");
		$elWrap = $this.closest(".wrap-select");
		$open = $this.find('.icon').attr("data-open");
		$closed = $this.find('.icon').attr("data-closed");
		if(!$elSelect.is(":visible")){
			$elWrap.find("[data-el=cmp-select]").slideUp("fast");
			$elWrap.find(".icon").removeClass($open);
			$elWrap.find(".icon").addClass($closed);
			$elSelect.slideDown();
			$this.find(".icon").addClass($open);
			$this.find(".icon").removeClass($closed);
		}else{
			$elSelect.slideUp("fast");
			$this.find(".icon").toggleClass($open);
			$this.find(".icon").toggleClass($closed);
		}
	});
	// selecao item
	$("[data-el=select] [data-el=cmp-select] li").click(function(){
		$this = $(this);
		$elSelect = $this.closest("[data-el=select]");
		$elWrap = $this.closest(".wrap-select");
		$val = $this.text();	
		$elSelect.find(".selected").empty().text($val);
		$elSelect.find(".input-select").attr("value",$val);
		$elSelect.find(".cmp-select").slideUp("fast");
		$elSelect.find(".icon").toggleClass($open);
		$elSelect.find(".icon").toggleClass($closed);
	});
});
$(function(){
	/* Select input checkbox or radio when press enter */
	$('input:checkbox, input:radio').keypress(function(e){
	    if((e.keyCode ? e.keyCode : e.which) == 13){
	        $(this).trigger('click');
	        $(this).closest(".c-checkbox").removeClass("check-focus");
	        $(this).closest(".c-radiobutton").removeClass("radio-focus");
	    }    
	});
});