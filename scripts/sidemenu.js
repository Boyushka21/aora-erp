"use strict";

function _objectSpread(t) {
	for (var e = 1; e < arguments.length; e++) {
		var n = null != arguments[e] ? arguments[e] : {},
			i = Object.keys(n);
		"function" == typeof Object.getOwnPropertySymbols && (i = i.concat(Object.getOwnPropertySymbols(n).filter(function (e) {
			return Object.getOwnPropertyDescriptor(n, e).enumerable
		}))), i.forEach(function (e) {
			_defineProperty(t, e, n[e])
		})
	}
	return t
}

function _defineProperty(e, t, n) {
	return t in e ? Object.defineProperty(e, t, {
		value: n,
		enumerable: !0,
		configurable: !0,
		writable: !0
	}) : e[t] = n, e
}

function _classCallCheck(e, t) {
	if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _defineProperties(e, t) {
	for (var n = 0; n < t.length; n++) {
		var i = t[n];
		i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
	}
}

function _createClass(e, t, n) {
	return t && _defineProperties(e.prototype, t), n && _defineProperties(e, n), e
}
var Slinky = function () {
	function n(e) {
		var t = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
		_classCallCheck(this, n), this.settings = _objectSpread({}, this.options, t), this._init(e)
	}
	return _createClass(n, [{
		key: "options",
		get: function () {
			return {
				resize: !0,
				speed: 300,
				theme: "slinky-theme-default",
				title: !1
			}
		}
	}]), _createClass(n, [{
		key: "_init",
		value: function (e) {
			this.menu = jQuery(e), this.base = this.menu.children().first();
			this.base;
			var t = this.menu,
				n = this.settings;
			t.addClass("slinky-menu").addClass(n.theme), this._transition(n.speed), jQuery("a + ul", t).prev().addClass("next").append('<span class="arrow"><i class="fal fa-angle-right"></i></span>'), jQuery("li > a", t);
			var i = jQuery("<li>").addClass("header");
			jQuery("li > ul", t).prepend(i);
			
			//var n = jQuery(t).parent().find("a").first().text();
			
			var s = jQuery("<a>").prop("href", "javascript:;").addClass("back").html('<span class="symbol animate_150"><i class="fal fa-angle-left"></i></span>');
			jQuery(".header", t).prepend(s), n.title && jQuery("li > ul", t).each(function (e, t) {
				var n = jQuery(t).parent().find("a").first().text();
				if (n) {
					//var i = jQuery("<span>").text(n);
					jQuery("> .header a", t).append(n)
				}
			}), this._addListeners(), this._jumpToInitial()
		}
	}, {
		key: "_addListeners",
		value: function () {
			var n = this,
				i = this.menu,
				s = this.settings;
			jQuery("a", i).on("click", function (e) {
				if (n._clicked + s.speed > Date.now()) return !1;
				n._clicked = Date.now();
				var t = jQuery(e.currentTarget);
				(0 === t.attr("href").indexOf("#") || t.hasClass("next") || t.hasClass("back")) && e.preventDefault(), t.hasClass("next") ? (i.find(".active").removeClass("active"), t.next().show().addClass("active"), n._move(1), s.resize && n._resize(t.next())) : t.hasClass("back") && (n._move(-1, function () {
					i.find(".active").removeClass("active"), t.parent().parent().hide().parentsUntil(i, "ul").first().addClass("active")
				}), s.resize && n._resize(t.parent().parent().parentsUntil(i, "ul")))
			})
		}
	}, {
		key: "_jumpToInitial",
		value: function () {
			var e = this.menu,
				t = this.settings,
				n = e.find(".active");
			0 < n.length && (n.removeClass("active"), this.jump(n, !1)), setTimeout(function () {
				//return e.height(e.outerHeight())
			}, t.speed)
		}
	}, {
		key: "_move",
		value: function () {
			var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : 0,
				t = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : function () {};
			if (0 !== e) {
				var n = this.settings,
					i = this.base,
					s = Math.round(parseInt(i.get(0).style.left)) || 0;
				i.css("left", "".concat(s - 100 * e, "%")), "function" == typeof t && setTimeout(t, n.speed)
			}
		}
	}, {
		key: "_resize",
		value: function (e) {
			this.menu.height(e.outerHeight())
		}
	}, {
		key: "_transition",
		value: function () {
			var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : 300,
				t = this.menu,
				n = this.base;
			t.css("transition-duration", "".concat(e, "ms")), n.css("transition-duration", "".concat(e, "ms"))
		}
	}, {
		key: "jump",
		value: function (e) {
			var t = !(1 < arguments.length && void 0 !== arguments[1]) || arguments[1];
			if (e) {
				var n = this.menu,
					i = this.settings,
					s = jQuery(e),
					a = n.find(".active"),
					r = 0;
				0 < a.length && (r = a.parentsUntil(n, "ul").length), n.find("ul").removeClass("active").hide();
				var o = s.parentsUntil(n, "ul");
				o.show(), s.show().addClass("active"), t || this._transition(0), this._move(o.length - r), i.resize && this._resize(s), t || this._transition(i.speed)
			}
		}
	}, {
		key: "home",
		value: function () {
			var e = !(0 < arguments.length && void 0 !== arguments[0]) || arguments[0],
				t = this.base,
				n = this.menu,
				i = this.settings;
			e || this._transition(0);
			var s = n.find(".active"),
				a = s.parentsUntil(n, "ul");
			this._move(-a.length, function () {
				s.removeClass("active").hide(), a.not(t).hide()
			}), i.resize && this._resize(t), !1 === e && this._transition(i.speed)
		}
	}, {
		key: "destroy",
		value: function () {
			var t = this,
				e = this.base,
				n = this.menu;
			jQuery(".header", n).remove(), jQuery("a", n).removeClass("next").off("click"), n.css({
				height: "",
				"transition-duration": ""
			}), e.css({
				left: "",
				"transition-duration": ""
			}), jQuery("li > a > span", n).contents().unwrap(), n.find(".active").removeClass("active"), n.attr("class").split(" ").forEach(function (e) {
				0 === e.indexOf("slinky") && n.removeClass(e)
			});
			["settings", "menu", "base"].forEach(function (e) {
				return delete t[e]
			})
		}
	}]), n
}();
jQuery.fn.slinky = function (e) {
	return new Slinky(this, e)
};
//# sourceMappingURL=slinky.min.js.map