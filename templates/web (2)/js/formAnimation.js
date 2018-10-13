(function($){
  $.fn.formAnimation = function(options) {
		var _this = this;

    // If nothing is selected, return nothing; can't chain anyway, references: https://github.com/jzaefferer/jquery-validation/blob/master/src/core.js#L6-L12
		if ( !_this.length ) {
			if ( options && options.debug && window.console ) {
				console.warn("Nothing selected, can't validate, returning nothing.");
			}
			return;
		}

		var invalidEvent = options.invalidEvent || 'invalid-form.validate';
		var animatedClasses = 'animated' + ' ' + options.animatedClass;

		var bindingInvalidEvent = function() {
			$(_this).on(invalidEvent, function(_event) {
				$(_this).addClass(animatedClasses);
			});
		};

		var bindingSubmitClickEvent = function() {
			$(_this).find('input[type="submit"]').click(function(_event) {
				$(_this).removeClass(animatedClasses);
			});
		};

		bindingSubmitClickEvent();
		bindingInvalidEvent();
  };
}(jQuery));
