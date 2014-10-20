google.load("feeds", "1");

jQuery( function() {
	ss.init();
	if (navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i)) {
		ss.scrolling.init();
	}
});

jQuery(window).on("load", function() {

});

var ss = {}
ss.init = function() {
	jQuery(".nav a, a.scrollto").on("click", function() {
		var target = jQuery(this).attr("href");
		if(target.indexOf("/") === 0) {
			target = target.replace("/","");
		}
		ss.page.scroller(target);
	});
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		ss.instagram.init();
		ss.video.init();
		ss.productview.init();
		ss.responsive.init();
	} else {
		ss.parallax.init();
		ss.instagram.init();
		ss.video.init();
		ss.productview.init();
	}
	ss.contactform.init();
};

ss.page = {};
ss.page.scroller = function(target) {
	jQuery.scrollTo(target, {duration:400});
};

ss.contactform = {};
ss.contactform.init = function() {
	jQuery(".contact-form").on("submit", function(e) {
		e.preventDefault();
		var jThis = jQuery(this);
		if(jThis.find("#newsletter").prop("checked") === true) {
			var jMailChimpForm = jQuery("#mc-embedded-subscribe-form");
			jMailChimpForm.find("#mce-EMAIL").val(jThis.find("#email").val());
			jMailChimpForm.find("#mce-NAME").val(jThis.find("#navn").val());
			jQuery.ajax({
				type: "POST",
				url: jMailChimpForm.attr("action"),
				data: jMailChimpForm.serialize()
			});
		}
		jQuery.ajax({
			type: "POST",
			url: jThis.attr("action"),
			data: jThis.serialize(),
			success: function() {
				jThis.closest(".container").fadeOut(150, function() {
					jQuery(".mail-receipt").fadeIn(150);
				});
			}
		});
	});
};

ss.parallax = {};
ss.parallax.init = function() {
	var jContact = jQuery("#contact"),
		jAbout = jQuery("#about");
	jContact.parallax("0%",0.10)
	jAbout.parallax("0%",0.15);
};

ss.video = {};
ss.video.init = function() {
	jQuery("a.video").on("click", function() {
		var jVideo = jQuery("#video").show();
		var video = document.getElementById("aw2013");
		jQuery.scrollTo("#video", 400, {
			onAfter: function() {
				video.currentTime = 0;
				video.play();
			}
		});

		jQuery(".toggle-video").on("click", function() {
			video.pause();
			video.currentTime = 0;
			jVideo.slideUp(300);
		});
	});
};

ss.productview = {};
ss.productview.init = function() {
	jQuery("form.addtocart").on("submit", function(e) {
    	e.preventDefault();
    	var jThis = jQuery(this);
    	jQuery.ajax({
        	type: 'POST',
        	url: jThis.attr("action"),
            data: jThis.serialize(),
            success: function() {
            	jThis.find(".after-add-actions").fadeIn(150);
                jThis.find("button").html("<i class='fa fa-check'></i> Added to cart").prop("disabled",true);
				jThis.closest(".modal").on("hidden.bs.modal", function() {
					jThis.find(".after-add-actions").hide(150);
				    jThis.find("button").html("<i class='fa fa-shopping-cart fa-2x'></i> Add to cart").prop("disabled",false);
                    jThis.find("img.big").attr("src",jThis.find("img.big").data("original"));
				});
            }
        });
    });
  	jQuery("form.addtocart").closest(".modal").on("hidden.bs.modal", function() {
      	var jThis = jQuery(this);
    	jThis.find("img.big").attr("src",jThis.find("img.big").data("original"));
    });
	ss.productview.imageswapper();

};
ss.productview.imageswapper = function() {
	jQuery(".images a.swap").on("click", function() {
		var jImgBig = jQuery(this).closest(".detailview").find("img.big");
		jImgBig.attr("src", jQuery(this).find("img").attr("src"));

	});
};

ss.instagram = {};
ss.instagram.init = function() {
	ss.instagram.data = "";
	var feed = new Instafeed({
        get: 'tagged',
        tagName: 'planetss',
        clientId: '92b891febb0c413292423ea1b36f0be0',
		mock: true,
		limit: 30,
		success: function(data) {
			ss.instagram.data = data.data;
			ss.instagram.loadfeed(ss.instagram.data);
			ss.instagram.timer = setInterval(ss.instagram.loadfeed,10000);
		}
    });
	feed.run();
};
ss.instagram.loadfeed = function() {
	var feed = jQuery("#instagram-feed").addClass("loading").empty();
	if(ss.instagram.data.length < 4) {
		clearInterval(ss.instagram.timer);
		ss.instagram.init();
		return;
	}
	for(i = 0; i < 4; i++) {
		if(ss.instagram.data[i] !== undefined) {
			ss.instagram.injectitems(ss.instagram.data[i]);
			ss.instagram.data.splice(0,1);
		}
	}
	feed.removeClass("loading");

};
ss.instagram.injectitems = function(entry) {
	var jColumn = jQuery("<div />").addClass("col-xs-12 col-sm-6 col-md-3 loading"),
		jItem = jQuery("<div />").addClass("item text-center"),
		jImg = jQuery("<img />").attr("src",entry.images.standard_resolution.url).addClass("img-circle").attr("alt",""),
		jLink = jQuery("<a />").attr("href",entry.link).attr("target","_blank");
	if(entry.caption !== null) {
		jCaption = jQuery("<span />").addClass("caption").text(entry.caption.text).attr("data-likes",entry.likes.count);
		jCaption.appendTo(jLink);
	}
	jImg.appendTo(jLink);
	jLink.appendTo(jItem);
	jItem.appendTo(jColumn);
	jColumn.appendTo("#instagram-feed");
	jColumn.find("img").on("load", function() {
		jQuery(this).closest(".item").addClass("show").closest(".loading").removeClass("loading");
	});
};
ss.responsive = {};
ss.responsive.init = function() {
	var jNavResponsive = jQuery("#navbar-responsive");
	jNavResponsive.find("a").on("click", function() {
		jNavResponsive.removeClass("in").addClass("collapse");
	});
};
ss.scrolling = {};
ss.scrolling.init = function() {
	var jWindow = jQuery(window);
	ss.scrolling.pos = jWindow.scrollTop();

	jWindow.on("scroll touchmove", function(event) {
		if(ss.scrolling.pos < jWindow.scrollTop()) {
			ss.scrolling.increasing();
		} else if (ss.scrolling.pos > jWindow.scrollTop()) {
			ss.scrolling.decreasing();
		}
		ss.scrolling.pos = jWindow.scrollTop();

		if (jQuery(window).scrollTop() == (jQuery(document).height() - jQuery(window).height())) {
			ss.scrolling.documentbottom();
		}
	});
};

ss.scrolling.increasing = function() {
	// Going down the page
	// jQuery("#nav-main").fadeOut("150");
	// setTimeout(	jQuery(".main.menu-toggle").addClass("show"), 500);
	jQuery("#nav-main").addClass("pull");
};
ss.scrolling.decreasing = function() {
	// Going up the page
	// jQuery(".main.menu-toggle").removeClass("show");
	// jQuery("#nav-main").fadeIn("150");
	jQuery("#nav-main").removeClass("pull");
};
ss.scrolling.documentbottom = function() {
	// Reaching bottom of page
	// jQuery(".main.menu-toggle").removeClass("show");
	// jQuery("#nav-main").fadeOut("150");
	jQuery("#nav-main").removeClass("pull");
};
