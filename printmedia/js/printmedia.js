if ("undefined" == typeof jQuery) throw new Error("Bootstrap requires jQuery");
function ssc_init() {
  if (document.body) {
    var t = document.body,
      e = document.documentElement,
      i = window.innerHeight,
      n = t.scrollHeight;
    if (
      ((ssc_root = document.compatMode.indexOf("CSS") >= 0 ? e : t),
      (ssc_activeElement = t),
      (ssc_initdone = !0),
      top != self)
    )
      ssc_frame = !0;
    else if (
      n > i &&
      (t.offsetHeight <= i || e.offsetHeight <= i) &&
      ((ssc_root.style.height = "auto"), ssc_root.offsetHeight <= i)
    ) {
      var s = document.createElement("div");
      (s.style.clear = "both"), t.appendChild(s);
    }
    ssc_fixedback ||
      ((t.style.backgroundAttachment = "scroll"),
      (e.style.backgroundAttachment = "scroll")),
      ssc_keyboardsupport && ssc_addEvent("keydown", ssc_keydown);
  }
}
function ssc_scrollArray(t, e, i, n) {
  if (
    (n || (n = 1e3),
    ssc_directionCheck(e, i),
    ssc_que.push({
      x: e,
      y: i,
      lastX: e < 0 ? 0.99 : -0.99,
      lastY: i < 0 ? 0.99 : -0.99,
      start: +new Date(),
    }),
    !ssc_pending)
  ) {
    var s = function () {
      for (var o = +new Date(), a = 0, r = 0, l = 0; l < ssc_que.length; l++) {
        var h = ssc_que[l],
          c = o - h.start,
          u = c >= ssc_animtime,
          d = u ? 1 : c / ssc_animtime;
        ssc_pulseAlgorithm && (d = ssc_pulse(d));
        var f = (h.x * d - h.lastX) >> 0,
          p = (h.y * d - h.lastY) >> 0;
        (a += f),
          (r += p),
          (h.lastX += f),
          (h.lastY += p),
          u && (ssc_que.splice(l, 1), l--);
      }
      if (e) {
        var m = t.scrollLeft;
        (t.scrollLeft += a), a && t.scrollLeft === m && (e = 0);
      }
      if (i) {
        var g = t.scrollTop;
        (t.scrollTop += r), r && t.scrollTop === g && (i = 0);
      }
      e || i || (ssc_que = []),
        ssc_que.length
          ? setTimeout(s, n / ssc_framerate + 1)
          : (ssc_pending = !1);
    };
    setTimeout(s, 0), (ssc_pending = !0);
  }
}
function ssc_wheel(t) {
  ssc_initdone || ssc_init();
  var e = t.target,
    i = ssc_overflowingAncestor(e);
  if (
    !i ||
    t.defaultPrevented ||
    ssc_isNodeName(ssc_activeElement, "embed") ||
    (ssc_isNodeName(e, "embed") && /\.pdf/i.test(e.src))
  )
    return !0;
  var n = t.wheelDeltaX || 0,
    s = t.wheelDeltaY || 0;
  n || s || (s = t.wheelDelta || 0),
    Math.abs(n) > 1.2 && (n *= ssc_stepsize / 120),
    Math.abs(s) > 1.2 && (s *= ssc_stepsize / 120),
    ssc_scrollArray(i, -n, -s),
    t.preventDefault();
}
function ssc_keydown(t) {
  var e = t.target,
    i = t.ctrlKey || t.altKey || t.metaKey;
  if (
    /input|textarea|embed/i.test(e.nodeName) ||
    e.isContentEditable ||
    t.defaultPrevented ||
    i
  )
    return !0;
  if (ssc_isNodeName(e, "button") && t.keyCode === ssc_key.spacebar) return !0;
  var n = 0,
    s = 0,
    o = ssc_overflowingAncestor(ssc_activeElement),
    a = o.clientHeight;
  switch ((o == document.body && (a = window.innerHeight), t.keyCode)) {
    case ssc_key.up:
      s = -ssc_arrowscroll;
      break;
    case ssc_key.down:
      s = ssc_arrowscroll;
      break;
    case ssc_key.spacebar:
      s = -(t.shiftKey ? 1 : -1) * a * 0.9;
      break;
    case ssc_key.pageup:
      s = 0.9 * -a;
      break;
    case ssc_key.pagedown:
      s = 0.9 * a;
      break;
    case ssc_key.home:
      s = -o.scrollTop;
      break;
    case ssc_key.end:
      var r = o.scrollHeight - o.scrollTop - a;
      s = r > 0 ? r + 10 : 0;
      break;
    case ssc_key.left:
      n = -ssc_arrowscroll;
      break;
    case ssc_key.right:
      n = ssc_arrowscroll;
      break;
    default:
      return !0;
  }
  ssc_scrollArray(o, n, s), t.preventDefault();
}
function ssc_mousedown(t) {
  ssc_activeElement = t.target;
}
function ssc_setCache(t, e) {
  for (var i = t.length; i--; ) ssc_cache[ssc_uniqueID(t[i])] = e;
  return e;
}
function ssc_overflowingAncestor(t) {
  var e = [],
    i = ssc_root.scrollHeight;
  do {
    var n = ssc_cache[ssc_uniqueID(t)];
    if (n) return ssc_setCache(e, n);
    if ((e.push(t), i === t.scrollHeight)) {
      if (!ssc_frame || ssc_root.clientHeight + 10 < i)
        return ssc_setCache(e, document.body);
    } else if (
      t.clientHeight + 10 < t.scrollHeight &&
      ((overflow = getComputedStyle(t, "").getPropertyValue("overflow")),
      "scroll" === overflow || "auto" === overflow)
    )
      return ssc_setCache(e, t);
  } while ((t = t.parentNode));
}
function ssc_addEvent(t, e, i) {
  window.addEventListener(t, e, i || !1);
}
function ssc_removeEvent(t, e, i) {
  window.removeEventListener(t, e, i || !1);
}
function ssc_isNodeName(t, e) {
  return t.nodeName.toLowerCase() === e.toLowerCase();
}
function ssc_directionCheck(t, e) {
  (t = t > 0 ? 1 : -1),
    (e = e > 0 ? 1 : -1),
    (ssc_direction.x === t && ssc_direction.y === e) ||
      ((ssc_direction.x = t), (ssc_direction.y = e), (ssc_que = []));
}
function ssc_pulse_(t) {
  var e, i;
  return (
    (t *= ssc_pulseScale) < 1
      ? (e = t - (1 - Math.exp(-t)))
      : ((t -= 1), (e = (i = Math.exp(-1)) + (1 - Math.exp(-t)) * (1 - i))),
    e * ssc_pulseNormalize
  );
}
function ssc_pulse(t) {
  return t >= 1
    ? 1
    : t <= 0
    ? 0
    : (1 == ssc_pulseNormalize && (ssc_pulseNormalize /= ssc_pulse_(1)),
      ssc_pulse_(t));
}
!(function (t) {
  "use strict";
  (t.fn.emulateTransitionEnd = function (e) {
    var i = !1,
      n = this;
    return (
      t(this).one(t.support.transition.end, function () {
        i = !0;
      }),
      setTimeout(function () {
        i || t(n).trigger(t.support.transition.end);
      }, e),
      this
    );
  }),
    t(function () {
      t.support.transition = (function () {
        var t = document.createElement("bootstrap"),
          e = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend",
          };
        for (var i in e) if (void 0 !== t.style[i]) return { end: e[i] };
        return !1;
      })();
    });
})(jQuery),
  (function (t) {
    "use strict";
    var e = '[data-dismiss="alert"]',
      i = function (i) {
        t(i).on("click", e, this.close);
      };
    i.prototype.close = function (e) {
      function i() {
        o.trigger("closed.bs.alert").remove();
      }
      var n = t(this),
        s = n.attr("data-target");
      s || (s = (s = n.attr("href")) && s.replace(/.*(?=#[^\s]*$)/, ""));
      var o = t(s);
      e && e.preventDefault(),
        o.length || (o = n.hasClass("alert") ? n : n.parent()),
        o.trigger((e = t.Event("close.bs.alert"))),
        e.isDefaultPrevented() ||
          (o.removeClass("in"),
          t.support.transition && o.hasClass("fade")
            ? o.one(t.support.transition.end, i).emulateTransitionEnd(150)
            : i());
    };
    var n = t.fn.alert;
    (t.fn.alert = function (e) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.alert");
        s || n.data("bs.alert", (s = new i(this))),
          "string" == typeof e && s[e].call(n);
      });
    }),
      (t.fn.alert.Constructor = i),
      (t.fn.alert.noConflict = function () {
        return (t.fn.alert = n), this;
      }),
      t(document).on("click.bs.alert.data-api", e, i.prototype.close);
  })(jQuery),
  (function (t) {
    "use strict";
    var e = function (i, n) {
      (this.$element = t(i)),
        (this.options = t.extend({}, e.DEFAULTS, n)),
        (this.isLoading = !1);
    };
    (e.DEFAULTS = { loadingText: "loading..." }),
      (e.prototype.setState = function (e) {
        var i = "disabled",
          n = this.$element,
          s = n.is("input") ? "val" : "html",
          o = n.data();
        (e += "Text"),
          o.resetText || n.data("resetText", n[s]()),
          n[s](o[e] || this.options[e]),
          setTimeout(
            t.proxy(function () {
              "loadingText" == e
                ? ((this.isLoading = !0), n.addClass(i).attr(i, i))
                : this.isLoading &&
                  ((this.isLoading = !1), n.removeClass(i).removeAttr(i));
            }, this),
            0
          );
      }),
      (e.prototype.toggle = function () {
        var t = !0,
          e = this.$element.closest('[data-toggle="buttons"]');
        if (e.length) {
          var i = this.$element.find("input");
          "radio" == i.prop("type") &&
            (i.prop("checked") && this.$element.hasClass("active")
              ? (t = !1)
              : e.find(".active").removeClass("active")),
            t &&
              i
                .prop("checked", !this.$element.hasClass("active"))
                .trigger("change");
        }
        t && this.$element.toggleClass("active");
      });
    var i = t.fn.button;
    (t.fn.button = function (i) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.button"),
          o = "object" == typeof i && i;
        s || n.data("bs.button", (s = new e(this, o))),
          "toggle" == i ? s.toggle() : i && s.setState(i);
      });
    }),
      (t.fn.button.Constructor = e),
      (t.fn.button.noConflict = function () {
        return (t.fn.button = i), this;
      }),
      t(document).on(
        "click.bs.button.data-api",
        "[data-toggle^=button]",
        function (e) {
          var i = t(e.target);
          i.hasClass("btn") || (i = i.closest(".btn")),
            i.button("toggle"),
            e.preventDefault();
        }
      );
  })(jQuery),
  (function (t) {
    "use strict";
    var e = function (e, i) {
      (this.$element = t(e)),
        (this.$indicators = this.$element.find(".carousel-indicators")),
        (this.options = i),
        (this.paused =
          this.sliding =
          this.interval =
          this.$active =
          this.$items =
            null),
        "hover" == this.options.pause &&
          this.$element
            .on("mouseenter", t.proxy(this.pause, this))
            .on("mouseleave", t.proxy(this.cycle, this));
    };
    (e.DEFAULTS = { interval: 5e3, pause: "hover", wrap: !0 }),
      (e.prototype.cycle = function (e) {
        return (
          e || (this.paused = !1),
          this.interval && clearInterval(this.interval),
          this.options.interval &&
            !this.paused &&
            (this.interval = setInterval(
              t.proxy(this.next, this),
              this.options.interval
            )),
          this
        );
      }),
      (e.prototype.getActiveIndex = function () {
        return (
          (this.$active = this.$element.find(".item.active")),
          (this.$items = this.$active.parent().children()),
          this.$items.index(this.$active)
        );
      }),
      (e.prototype.to = function (e) {
        var i = this,
          n = this.getActiveIndex();
        return e > this.$items.length - 1 || 0 > e
          ? void 0
          : this.sliding
          ? this.$element.one("slid.bs.carousel", function () {
              i.to(e);
            })
          : n == e
          ? this.pause().cycle()
          : this.slide(e > n ? "next" : "prev", t(this.$items[e]));
      }),
      (e.prototype.pause = function (e) {
        return (
          e || (this.paused = !0),
          this.$element.find(".next, .prev").length &&
            t.support.transition &&
            (this.$element.trigger(t.support.transition.end), this.cycle(!0)),
          (this.interval = clearInterval(this.interval)),
          this
        );
      }),
      (e.prototype.next = function () {
        return this.sliding ? void 0 : this.slide("next");
      }),
      (e.prototype.prev = function () {
        return this.sliding ? void 0 : this.slide("prev");
      }),
      (e.prototype.slide = function (e, i) {
        var n = this.$element.find(".item.active"),
          s = i || n[e](),
          o = this.interval,
          a = "next" == e ? "left" : "right",
          r = "next" == e ? "first" : "last",
          l = this;
        if (!s.length) {
          if (!this.options.wrap) return;
          s = this.$element.find(".item")[r]();
        }
        if (s.hasClass("active")) return (this.sliding = !1);
        var h = t.Event("slide.bs.carousel", {
          relatedTarget: s[0],
          direction: a,
        });
        return (
          this.$element.trigger(h),
          h.isDefaultPrevented()
            ? void 0
            : ((this.sliding = !0),
              o && this.pause(),
              this.$indicators.length &&
                (this.$indicators.find(".active").removeClass("active"),
                this.$element.one("slid.bs.carousel", function () {
                  var e = t(l.$indicators.children()[l.getActiveIndex()]);
                  e && e.addClass("active");
                })),
              t.support.transition && this.$element.hasClass("slide")
                ? (s.addClass(e),
                  s[0].offsetWidth,
                  n.addClass(a),
                  s.addClass(a),
                  n
                    .one(t.support.transition.end, function () {
                      s.removeClass([e, a].join(" ")).addClass("active"),
                        n.removeClass(["active", a].join(" ")),
                        (l.sliding = !1),
                        setTimeout(function () {
                          l.$element.trigger("slid.bs.carousel");
                        }, 0);
                    })
                    .emulateTransitionEnd(
                      1e3 * n.css("transition-duration").slice(0, -1)
                    ))
                : (n.removeClass("active"),
                  s.addClass("active"),
                  (this.sliding = !1),
                  this.$element.trigger("slid.bs.carousel")),
              o && this.cycle(),
              this)
        );
      });
    var i = t.fn.carousel;
    (t.fn.carousel = function (i) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.carousel"),
          o = t.extend({}, e.DEFAULTS, n.data(), "object" == typeof i && i),
          a = "string" == typeof i ? i : o.slide;
        s || n.data("bs.carousel", (s = new e(this, o))),
          "number" == typeof i
            ? s.to(i)
            : a
            ? s[a]()
            : o.interval && s.pause().cycle();
      });
    }),
      (t.fn.carousel.Constructor = e),
      (t.fn.carousel.noConflict = function () {
        return (t.fn.carousel = i), this;
      }),
      t(document).on(
        "click.bs.carousel.data-api",
        "[data-slide], [data-slide-to]",
        function (e) {
          var i,
            n = t(this),
            s = t(
              n.attr("data-target") ||
                ((i = n.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, ""))
            ),
            o = t.extend({}, s.data(), n.data()),
            a = n.attr("data-slide-to");
          a && (o.interval = !1),
            s.carousel(o),
            (a = n.attr("data-slide-to")) && s.data("bs.carousel").to(a),
            e.preventDefault();
        }
      ),
      t(window).on("load", function () {
        t('[data-ride="carousel"]').each(function () {
          var e = t(this);
          e.carousel(e.data());
        });
      });
  })(jQuery),
  (function (t) {
    "use strict";
    var e = function (i, n) {
      (this.$element = t(i)),
        (this.options = t.extend({}, e.DEFAULTS, n)),
        (this.transitioning = null),
        this.options.parent && (this.$parent = t(this.options.parent)),
        this.options.toggle && this.toggle();
    };
    (e.DEFAULTS = { toggle: !0 }),
      (e.prototype.dimension = function () {
        return this.$element.hasClass("width") ? "width" : "height";
      }),
      (e.prototype.show = function () {
        if (!this.transitioning && !this.$element.hasClass("in")) {
          var e = t.Event("show.bs.collapse");
          if ((this.$element.trigger(e), !e.isDefaultPrevented())) {
            var i = this.$parent && this.$parent.find("> .panel > .in");
            if (i && i.length) {
              var n = i.data("bs.collapse");
              if (n && n.transitioning) return;
              i.collapse("hide"), n || i.data("bs.collapse", null);
            }
            var s = this.dimension();
            this.$element.removeClass("collapse").addClass("collapsing")[s](0),
              (this.transitioning = 1);
            var o = function () {
              this.$element
                .removeClass("collapsing")
                .addClass("collapse in")
                [s]("auto"),
                (this.transitioning = 0),
                this.$element.trigger("shown.bs.collapse");
            };
            if (!t.support.transition) return o.call(this);
            var a = t.camelCase(["scroll", s].join("-"));
            this.$element
              .one(t.support.transition.end, t.proxy(o, this))
              .emulateTransitionEnd(350)
              [s](this.$element[0][a]);
          }
        }
      }),
      (e.prototype.hide = function () {
        if (!this.transitioning && this.$element.hasClass("in")) {
          var e = t.Event("hide.bs.collapse");
          if ((this.$element.trigger(e), !e.isDefaultPrevented())) {
            var i = this.dimension();
            this.$element[i](this.$element[i]())[0].offsetHeight,
              this.$element
                .addClass("collapsing")
                .removeClass("collapse")
                .removeClass("in"),
              (this.transitioning = 1);
            var n = function () {
              (this.transitioning = 0),
                this.$element
                  .trigger("hidden.bs.collapse")
                  .removeClass("collapsing")
                  .addClass("collapse");
            };
            return t.support.transition
              ? void this.$element[i](0)
                  .one(t.support.transition.end, t.proxy(n, this))
                  .emulateTransitionEnd(350)
              : n.call(this);
          }
        }
      }),
      (e.prototype.toggle = function () {
        this[this.$element.hasClass("in") ? "hide" : "show"]();
      });
    var i = t.fn.collapse;
    (t.fn.collapse = function (i) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.collapse"),
          o = t.extend({}, e.DEFAULTS, n.data(), "object" == typeof i && i);
        !s && o.toggle && "show" == i && (i = !i),
          s || n.data("bs.collapse", (s = new e(this, o))),
          "string" == typeof i && s[i]();
      });
    }),
      (t.fn.collapse.Constructor = e),
      (t.fn.collapse.noConflict = function () {
        return (t.fn.collapse = i), this;
      }),
      t(document).on(
        "click.bs.collapse.data-api",
        "[data-toggle=collapse]",
        function (e) {
          var i,
            n = t(this),
            s =
              n.attr("data-target") ||
              e.preventDefault() ||
              ((i = n.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, "")),
            o = t(s),
            a = o.data("bs.collapse"),
            r = a ? "toggle" : n.data(),
            l = n.attr("data-parent"),
            h = l && t(l);
          (a && a.transitioning) ||
            (h &&
              h
                .find('[data-toggle=collapse][data-parent="' + l + '"]')
                .not(n)
                .addClass("collapsed"),
            n[o.hasClass("in") ? "addClass" : "removeClass"]("collapsed")),
            o.collapse(r);
        }
      );
  })(jQuery),
  (function (t) {
    "use strict";
    function e(e) {
      t(n).remove(),
        t(s).each(function () {
          var n = i(t(this)),
            s = { relatedTarget: this };
          n.hasClass("open") &&
            (n.trigger((e = t.Event("hide.bs.dropdown", s))),
            e.isDefaultPrevented() ||
              n.removeClass("open").trigger("hidden.bs.dropdown", s));
        });
    }
    function i(e) {
      var i = e.attr("data-target");
      i ||
        (i =
          (i = e.attr("href")) &&
          /#[A-Za-z]/.test(i) &&
          i.replace(/.*(?=#[^\s]*$)/, ""));
      var n = i && t(i);
      return n && n.length ? n : e.parent();
    }
    var n = ".dropdown-backdrop",
      s = "[data-toggle=dropdown]",
      o = function (e) {
        t(e).on("click.bs.dropdown", this.toggle);
      };
    (o.prototype.toggle = function (n) {
      var s = t(this);
      if (!s.is(".disabled, :disabled")) {
        var o = i(s),
          a = o.hasClass("open");
        if ((e(), !a)) {
          "ontouchstart" in document.documentElement &&
            !o.closest(".navbar-nav").length &&
            t('<div class="dropdown-backdrop"/>')
              .insertAfter(t(this))
              .on("click", e);
          var r = { relatedTarget: this };
          if (
            (o.trigger((n = t.Event("show.bs.dropdown", r))),
            n.isDefaultPrevented())
          )
            return;
          o.toggleClass("open").trigger("shown.bs.dropdown", r), s.focus();
        }
        return !1;
      }
    }),
      (o.prototype.keydown = function (e) {
        if (/(38|40|27)/.test(e.keyCode)) {
          var n = t(this);
          if (
            (e.preventDefault(),
            e.stopPropagation(),
            !n.is(".disabled, :disabled"))
          ) {
            var o = i(n),
              a = o.hasClass("open");
            if (!a || (a && 27 == e.keyCode))
              return 27 == e.which && o.find(s).focus(), n.click();
            var r = " li:not(.divider):visible a",
              l = o.find("[role=menu]" + r + ", [role=listbox]" + r);
            if (l.length) {
              var h = l.index(l.filter(":focus"));
              38 == e.keyCode && h > 0 && h--,
                40 == e.keyCode && h < l.length - 1 && h++,
                ~h || (h = 0),
                l.eq(h).focus();
            }
          }
        }
      });
    var a = t.fn.dropdown;
    (t.fn.dropdown = function (e) {
      return this.each(function () {
        var i = t(this),
          n = i.data("bs.dropdown");
        n || i.data("bs.dropdown", (n = new o(this))),
          "string" == typeof e && n[e].call(i);
      });
    }),
      (t.fn.dropdown.Constructor = o),
      (t.fn.dropdown.noConflict = function () {
        return (t.fn.dropdown = a), this;
      }),
      t(document)
        .on("click.bs.dropdown.data-api", e)
        .on("click.bs.dropdown.data-api", ".dropdown form", function (t) {
          t.stopPropagation();
        })
        .on("click.bs.dropdown.data-api", s, o.prototype.toggle)
        .on(
          "keydown.bs.dropdown.data-api",
          s + ", [role=menu], [role=listbox]",
          o.prototype.keydown
        );
  })(jQuery),
  (function (t) {
    "use strict";
    var e = function (e, i) {
      (this.options = i),
        (this.$element = t(e)),
        (this.$backdrop = this.isShown = null),
        this.options.remote &&
          this.$element.find(".modal-content").load(
            this.options.remote,
            t.proxy(function () {
              this.$element.trigger("loaded.bs.modal");
            }, this)
          );
    };
    (e.DEFAULTS = { backdrop: !0, keyboard: !0, show: !0 }),
      (e.prototype.toggle = function (t) {
        return this[this.isShown ? "hide" : "show"](t);
      }),
      (e.prototype.show = function (e) {
        var i = this,
          n = t.Event("show.bs.modal", { relatedTarget: e });
        this.$element.trigger(n),
          this.isShown ||
            n.isDefaultPrevented() ||
            ((this.isShown = !0),
            this.escape(),
            this.$element.on(
              "click.dismiss.bs.modal",
              '[data-dismiss="modal"]',
              t.proxy(this.hide, this)
            ),
            this.backdrop(function () {
              var n = t.support.transition && i.$element.hasClass("fade");
              i.$element.parent().length || i.$element.appendTo(document.body),
                i.$element.show().scrollTop(0),
                n && i.$element[0].offsetWidth,
                i.$element.addClass("in").attr("aria-hidden", !1),
                i.enforceFocus();
              var s = t.Event("shown.bs.modal", { relatedTarget: e });
              n
                ? i.$element
                    .find(".modal-dialog")
                    .one(t.support.transition.end, function () {
                      i.$element.focus().trigger(s);
                    })
                    .emulateTransitionEnd(300)
                : i.$element.focus().trigger(s);
            }));
      }),
      (e.prototype.hide = function (e) {
        e && e.preventDefault(),
          (e = t.Event("hide.bs.modal")),
          this.$element.trigger(e),
          this.isShown &&
            !e.isDefaultPrevented() &&
            ((this.isShown = !1),
            this.escape(),
            t(document).off("focusin.bs.modal"),
            this.$element
              .removeClass("in")
              .attr("aria-hidden", !0)
              .off("click.dismiss.bs.modal"),
            t.support.transition && this.$element.hasClass("fade")
              ? this.$element
                  .one(t.support.transition.end, t.proxy(this.hideModal, this))
                  .emulateTransitionEnd(300)
              : this.hideModal());
      }),
      (e.prototype.enforceFocus = function () {
        t(document)
          .off("focusin.bs.modal")
          .on(
            "focusin.bs.modal",
            t.proxy(function (t) {
              this.$element[0] === t.target ||
                this.$element.has(t.target).length ||
                this.$element.focus();
            }, this)
          );
      }),
      (e.prototype.escape = function () {
        this.isShown && this.options.keyboard
          ? this.$element.on(
              "keyup.dismiss.bs.modal",
              t.proxy(function (t) {
                27 == t.which && this.hide();
              }, this)
            )
          : this.isShown || this.$element.off("keyup.dismiss.bs.modal");
      }),
      (e.prototype.hideModal = function () {
        var t = this;
        this.$element.hide(),
          this.backdrop(function () {
            t.removeBackdrop(), t.$element.trigger("hidden.bs.modal");
          });
      }),
      (e.prototype.removeBackdrop = function () {
        this.$backdrop && this.$backdrop.remove(), (this.$backdrop = null);
      }),
      (e.prototype.backdrop = function (e) {
        var i = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
          var n = t.support.transition && i;
          if (
            ((this.$backdrop = t(
              '<div class="modal-backdrop ' + i + '" />'
            ).appendTo(document.body)),
            this.$element.on(
              "click.dismiss.bs.modal",
              t.proxy(function (t) {
                t.target === t.currentTarget &&
                  ("static" == this.options.backdrop
                    ? this.$element[0].focus.call(this.$element[0])
                    : this.hide.call(this));
              }, this)
            ),
            n && this.$backdrop[0].offsetWidth,
            this.$backdrop.addClass("in"),
            !e)
          )
            return;
          n
            ? this.$backdrop
                .one(t.support.transition.end, e)
                .emulateTransitionEnd(150)
            : e();
        } else
          !this.isShown && this.$backdrop
            ? (this.$backdrop.removeClass("in"),
              t.support.transition && this.$element.hasClass("fade")
                ? this.$backdrop
                    .one(t.support.transition.end, e)
                    .emulateTransitionEnd(150)
                : e())
            : e && e();
      });
    var i = t.fn.modal;
    (t.fn.modal = function (i, n) {
      return this.each(function () {
        var s = t(this),
          o = s.data("bs.modal"),
          a = t.extend({}, e.DEFAULTS, s.data(), "object" == typeof i && i);
        o || s.data("bs.modal", (o = new e(this, a))),
          "string" == typeof i ? o[i](n) : a.show && o.show(n);
      });
    }),
      (t.fn.modal.Constructor = e),
      (t.fn.modal.noConflict = function () {
        return (t.fn.modal = i), this;
      }),
      t(document).on(
        "click.bs.modal.data-api",
        '[data-toggle="modal"]',
        function (e) {
          var i = t(this),
            n = i.attr("href"),
            s = t(
              i.attr("data-target") || (n && n.replace(/.*(?=#[^\s]+$)/, ""))
            ),
            o = s.data("bs.modal")
              ? "toggle"
              : t.extend({ remote: !/#/.test(n) && n }, s.data(), i.data());
          i.is("a") && e.preventDefault(),
            s.modal(o, this).one("hide", function () {
              i.is(":visible") && i.focus();
            });
        }
      ),
      t(document)
        .on("show.bs.modal", ".modal", function () {
          t(document.body).addClass("modal-open");
        })
        .on("hidden.bs.modal", ".modal", function () {
          t(document.body).removeClass("modal-open");
        });
  })(jQuery),
  (function (t) {
    "use strict";
    var e = function (t, e) {
      (this.type =
        this.options =
        this.enabled =
        this.timeout =
        this.hoverState =
        this.$element =
          null),
        this.init("tooltip", t, e);
    };
    (e.DEFAULTS = {
      animation: !0,
      placement: "top",
      selector: !1,
      template:
        '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
      trigger: "hover focus",
      title: "",
      delay: 0,
      html: !1,
      container: !1,
    }),
      (e.prototype.init = function (e, i, n) {
        (this.enabled = !0),
          (this.type = e),
          (this.$element = t(i)),
          (this.options = this.getOptions(n));
        for (var s = this.options.trigger.split(" "), o = s.length; o--; ) {
          var a = s[o];
          if ("click" == a)
            this.$element.on(
              "click." + this.type,
              this.options.selector,
              t.proxy(this.toggle, this)
            );
          else if ("manual" != a) {
            var r = "hover" == a ? "mouseenter" : "focusin",
              l = "hover" == a ? "mouseleave" : "focusout";
            this.$element.on(
              r + "." + this.type,
              this.options.selector,
              t.proxy(this.enter, this)
            ),
              this.$element.on(
                l + "." + this.type,
                this.options.selector,
                t.proxy(this.leave, this)
              );
          }
        }
        this.options.selector
          ? (this._options = t.extend({}, this.options, {
              trigger: "manual",
              selector: "",
            }))
          : this.fixTitle();
      }),
      (e.prototype.getDefaults = function () {
        return e.DEFAULTS;
      }),
      (e.prototype.getOptions = function (e) {
        return (
          (e = t.extend({}, this.getDefaults(), this.$element.data(), e))
            .delay &&
            "number" == typeof e.delay &&
            (e.delay = { show: e.delay, hide: e.delay }),
          e
        );
      }),
      (e.prototype.getDelegateOptions = function () {
        var e = {},
          i = this.getDefaults();
        return (
          this._options &&
            t.each(this._options, function (t, n) {
              i[t] != n && (e[t] = n);
            }),
          e
        );
      }),
      (e.prototype.enter = function (e) {
        var i =
          e instanceof this.constructor
            ? e
            : t(e.currentTarget)
                [this.type](this.getDelegateOptions())
                .data("bs." + this.type);
        return (
          clearTimeout(i.timeout),
          (i.hoverState = "in"),
          i.options.delay && i.options.delay.show
            ? void (i.timeout = setTimeout(function () {
                "in" == i.hoverState && i.show();
              }, i.options.delay.show))
            : i.show()
        );
      }),
      (e.prototype.leave = function (e) {
        var i =
          e instanceof this.constructor
            ? e
            : t(e.currentTarget)
                [this.type](this.getDelegateOptions())
                .data("bs." + this.type);
        return (
          clearTimeout(i.timeout),
          (i.hoverState = "out"),
          i.options.delay && i.options.delay.hide
            ? void (i.timeout = setTimeout(function () {
                "out" == i.hoverState && i.hide();
              }, i.options.delay.hide))
            : i.hide()
        );
      }),
      (e.prototype.show = function () {
        var e = t.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
          if ((this.$element.trigger(e), e.isDefaultPrevented())) return;
          var i = this,
            n = this.tip();
          this.setContent(), this.options.animation && n.addClass("fade");
          var s =
              "function" == typeof this.options.placement
                ? this.options.placement.call(this, n[0], this.$element[0])
                : this.options.placement,
            o = /\s?auto?\s?/i,
            a = o.test(s);
          a && (s = s.replace(o, "") || "top"),
            n.detach().css({ top: 0, left: 0, display: "block" }).addClass(s),
            this.options.container
              ? n.appendTo(this.options.container)
              : n.insertAfter(this.$element);
          var r = this.getPosition(),
            l = n[0].offsetWidth,
            h = n[0].offsetHeight;
          if (a) {
            var c = this.$element.parent(),
              u = s,
              d = document.documentElement.scrollTop || document.body.scrollTop,
              f =
                "body" == this.options.container
                  ? window.innerWidth
                  : c.outerWidth(),
              p =
                "body" == this.options.container
                  ? window.innerHeight
                  : c.outerHeight(),
              m = "body" == this.options.container ? 0 : c.offset().left;
            (s =
              "bottom" == s && r.top + r.height + h - d > p
                ? "top"
                : "top" == s && r.top - d - h < 0
                ? "bottom"
                : "right" == s && r.right + l > f
                ? "left"
                : "left" == s && r.left - l < m
                ? "right"
                : s),
              n.removeClass(u).addClass(s);
          }
          var g = this.getCalculatedOffset(s, r, l, h);
          this.applyPlacement(g, s), (this.hoverState = null);
          var v = function () {
            i.$element.trigger("shown.bs." + i.type);
          };
          t.support.transition && this.$tip.hasClass("fade")
            ? n.one(t.support.transition.end, v).emulateTransitionEnd(150)
            : v();
        }
      }),
      (e.prototype.applyPlacement = function (e, i) {
        var n,
          s = this.tip(),
          o = s[0].offsetWidth,
          a = s[0].offsetHeight,
          r = parseInt(s.css("margin-top"), 10),
          l = parseInt(s.css("margin-left"), 10);
        isNaN(r) && (r = 0),
          isNaN(l) && (l = 0),
          (e.top = e.top + r),
          (e.left = e.left + l),
          t.offset.setOffset(
            s[0],
            t.extend(
              {
                using: function (t) {
                  s.css({ top: Math.round(t.top), left: Math.round(t.left) });
                },
              },
              e
            ),
            0
          ),
          s.addClass("in");
        var h = s[0].offsetWidth,
          c = s[0].offsetHeight;
        if (
          ("top" == i && c != a && ((n = !0), (e.top = e.top + a - c)),
          /bottom|top/.test(i))
        ) {
          var u = 0;
          e.left < 0 &&
            ((u = -2 * e.left),
            (e.left = 0),
            s.offset(e),
            (h = s[0].offsetWidth),
            (c = s[0].offsetHeight)),
            this.replaceArrow(u - o + h, h, "left");
        } else this.replaceArrow(c - a, c, "top");
        n && s.offset(e);
      }),
      (e.prototype.replaceArrow = function (t, e, i) {
        this.arrow().css(i, t ? 50 * (1 - t / e) + "%" : "");
      }),
      (e.prototype.setContent = function () {
        var t = this.tip(),
          e = this.getTitle();
        t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e),
          t.removeClass("fade in top bottom left right");
      }),
      (e.prototype.hide = function () {
        function e() {
          "in" != i.hoverState && n.detach(),
            i.$element.trigger("hidden.bs." + i.type);
        }
        var i = this,
          n = this.tip(),
          s = t.Event("hide.bs." + this.type);
        return (
          this.$element.trigger(s),
          s.isDefaultPrevented()
            ? void 0
            : (n.removeClass("in"),
              t.support.transition && this.$tip.hasClass("fade")
                ? n.one(t.support.transition.end, e).emulateTransitionEnd(150)
                : e(),
              (this.hoverState = null),
              this)
        );
      }),
      (e.prototype.fixTitle = function () {
        var t = this.$element;
        (t.attr("title") || "string" != typeof t.attr("data-original-title")) &&
          t
            .attr("data-original-title", t.attr("title") || "")
            .attr("title", "");
      }),
      (e.prototype.hasContent = function () {
        return this.getTitle();
      }),
      (e.prototype.getPosition = function () {
        var e = this.$element[0];
        return t.extend(
          {},
          "function" == typeof e.getBoundingClientRect
            ? e.getBoundingClientRect()
            : { width: e.offsetWidth, height: e.offsetHeight },
          this.$element.offset()
        );
      }),
      (e.prototype.getCalculatedOffset = function (t, e, i, n) {
        return "bottom" == t
          ? { top: e.top + e.height, left: e.left + e.width / 2 - i / 2 }
          : "top" == t
          ? { top: e.top - n, left: e.left + e.width / 2 - i / 2 }
          : "left" == t
          ? { top: e.top + e.height / 2 - n / 2, left: e.left - i }
          : { top: e.top + e.height / 2 - n / 2, left: e.left + e.width };
      }),
      (e.prototype.getTitle = function () {
        var t = this.$element,
          e = this.options;
        return (
          t.attr("data-original-title") ||
          ("function" == typeof e.title ? e.title.call(t[0]) : e.title)
        );
      }),
      (e.prototype.tip = function () {
        return (this.$tip = this.$tip || t(this.options.template));
      }),
      (e.prototype.arrow = function () {
        return (this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow"));
      }),
      (e.prototype.validate = function () {
        this.$element[0].parentNode ||
          (this.hide(), (this.$element = null), (this.options = null));
      }),
      (e.prototype.enable = function () {
        this.enabled = !0;
      }),
      (e.prototype.disable = function () {
        this.enabled = !1;
      }),
      (e.prototype.toggleEnabled = function () {
        this.enabled = !this.enabled;
      }),
      (e.prototype.toggle = function (e) {
        var i = e
          ? t(e.currentTarget)
              [this.type](this.getDelegateOptions())
              .data("bs." + this.type)
          : this;
        i.tip().hasClass("in") ? i.leave(i) : i.enter(i);
      }),
      (e.prototype.destroy = function () {
        clearTimeout(this.timeout),
          this.hide()
            .$element.off("." + this.type)
            .removeData("bs." + this.type);
      });
    var i = t.fn.tooltip;
    (t.fn.tooltip = function (i) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.tooltip"),
          o = "object" == typeof i && i;
        (s || "destroy" != i) &&
          (s || n.data("bs.tooltip", (s = new e(this, o))),
          "string" == typeof i && s[i]());
      });
    }),
      (t.fn.tooltip.Constructor = e),
      (t.fn.tooltip.noConflict = function () {
        return (t.fn.tooltip = i), this;
      });
  })(jQuery),
  (function (t) {
    "use strict";
    var e = function (t, e) {
      this.init("popover", t, e);
    };
    if (!t.fn.tooltip) throw new Error("Popover requires tooltip.js");
    (e.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, {
      placement: "right",
      trigger: "click",
      content: "",
      template:
        '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
    })),
      ((e.prototype = t.extend(
        {},
        t.fn.tooltip.Constructor.prototype
      )).constructor = e),
      (e.prototype.getDefaults = function () {
        return e.DEFAULTS;
      }),
      (e.prototype.setContent = function () {
        var t = this.tip(),
          e = this.getTitle(),
          i = this.getContent();
        t.find(".popover-title")[this.options.html ? "html" : "text"](e),
          t
            .find(".popover-content")
            [
              this.options.html
                ? "string" == typeof i
                  ? "html"
                  : "append"
                : "text"
            ](i),
          t.removeClass("fade top bottom left right in"),
          t.find(".popover-title").html() || t.find(".popover-title").hide();
      }),
      (e.prototype.hasContent = function () {
        return this.getTitle() || this.getContent();
      }),
      (e.prototype.getContent = function () {
        var t = this.$element,
          e = this.options;
        return (
          t.attr("data-content") ||
          ("function" == typeof e.content ? e.content.call(t[0]) : e.content)
        );
      }),
      (e.prototype.arrow = function () {
        return (this.$arrow = this.$arrow || this.tip().find(".arrow"));
      }),
      (e.prototype.tip = function () {
        return this.$tip || (this.$tip = t(this.options.template)), this.$tip;
      });
    var i = t.fn.popover;
    (t.fn.popover = function (i) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.popover"),
          o = "object" == typeof i && i;
        (s || "destroy" != i) &&
          (s || n.data("bs.popover", (s = new e(this, o))),
          "string" == typeof i && s[i]());
      });
    }),
      (t.fn.popover.Constructor = e),
      (t.fn.popover.noConflict = function () {
        return (t.fn.popover = i), this;
      });
  })(jQuery),
  (function (t) {
    "use strict";
    function e(i, n) {
      var s,
        o = t.proxy(this.process, this);
      (this.$element = t(t(i).is("body") ? window : i)),
        (this.$body = t("body")),
        (this.$scrollElement = this.$element.on(
          "scroll.bs.scroll-spy.data-api",
          o
        )),
        (this.options = t.extend({}, e.DEFAULTS, n)),
        (this.selector =
          (this.options.target ||
            ((s = t(i).attr("href")) && s.replace(/.*(?=#[^\s]+$)/, "")) ||
            "") + " .nav li > a"),
        (this.offsets = t([])),
        (this.targets = t([])),
        (this.activeTarget = null),
        this.refresh(),
        this.process();
    }
    (e.DEFAULTS = { offset: 10 }),
      (e.prototype.refresh = function () {
        var e = this.$element[0] == window ? "offset" : "position";
        (this.offsets = t([])), (this.targets = t([]));
        var i = this;
        this.$body
          .find(this.selector)
          .map(function () {
            var n = t(this),
              s = n.data("target") || n.attr("href"),
              o = /^#./.test(s) && t(s);
            return (
              (o &&
                o.length &&
                o.is(":visible") && [
                  [
                    o[e]().top +
                      (!t.isWindow(i.$scrollElement.get(0)) &&
                        i.$scrollElement.scrollTop()),
                    s,
                  ],
                ]) ||
              null
            );
          })
          .sort(function (t, e) {
            return t[0] - e[0];
          })
          .each(function () {
            i.offsets.push(this[0]), i.targets.push(this[1]);
          });
      }),
      (e.prototype.process = function () {
        var t,
          e = this.$scrollElement.scrollTop() + this.options.offset,
          i =
            (this.$scrollElement[0].scrollHeight ||
              this.$body[0].scrollHeight) - this.$scrollElement.height(),
          n = this.offsets,
          s = this.targets,
          o = this.activeTarget;
        if (e >= i) return o != (t = s.last()[0]) && this.activate(t);
        if (o && e <= n[0]) return o != (t = s[0]) && this.activate(t);
        for (t = n.length; t--; )
          o != s[t] &&
            e >= n[t] &&
            (!n[t + 1] || e <= n[t + 1]) &&
            this.activate(s[t]);
      }),
      (e.prototype.activate = function (e) {
        (this.activeTarget = e),
          t(this.selector)
            .parentsUntil(this.options.target, ".active")
            .removeClass("active");
        var i =
            this.selector +
            '[data-target="' +
            e +
            '"],' +
            this.selector +
            '[href="' +
            e +
            '"]',
          n = t(i).parents("li").addClass("active");
        n.parent(".dropdown-menu").length &&
          (n = n.closest("li.dropdown").addClass("active")),
          n.trigger("activate.bs.scrollspy");
      });
    var i = t.fn.scrollspy;
    (t.fn.scrollspy = function (i) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.scrollspy"),
          o = "object" == typeof i && i;
        s || n.data("bs.scrollspy", (s = new e(this, o))),
          "string" == typeof i && s[i]();
      });
    }),
      (t.fn.scrollspy.Constructor = e),
      (t.fn.scrollspy.noConflict = function () {
        return (t.fn.scrollspy = i), this;
      }),
      t(window).on("load", function () {
        t('[data-spy="scroll"]').each(function () {
          var e = t(this);
          e.scrollspy(e.data());
        });
      });
  })(jQuery),
  (function (t) {
    "use strict";
    var e = function (e) {
      this.element = t(e);
    };
    (e.prototype.show = function () {
      var e = this.element,
        i = e.closest("ul:not(.dropdown-menu)"),
        n = e.data("target");
      if (
        (n || (n = (n = e.attr("href")) && n.replace(/.*(?=#[^\s]*$)/, "")),
        !e.parent("li").hasClass("active"))
      ) {
        var s = i.find(".active:last a")[0],
          o = t.Event("show.bs.tab", { relatedTarget: s });
        if ((e.trigger(o), !o.isDefaultPrevented())) {
          var a = t(n);
          this.activate(e.parent("li"), i),
            this.activate(a, a.parent(), function () {
              e.trigger({ type: "shown.bs.tab", relatedTarget: s });
            });
        }
      }
    }),
      (e.prototype.activate = function (e, i, n) {
        function s() {
          o
            .removeClass("active")
            .find("> .dropdown-menu > .active")
            .removeClass("active"),
            e.addClass("active"),
            a ? (e[0].offsetWidth, e.addClass("in")) : e.removeClass("fade"),
            e.parent(".dropdown-menu") &&
              e.closest("li.dropdown").addClass("active"),
            n && n();
        }
        var o = i.find("> .active"),
          a = n && t.support.transition && o.hasClass("fade");
        a ? o.one(t.support.transition.end, s).emulateTransitionEnd(150) : s(),
          o.removeClass("in");
      });
    var i = t.fn.tab;
    (t.fn.tab = function (i) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.tab");
        s || n.data("bs.tab", (s = new e(this))),
          "string" == typeof i && s[i]();
      });
    }),
      (t.fn.tab.Constructor = e),
      (t.fn.tab.noConflict = function () {
        return (t.fn.tab = i), this;
      }),
      t(document).on(
        "click.bs.tab.data-api",
        '[data-toggle="tab"], [data-toggle="pill"]',
        function (e) {
          e.preventDefault(), t(this).tab("show");
        }
      );
  })(jQuery),
  (function (t) {
    "use strict";
    var e = function (i, n) {
      (this.options = t.extend({}, e.DEFAULTS, n)),
        (this.$window = t(window)
          .on("scroll.bs.affix.data-api", t.proxy(this.checkPosition, this))
          .on(
            "click.bs.affix.data-api",
            t.proxy(this.checkPositionWithEventLoop, this)
          )),
        (this.$element = t(i)),
        (this.affixed = this.unpin = this.pinnedOffset = null),
        this.checkPosition();
    };
    (e.RESET = "affix affix-top affix-bottom"),
      (e.DEFAULTS = { offset: 0 }),
      (e.prototype.getPinnedOffset = function () {
        if (this.pinnedOffset) return this.pinnedOffset;
        this.$element.removeClass(e.RESET).addClass("affix");
        var t = this.$window.scrollTop(),
          i = this.$element.offset();
        return (this.pinnedOffset = i.top - t);
      }),
      (e.prototype.checkPositionWithEventLoop = function () {
        setTimeout(t.proxy(this.checkPosition, this), 1);
      }),
      (e.prototype.checkPosition = function () {
        if (this.$element.is(":visible")) {
          var i = t(document).height(),
            n = this.$window.scrollTop(),
            s = this.$element.offset(),
            o = this.options.offset,
            a = o.top,
            r = o.bottom;
          "top" == this.affixed && (s.top += n),
            "object" != typeof o && (r = a = o),
            "function" == typeof a && (a = o.top(this.$element)),
            "function" == typeof r && (r = o.bottom(this.$element));
          var l =
            !(null != this.unpin && n + this.unpin <= s.top) &&
            (null != r && s.top + this.$element.height() >= i - r
              ? "bottom"
              : null != a && a >= n && "top");
          if (this.affixed !== l) {
            this.unpin && this.$element.css("top", "");
            var h = "affix" + (l ? "-" + l : ""),
              c = t.Event(h + ".bs.affix");
            this.$element.trigger(c),
              c.isDefaultPrevented() ||
                ((this.affixed = l),
                (this.unpin = "bottom" == l ? this.getPinnedOffset() : null),
                this.$element
                  .removeClass(e.RESET)
                  .addClass(h)
                  .trigger(t.Event(h.replace("affix", "affixed"))),
                "bottom" == l &&
                  this.$element.offset({
                    top: i - r - this.$element.height(),
                  }));
          }
        }
      });
    var i = t.fn.affix;
    (t.fn.affix = function (i) {
      return this.each(function () {
        var n = t(this),
          s = n.data("bs.affix"),
          o = "object" == typeof i && i;
        s || n.data("bs.affix", (s = new e(this, o))),
          "string" == typeof i && s[i]();
      });
    }),
      (t.fn.affix.Constructor = e),
      (t.fn.affix.noConflict = function () {
        return (t.fn.affix = i), this;
      }),
      t(window).on("load", function () {
        t('[data-spy="affix"]').each(function () {
          var e = t(this),
            i = e.data();
          (i.offset = i.offset || {}),
            i.offsetBottom && (i.offset.bottom = i.offsetBottom),
            i.offsetTop && (i.offset.top = i.offsetTop),
            e.affix(i);
        });
      });
  })(jQuery);
var ssc_framerate = 150,
  ssc_animtime = 500,
  ssc_stepsize = 150,
  ssc_pulseAlgorithm = !0,
  ssc_pulseScale = 6,
  ssc_pulseNormalize = 1,
  ssc_keyboardsupport = !0,
  ssc_arrowscroll = 50,
  ssc_frame = !1,
  ssc_direction = { x: 0, y: 0 },
  ssc_initdone = !1,
  ssc_fixedback = !0,
  ssc_root = document.documentElement,
  ssc_activeElement,
  ssc_key = {
    left: 37,
    up: 38,
    right: 39,
    down: 40,
    spacebar: 32,
    pageup: 33,
    pagedown: 34,
    end: 35,
    home: 36,
  },
  ssc_que = [],
  ssc_pending = !1,
  ssc_cache = {};
setInterval(function () {
  ssc_cache = {};
}, 1e4);
var ssc_uniqueID = (function () {
    var t = 0;
    return function (e) {
      return e.ssc_uniqueID || (e.ssc_uniqueID = t++);
    };
  })(),
  ischrome = /chrome/.test(navigator.userAgent.toLowerCase());
if (
  (ischrome &&
    (ssc_addEvent("mousedown", ssc_mousedown),
    ssc_addEvent("mousewheel", ssc_wheel),
    ssc_addEvent("load", ssc_init)),
  (function (t) {
    "function" == typeof define && define.amd
      ? define(["jquery"], t)
      : t(jQuery);
  })(function (t) {
    var e = (t.scrollTo = function (e, i, n) {
      return t(window).scrollTo(e, i, n);
    });
    function i(e) {
      return t.isFunction(e) || "object" == typeof e ? e : { top: e, left: e };
    }
    return (
      (e.defaults = {
        axis: "xy",
        duration: parseFloat(t.fn.jquery) >= 1.3 ? 0 : 1,
        limit: !0,
      }),
      (e.window = function (e) {
        return t(window)._scrollable();
      }),
      (t.fn._scrollable = function () {
        return this.map(function () {
          var e = this;
          if (
            e.nodeName &&
            -1 ==
              t.inArray(e.nodeName.toLowerCase(), [
                "iframe",
                "#document",
                "html",
                "body",
              ])
          )
            return e;
          var i = (e.contentWindow || e).document || e.ownerDocument || e;
          return /webkit/i.test(navigator.userAgent) ||
            "BackCompat" == i.compatMode
            ? i.body
            : i.documentElement;
        });
      }),
      (t.fn.scrollTo = function (n, s, o) {
        return (
          "object" == typeof s && ((o = s), (s = 0)),
          "function" == typeof o && (o = { onAfter: o }),
          "max" == n && (n = 9e9),
          (o = t.extend({}, e.defaults, o)),
          (s = s || o.duration),
          (o.queue = o.queue && o.axis.length > 1),
          o.queue && (s /= 2),
          (o.offset = i(o.offset)),
          (o.over = i(o.over)),
          this._scrollable()
            .each(function () {
              if (null != n) {
                var a,
                  r = this,
                  l = t(r),
                  h = n,
                  c = {},
                  u = l.is("html,body");
                switch (typeof h) {
                  case "number":
                  case "string":
                    if (/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(h)) {
                      h = i(h);
                      break;
                    }
                    if (!(h = t(h, this)).length) return;
                  case "object":
                    (h.is || h.style) && (a = (h = t(h)).offset());
                }
                var d = (t.isFunction(o.offset) && o.offset(r, h)) || o.offset;
                t.each(o.axis.split(""), function (t, i) {
                  var n = "x" == i ? "Left" : "Top",
                    s = n.toLowerCase(),
                    p = "scroll" + n,
                    m = r[p],
                    g = e.max(r, i);
                  if (a)
                    (c[p] = a[s] + (u ? 0 : m - l.offset()[s])),
                      o.margin &&
                        ((c[p] -= parseInt(h.css("margin" + n)) || 0),
                        (c[p] -= parseInt(h.css("border" + n + "Width")) || 0)),
                      (c[p] += d[s] || 0),
                      o.over[s] &&
                        (c[p] +=
                          h["x" == i ? "width" : "height"]() * o.over[s]);
                  else {
                    var v = h[s];
                    c[p] =
                      v.slice && "%" == v.slice(-1)
                        ? (parseFloat(v) / 100) * g
                        : v;
                  }
                  o.limit &&
                    /^\d+$/.test(c[p]) &&
                    (c[p] = c[p] <= 0 ? 0 : Math.min(c[p], g)),
                    !t &&
                      o.queue &&
                      (m != c[p] && f(o.onAfterFirst), delete c[p]);
                }),
                  f(o.onAfter);
              }
              function f(t) {
                l.animate(
                  c,
                  s,
                  o.easing,
                  t &&
                    function () {
                      t.call(this, h, o);
                    }
                );
              }
            })
            .end()
        );
      }),
      (e.max = function (e, i) {
        var n = "x" == i ? "Width" : "Height",
          s = "scroll" + n;
        if (!t(e).is("html,body")) return e[s] - t(e)[n.toLowerCase()]();
        var o = "client" + n,
          a = e.ownerDocument.documentElement,
          r = e.ownerDocument.body;
        return Math.max(a[s], r[s]) - Math.min(a[o], r[o]);
      }),
      e
    );
  }),
  (function (t) {
    "function" == typeof define && define.amd
      ? define(["jquery"], t)
      : t(jQuery);
  })(function (t) {
    var e = location.href.replace(/#.*/, ""),
      i = (t.localScroll = function (e) {
        t("body").localScroll(e);
      });
    function n(e, i, n) {
      var s = i.hash.slice(1),
        o = document.getElementById(s) || document.getElementsByName(s)[0];
      if (o) {
        e && e.preventDefault();
        var a = t(n.target);
        if (
          !(
            (n.lock && a.is(":animated")) ||
            (n.onBefore && !1 === n.onBefore(e, o, a))
          )
        ) {
          if ((n.stop && a._scrollable().stop(!0), n.hash)) {
            var r = o.id === s ? "id" : "name",
              l = t("<a> </a>")
                .attr(r, s)
                .css({
                  position: "absolute",
                  top: t(window).scrollTop(),
                  left: t(window).scrollLeft(),
                });
            (o[r] = ""),
              t("body").prepend(l),
              (location.hash = i.hash),
              l.remove(),
              (o[r] = s);
          }
          a.scrollTo(o, n).trigger("notify.serialScroll", [o]);
        }
      }
    }
    return (
      (i.defaults = {
        duration: 1e3,
        axis: "y",
        event: "click",
        stop: !0,
        target: window,
      }),
      (t.fn.localScroll = function (s) {
        return (
          (s = t.extend({}, i.defaults, s)).hash &&
            location.hash &&
            (s.target && window.scrollTo(0, 0), n(0, location, s)),
          s.lazy
            ? this.on(s.event, "a,area", function (t) {
                o.call(this) && n(t, this, s);
              })
            : this.find("a,area")
                .filter(o)
                .bind(s.event, function (t) {
                  n(t, this, s);
                })
                .end()
                .end()
        );
        function o() {
          return (
            !!this.href &&
            !!this.hash &&
            this.href.replace(this.hash, "") == e &&
            (!s.filter || t(this).is(s.filter))
          );
        }
      }),
      (i.hash = function () {}),
      i
    );
  }),
  eval(
    (function (t, e, i, n, s, o) {
      if (
        ((s = function (t) {
          return (
            (t < 62 ? "" : s(parseInt(t / 62))) +
            ((t %= 62) > 35 ? String.fromCharCode(t + 29) : t.toString(36))
          );
        }),
        !"".replace(/^/, String))
      ) {
        for (; i--; ) o[s(i)] = n[i] || s(i);
        (n = [
          function (t) {
            return o[t];
          },
        ]),
          (s = function () {
            return "\\w+";
          }),
          (i = 1);
      }
      for (; i--; )
        n[i] && (t = t.replace(new RegExp("\\b" + s(i) + "\\b", "g"), n[i]));
      return t;
    })(
      '7(A 3c.3q!=="9"){3c.3q=9(e){9 t(){}t.5S=e;p 5R t}}(9(e,t,n){h r={1N:9(t,n){h r=c;r.$k=e(n);r.6=e.4M({},e.37.2B.6,r.$k.v(),t);r.2A=t;r.4L()},4L:9(){9 r(e){h n,r="";7(A t.6.33==="9"){t.6.33.R(c,[e])}l{1A(n 38 e.d){7(e.d.5M(n)){r+=e.d[n].1K}}t.$k.2y(r)}t.3t()}h t=c,n;7(A t.6.2H==="9"){t.6.2H.R(c,[t.$k])}7(A t.6.2O==="2Y"){n=t.6.2O;e.5K(n,r)}l{t.3t()}},3t:9(){h e=c;e.$k.v("d-4I",e.$k.2x("2w")).v("d-4F",e.$k.2x("H"));e.$k.z({2u:0});e.2t=e.6.q;e.4E();e.5v=0;e.1X=14;e.23()},23:9(){h e=c;7(e.$k.25().N===0){p b}e.1M();e.4C();e.$S=e.$k.25();e.E=e.$S.N;e.4B();e.$G=e.$k.17(".d-1K");e.$K=e.$k.17(".d-1p");e.3u="U";e.13=0;e.26=[0];e.m=0;e.4A();e.4z()},4z:9(){h e=c;e.2V();e.2W();e.4t();e.30();e.4r();e.4q();e.2p();e.4o();7(e.6.2o!==b){e.4n(e.6.2o)}7(e.6.O===j){e.6.O=4Q}e.19();e.$k.17(".d-1p").z("4i","4h");7(!e.$k.2m(":3n")){e.3o()}l{e.$k.z("2u",1)}e.5O=b;e.2l();7(A e.6.3s==="9"){e.6.3s.R(c,[e.$k])}},2l:9(){h e=c;7(e.6.1Z===j){e.1Z()}7(e.6.1B===j){e.1B()}e.4g();7(A e.6.3w==="9"){e.6.3w.R(c,[e.$k])}},3x:9(){h e=c;7(A e.6.3B==="9"){e.6.3B.R(c,[e.$k])}e.3o();e.2V();e.2W();e.4f();e.30();e.2l();7(A e.6.3D==="9"){e.6.3D.R(c,[e.$k])}},3F:9(){h e=c;t.1c(9(){e.3x()},0)},3o:9(){h e=c;7(e.$k.2m(":3n")===b){e.$k.z({2u:0});t.18(e.1C);t.18(e.1X)}l{p b}e.1X=t.4d(9(){7(e.$k.2m(":3n")){e.3F();e.$k.4b({2u:1},2M);t.18(e.1X)}},5x)},4B:9(){h e=c;e.$S.5n(\'<L H="d-1p">\').4a(\'<L H="d-1K"></L>\');e.$k.17(".d-1p").4a(\'<L H="d-1p-49">\');e.1H=e.$k.17(".d-1p-49");e.$k.z("4i","4h")},1M:9(){h e=c,t=e.$k.1I(e.6.1M),n=e.$k.1I(e.6.2i);7(!t){e.$k.I(e.6.1M)}7(!n){e.$k.I(e.6.2i)}},2V:9(){h t=c,n,r;7(t.6.2Z===b){p b}7(t.6.48===j){t.6.q=t.2t=1;t.6.1h=b;t.6.1s=b;t.6.1O=b;t.6.22=b;t.6.1Q=b;t.6.1R=b;p b}n=e(t.6.47).1f();7(n>(t.6.1s[0]||t.2t)){t.6.q=t.2t}7(t.6.1h!==b){t.6.1h.5g(9(e,t){p e[0]-t[0]});1A(r=0;r<t.6.1h.N;r+=1){7(t.6.1h[r][0]<=n){t.6.q=t.6.1h[r][1]}}}l{7(n<=t.6.1s[0]&&t.6.1s!==b){t.6.q=t.6.1s[1]}7(n<=t.6.1O[0]&&t.6.1O!==b){t.6.q=t.6.1O[1]}7(n<=t.6.22[0]&&t.6.22!==b){t.6.q=t.6.22[1]}7(n<=t.6.1Q[0]&&t.6.1Q!==b){t.6.q=t.6.1Q[1]}7(n<=t.6.1R[0]&&t.6.1R!==b){t.6.q=t.6.1R[1]}}7(t.6.q>t.E&&t.6.46===j){t.6.q=t.E}},4r:9(){h n=c,r,i;7(n.6.2Z!==j){p b}i=e(t).1f();n.3d=9(){7(e(t).1f()!==i){7(n.6.O!==b){t.18(n.1C)}t.5d(r);r=t.1c(9(){i=e(t).1f();n.3x()},n.6.45)}};e(t).44(n.3d)},4f:9(){h e=c;e.2g(e.m);7(e.6.O!==b){e.3j()}},43:9(){h t=c,n=0,r=t.E-t.6.q;t.$G.2f(9(i){h s=e(c);s.z({1f:t.M}).v("d-1K",3p(i));7(i%t.6.q===0||i===r){7(!(i>r)){n+=1}}s.v("d-24",n)})},42:9(){h e=c,t=e.$G.N*e.M;e.$K.z({1f:t*2,T:0});e.43()},2W:9(){h e=c;e.40();e.42();e.3Z();e.3v()},40:9(){h e=c;e.M=1F.4O(e.$k.1f()/e.6.q)},3v:9(){h e=c,t=(e.E*e.M-e.6.q*e.M)*-1;7(e.6.q>e.E){e.D=0;t=0;e.3z=0}l{e.D=e.E-e.6.q;e.3z=t}p t},3Y:9(){p 0},3Z:9(){h t=c,n=0,r=0,i,s,o;t.J=[0];t.3E=[];1A(i=0;i<t.E;i+=1){r+=t.M;t.J.2D(-r);7(t.6.12===j){s=e(t.$G[i]);o=s.v("d-24");7(o!==n){t.3E[n]=t.J[i];n=o}}}},4t:9(){h t=c;7(t.6.2a===j||t.6.1v===j){t.B=e(\'<L H="d-5A"/>\').5m("5l",!t.F.15).5c(t.$k)}7(t.6.1v===j){t.3T()}7(t.6.2a===j){t.3S()}},3S:9(){h t=c,n=e(\'<L H="d-4U"/>\');t.B.1o(n);t.1u=e("<L/>",{"H":"d-1n",2y:t.6.2U[0]||""});t.1q=e("<L/>",{"H":"d-U",2y:t.6.2U[1]||""});n.1o(t.1u).1o(t.1q);n.w("2X.B 21.B",\'L[H^="d"]\',9(e){e.1l()});n.w("2n.B 28.B",\'L[H^="d"]\',9(n){n.1l();7(e(c).1I("d-U")){t.U()}l{t.1n()}})},3T:9(){h t=c;t.1k=e(\'<L H="d-1v"/>\');t.B.1o(t.1k);t.1k.w("2n.B 28.B",".d-1j",9(n){n.1l();7(3p(e(c).v("d-1j"))!==t.m){t.1g(3p(e(c).v("d-1j")),j)}})},3P:9(){h t=c,n,r,i,s,o,u;7(t.6.1v===b){p b}t.1k.2y("");n=0;r=t.E-t.E%t.6.q;1A(s=0;s<t.E;s+=1){7(s%t.6.q===0){n+=1;7(r===s){i=t.E-t.6.q}o=e("<L/>",{"H":"d-1j"});u=e("<3N></3N>",{4R:t.6.39===j?n:"","H":t.6.39===j?"d-59":""});o.1o(u);o.v("d-1j",r===s?i:s);o.v("d-24",n);t.1k.1o(o)}}t.35()},35:9(){h t=c;7(t.6.1v===b){p b}t.1k.17(".d-1j").2f(9(){7(e(c).v("d-24")===e(t.$G[t.m]).v("d-24")){t.1k.17(".d-1j").Z("2d");e(c).I("2d")}})},3e:9(){h e=c;7(e.6.2a===b){p b}7(e.6.2e===b){7(e.m===0&&e.D===0){e.1u.I("1b");e.1q.I("1b")}l 7(e.m===0&&e.D!==0){e.1u.I("1b");e.1q.Z("1b")}l 7(e.m===e.D){e.1u.Z("1b");e.1q.I("1b")}l 7(e.m!==0&&e.m!==e.D){e.1u.Z("1b");e.1q.Z("1b")}}},30:9(){h e=c;e.3P();e.3e();7(e.B){7(e.6.q>=e.E){e.B.3K()}l{e.B.3J()}}},55:9(){h e=c;7(e.B){e.B.3k()}},U:9(e){h t=c;7(t.1E){p b}t.m+=t.6.12===j?t.6.q:1;7(t.m>t.D+(t.6.12===j?t.6.q-1:0)){7(t.6.2e===j){t.m=0;e="2k"}l{t.m=t.D;p b}}t.1g(t.m,e)},1n:9(e){h t=c;7(t.1E){p b}7(t.6.12===j&&t.m>0&&t.m<t.6.q){t.m=0}l{t.m-=t.6.12===j?t.6.q:1}7(t.m<0){7(t.6.2e===j){t.m=t.D;e="2k"}l{t.m=0;p b}}t.1g(t.m,e)},1g:9(e,n,r){h i=c,s;7(i.1E){p b}7(A i.6.1Y==="9"){i.6.1Y.R(c,[i.$k])}7(e>=i.D){e=i.D}l 7(e<=0){e=0}i.m=i.d.m=e;7(i.6.2o!==b&&r!=="4e"&&i.6.q===1&&i.F.1x===j){i.1t(0);7(i.F.1x===j){i.1L(i.J[e])}l{i.1r(i.J[e],1)}i.2r();i.4l();p b}s=i.J[e];7(i.F.1x===j){i.1T=b;7(n===j){i.1t("1w");t.1c(9(){i.1T=j},i.6.1w)}l 7(n==="2k"){i.1t(i.6.2v);t.1c(9(){i.1T=j},i.6.2v)}l{i.1t("1m");t.1c(9(){i.1T=j},i.6.1m)}i.1L(s)}l{7(n===j){i.1r(s,i.6.1w)}l 7(n==="2k"){i.1r(s,i.6.2v)}l{i.1r(s,i.6.1m)}}i.2r()},2g:9(e){h t=c;7(A t.6.1Y==="9"){t.6.1Y.R(c,[t.$k])}7(e>=t.D||e===-1){e=t.D}l 7(e<=0){e=0}t.1t(0);7(t.F.1x===j){t.1L(t.J[e])}l{t.1r(t.J[e],1)}t.m=t.d.m=e;t.2r()},2r:9(){h e=c;e.26.2D(e.m);e.13=e.d.13=e.26[e.26.N-2];e.26.5f(0);7(e.13!==e.m){e.35();e.3e();e.2l();7(e.6.O!==b){e.3j()}}7(A e.6.3y==="9"&&e.13!==e.m){e.6.3y.R(c,[e.$k])}},X:9(){h e=c;e.3A="X";t.18(e.1C)},3j:9(){h e=c;7(e.3A!=="X"){e.19()}},19:9(){h e=c;e.3A="19";7(e.6.O===b){p b}t.18(e.1C);e.1C=t.4d(9(){e.U(j)},e.6.O)},1t:9(e){h t=c;7(e==="1m"){t.$K.z(t.2z(t.6.1m))}l 7(e==="1w"){t.$K.z(t.2z(t.6.1w))}l 7(A e!=="2Y"){t.$K.z(t.2z(e))}},2z:9(e){p{"-1G-1a":"2C "+e+"1z 2s","-1W-1a":"2C "+e+"1z 2s","-o-1a":"2C "+e+"1z 2s",1a:"2C "+e+"1z 2s"}},3H:9(){p{"-1G-1a":"","-1W-1a":"","-o-1a":"",1a:""}},3I:9(e){p{"-1G-P":"1i("+e+"V, C, C)","-1W-P":"1i("+e+"V, C, C)","-o-P":"1i("+e+"V, C, C)","-1z-P":"1i("+e+"V, C, C)",P:"1i("+e+"V, C,C)"}},1L:9(e){h t=c;t.$K.z(t.3I(e))},3L:9(e){h t=c;t.$K.z({T:e})},1r:9(e,t){h n=c;n.29=b;n.$K.X(j,j).4b({T:e},{54:t||n.6.1m,3M:9(){n.29=j}})},4E:9(){h e=c,r="1i(C, C, C)",i=n.56("L"),s,o,u,a;i.2w.3O="  -1W-P:"+r+"; -1z-P:"+r+"; -o-P:"+r+"; -1G-P:"+r+"; P:"+r;s=/1i\\(C, C, C\\)/g;o=i.2w.3O.5i(s);u=o!==14&&o.N===1;a="5z"38 t||t.5Q.4P;e.F={1x:u,15:a}},4q:9(){h e=c;7(e.6.27!==b||e.6.1U!==b){e.3Q();e.3R()}},4C:9(){h e=c,t=["s","e","x"];e.16={};7(e.6.27===j&&e.6.1U===j){t=["2X.d 21.d","2N.d 3U.d","2n.d 3V.d 28.d"]}l 7(e.6.27===b&&e.6.1U===j){t=["2X.d","2N.d","2n.d 3V.d"]}l 7(e.6.27===j&&e.6.1U===b){t=["21.d","3U.d","28.d"]}e.16.3W=t[0];e.16.2K=t[1];e.16.2J=t[2]},3R:9(){h t=c;t.$k.w("5y.d",9(e){e.1l()});t.$k.w("21.3X",9(t){p e(t.1d).2m("5C, 5E, 5F, 5N")})},3Q:9(){9 s(e){7(e.2b!==W){p{x:e.2b[0].2c,y:e.2b[0].41}}7(e.2b===W){7(e.2c!==W){p{x:e.2c,y:e.41}}7(e.2c===W){p{x:e.52,y:e.53}}}}9 o(t){7(t==="w"){e(n).w(r.16.2K,a);e(n).w(r.16.2J,f)}l 7(t==="Q"){e(n).Q(r.16.2K);e(n).Q(r.16.2J)}}9 u(n){h u=n.3h||n||t.3g,a;7(u.5a===3){p b}7(r.E<=r.6.q){p}7(r.29===b&&!r.6.3f){p b}7(r.1T===b&&!r.6.3f){p b}7(r.6.O!==b){t.18(r.1C)}7(r.F.15!==j&&!r.$K.1I("3b")){r.$K.I("3b")}r.11=0;r.Y=0;e(c).z(r.3H());a=e(c).2h();i.2S=a.T;i.2R=s(u).x-a.T;i.2P=s(u).y-a.5o;o("w");i.2j=b;i.2L=u.1d||u.4c}9 a(o){h u=o.3h||o||t.3g,a,f;r.11=s(u).x-i.2R;r.2I=s(u).y-i.2P;r.Y=r.11-i.2S;7(A r.6.2E==="9"&&i.3C!==j&&r.Y!==0){i.3C=j;r.6.2E.R(r,[r.$k])}7((r.Y>8||r.Y<-8)&&r.F.15===j){7(u.1l!==W){u.1l()}l{u.5L=b}i.2j=j}7((r.2I>10||r.2I<-10)&&i.2j===b){e(n).Q("2N.d")}a=9(){p r.Y/5};f=9(){p r.3z+r.Y/5};r.11=1F.3v(1F.3Y(r.11,a()),f());7(r.F.1x===j){r.1L(r.11)}l{r.3L(r.11)}}9 f(n){h s=n.3h||n||t.3g,u,a,f;s.1d=s.1d||s.4c;i.3C=b;7(r.F.15!==j){r.$K.Z("3b")}7(r.Y<0){r.1y=r.d.1y="T"}l{r.1y=r.d.1y="3i"}7(r.Y!==0){u=r.4j();r.1g(u,b,"4e");7(i.2L===s.1d&&r.F.15!==j){e(s.1d).w("3a.4k",9(t){t.4S();t.4T();t.1l();e(t.1d).Q("3a.4k")});a=e.4N(s.1d,"4V").3a;f=a.4W();a.4X(0,0,f)}}o("Q")}h r=c,i={2R:0,2P:0,4Y:0,2S:0,2h:14,4Z:14,50:14,2j:14,51:14,2L:14};r.29=j;r.$k.w(r.16.3W,".d-1p",u)},4j:9(){h e=c,t=e.4m();7(t>e.D){e.m=e.D;t=e.D}l 7(e.11>=0){t=0;e.m=0}p t},4m:9(){h t=c,n=t.6.12===j?t.3E:t.J,r=t.11,i=14;e.2f(n,9(s,o){7(r-t.M/20>n[s+1]&&r-t.M/20<o&&t.34()==="T"){i=o;7(t.6.12===j){t.m=e.4p(i,t.J)}l{t.m=s}}l 7(r+t.M/20<o&&r+t.M/20>(n[s+1]||n[s]-t.M)&&t.34()==="3i"){7(t.6.12===j){i=n[s+1]||n[n.N-1];t.m=e.4p(i,t.J)}l{i=n[s+1];t.m=s+1}}});p t.m},34:9(){h e=c,t;7(e.Y<0){t="3i";e.3u="U"}l{t="T";e.3u="1n"}p t},4A:9(){h e=c;e.$k.w("d.U",9(){e.U()});e.$k.w("d.1n",9(){e.1n()});e.$k.w("d.19",9(t,n){e.6.O=n;e.19();e.32="19"});e.$k.w("d.X",9(){e.X();e.32="X"});e.$k.w("d.1g",9(t,n){e.1g(n)});e.$k.w("d.2g",9(t,n){e.2g(n)})},2p:9(){h e=c;7(e.6.2p===j&&e.F.15!==j&&e.6.O!==b){e.$k.w("57",9(){e.X()});e.$k.w("58",9(){7(e.32!=="X"){e.19()}})}},1Z:9(){h t=c,n,r,i,s,o;7(t.6.1Z===b){p b}1A(n=0;n<t.E;n+=1){r=e(t.$G[n]);7(r.v("d-1e")==="1e"){4s}i=r.v("d-1K");s=r.17(".5b");7(A s.v("1J")!=="2Y"){r.v("d-1e","1e");4s}7(r.v("d-1e")===W){s.3K();r.I("4u").v("d-1e","5e")}7(t.6.4v===j){o=i>=t.m}l{o=j}7(o&&i<t.m+t.6.q&&s.N){t.4w(r,s)}}},4w:9(e,n){9 o(){e.v("d-1e","1e").Z("4u");n.5h("v-1J");7(r.6.4x==="4y"){n.5j(5k)}l{n.3J()}7(A r.6.2T==="9"){r.6.2T.R(c,[r.$k])}}9 u(){i+=1;7(r.2Q(n.3l(0))||s===j){o()}l 7(i<=2q){t.1c(u,2q)}l{o()}}h r=c,i=0,s;7(n.5p("5q")==="5r"){n.z("5s-5t","5u("+n.v("1J")+")");s=j}l{n[0].1J=n.v("1J")}u()},1B:9(){9 s(){h r=e(n.$G[n.m]).2G();n.1H.z("2G",r+"V");7(!n.1H.1I("1B")){t.1c(9(){n.1H.I("1B")},0)}}9 o(){i+=1;7(n.2Q(r.3l(0))){s()}l 7(i<=2q){t.1c(o,2q)}l{n.1H.z("2G","")}}h n=c,r=e(n.$G[n.m]).17("5w"),i;7(r.3l(0)!==W){i=0;o()}l{s()}},2Q:9(e){h t;7(!e.3M){p b}t=A e.4D;7(t!=="W"&&e.4D===0){p b}p j},4g:9(){h t=c,n;7(t.6.2F===j){t.$G.Z("2d")}t.1D=[];1A(n=t.m;n<t.m+t.6.q;n+=1){t.1D.2D(n);7(t.6.2F===j){e(t.$G[n]).I("2d")}}t.d.1D=t.1D},4n:9(e){h t=c;t.4G="d-"+e+"-5B";t.4H="d-"+e+"-38"},4l:9(){9 a(e){p{2h:"5D",T:e+"V"}}h e=c,t=e.4G,n=e.4H,r=e.$G.1S(e.m),i=e.$G.1S(e.13),s=1F.4J(e.J[e.m])+e.J[e.13],o=1F.4J(e.J[e.m])+e.M/2,u="5G 5H 5I 5J";e.1E=j;e.$K.I("d-1P").z({"-1G-P-1P":o+"V","-1W-4K-1P":o+"V","4K-1P":o+"V"});i.z(a(s,10)).I(t).w(u,9(){e.3m=j;i.Q(u);e.31(i,t)});r.I(n).w(u,9(){e.36=j;r.Q(u);e.31(r,n)})},31:9(e,t){h n=c;e.z({2h:"",T:""}).Z(t);7(n.3m&&n.36){n.$K.Z("d-1P");n.3m=b;n.36=b;n.1E=b}},4o:9(){h e=c;e.d={2A:e.2A,5P:e.$k,S:e.$S,G:e.$G,m:e.m,13:e.13,1D:e.1D,15:e.F.15,F:e.F,1y:e.1y}},3G:9(){h r=c;r.$k.Q(".d d 21.3X");e(n).Q(".d d");e(t).Q("44",r.3d)},1V:9(){h e=c;7(e.$k.25().N!==0){e.$K.3r();e.$S.3r().3r();7(e.B){e.B.3k()}}e.3G();e.$k.2x("2w",e.$k.v("d-4I")||"").2x("H",e.$k.v("d-4F"))},5T:9(){h e=c;e.X();t.18(e.1X);e.1V();e.$k.5U()},5V:9(t){h n=c,r=e.4M({},n.2A,t);n.1V();n.1N(r,n.$k)},5W:9(e,t){h n=c,r;7(!e){p b}7(n.$k.25().N===0){n.$k.1o(e);n.23();p b}n.1V();7(t===W||t===-1){r=-1}l{r=t}7(r>=n.$S.N||r===-1){n.$S.1S(-1).5X(e)}l{n.$S.1S(r).5Y(e)}n.23()},5Z:9(e){h t=c,n;7(t.$k.25().N===0){p b}7(e===W||e===-1){n=-1}l{n=e}t.1V();t.$S.1S(n).3k();t.23()}};e.37.2B=9(t){p c.2f(9(){7(e(c).v("d-1N")===j){p b}e(c).v("d-1N",j);h n=3c.3q(r);n.1N(t,c);e.v(c,"2B",n)})};e.37.2B.6={q:5,1h:b,1s:[60,4],1O:[61,3],22:[62,2],1Q:b,1R:[63,1],48:b,46:b,1m:2M,1w:64,2v:65,O:b,2p:b,2a:b,2U:["1n","U"],2e:j,12:b,1v:j,39:b,2Z:j,45:2M,47:t,1M:"d-66",2i:"d-2i",1Z:b,4v:j,4x:"4y",1B:b,2O:b,33:b,3f:j,27:j,1U:j,2F:b,2o:b,3B:b,3D:b,2H:b,3s:b,1Y:b,3y:b,3w:b,2E:b,2T:b}})(67,68,69)',
      0,
      382,
      "||||||options|if||function||false|this|owl||||var||true|elem|else|currentItem|||return|items|||||data|on|||css|typeof|owlControls|0px|maximumItem|itemsAmount|browser|owlItems|class|addClass|positionsInArray|owlWrapper|div|itemWidth|length|autoPlay|transform|off|apply|userItems|left|next|px|undefined|stop|newRelativeX|removeClass||newPosX|scrollPerPage|prevItem|null|isTouch|ev_types|find|clearInterval|play|transition|disabled|setTimeout|target|loaded|width|goTo|itemsCustom|translate3d|page|paginationWrapper|preventDefault|slideSpeed|prev|append|wrapper|buttonNext|css2slide|itemsDesktop|swapSpeed|buttonPrev|pagination|paginationSpeed|support3d|dragDirection|ms|for|autoHeight|autoPlayInterval|visibleItems|isTransition|Math|webkit|wrapperOuter|hasClass|src|item|transition3d|baseClass|init|itemsDesktopSmall|origin|itemsTabletSmall|itemsMobile|eq|isCss3Finish|touchDrag|unWrap|moz|checkVisible|beforeMove|lazyLoad||mousedown|itemsTablet|setVars|roundPages|children|prevArr|mouseDrag|mouseup|isCssFinish|navigation|touches|pageX|active|rewindNav|each|jumpTo|position|theme|sliding|rewind|eachMoveUpdate|is|touchend|transitionStyle|stopOnHover|100|afterGo|ease|orignalItems|opacity|rewindSpeed|style|attr|html|addCssSpeed|userOptions|owlCarousel|all|push|startDragging|addClassActive|height|beforeInit|newPosY|end|move|targetElement|200|touchmove|jsonPath|offsetY|completeImg|offsetX|relativePos|afterLazyLoad|navigationText|updateItems|calculateAll|touchstart|string|responsive|updateControls|clearTransStyle|hoverStatus|jsonSuccess|moveDirection|checkPagination|endCurrent|fn|in|paginationNumbers|click|grabbing|Object|resizer|checkNavigation|dragBeforeAnimFinish|event|originalEvent|right|checkAp|remove|get|endPrev|visible|watchVisibility|Number|create|unwrap|afterInit|logIn|playDirection|max|afterAction|updateVars|afterMove|maximumPixels|apStatus|beforeUpdate|dragging|afterUpdate|pagesInArray|reload|clearEvents|removeTransition|doTranslate|show|hide|css2move|complete|span|cssText|updatePagination|gestures|disabledEvents|buildButtons|buildPagination|mousemove|touchcancel|start|disableTextSelect|min|loops|calculateWidth|pageY|appendWrapperSizes|appendItemsSizes|resize|responsiveRefreshRate|itemsScaleUp|responsiveBaseWidth|singleItem|outer|wrap|animate|srcElement|setInterval|drag|updatePosition|onVisibleItems|block|display|getNewPosition|disable|singleItemTransition|closestItem|transitionTypes|owlStatus|inArray|moveEvents|response|continue|buildControls|loading|lazyFollow|lazyPreload|lazyEffect|fade|onStartup|customEvents|wrapItems|eventTypes|naturalWidth|checkBrowser|originalClasses|outClass|inClass|originalStyles|abs|perspective|loadContent|extend|_data|round|msMaxTouchPoints|5e3|text|stopImmediatePropagation|stopPropagation|buttons|events|pop|splice|baseElWidth|minSwipe|maxSwipe|dargging|clientX|clientY|duration|destroyControls|createElement|mouseover|mouseout|numbers|which|lazyOwl|appendTo|clearTimeout|checked|shift|sort|removeAttr|match|fadeIn|400|clickable|toggleClass|wrapAll|top|prop|tagName|DIV|background|image|url|wrapperWidth|img|500|dragstart|ontouchstart|controls|out|input|relative|textarea|select|webkitAnimationEnd|oAnimationEnd|MSAnimationEnd|animationend|getJSON|returnValue|hasOwnProperty|option|onstartup|baseElement|navigator|new|prototype|destroy|removeData|reinit|addItem|after|before|removeItem|1199|979|768|479|800|1e3|carousel|jQuery|window|document".split(
        "|"
      ),
      0,
      {}
    )
  ),
  (function (t, e) {
    function i(e, i) {
      (this.el = e),
        (this.$el = t(this.el)),
        (this.options = t.extend({}, s, i)),
        (this._defaults = s),
        (this._name = n),
        this.init();
    }
    var n = "nivoLightbox",
      s = {
        effect: "fade",
        theme: "default",
        keyboardNav: !0,
        onInit: function () {},
        beforeShowLightbox: function () {},
        afterShowLightbox: function (t) {},
        beforeHideLightbox: function () {},
        afterHideLightbox: function () {},
        onPrev: function (t) {},
        onNext: function (t) {},
        errorMessage:
          "The requested content cannot be loaded. Please try again later.",
      };
    (i.prototype = {
      init: function () {
        var e = this;
        this.$el.on("click", function (t) {
          t.preventDefault(), e.showLightbox();
        }),
          this.options.keyboardNav &&
            t("body")
              .off("keyup")
              .on("keyup", function (i) {
                var n = i.keyCode ? i.keyCode : i.which;
                27 == n && e.destructLightbox(),
                  37 == n && t(".nivo-lightbox-prev").trigger("click"),
                  39 == n && t(".nivo-lightbox-next").trigger("click");
              }),
          this.options.onInit.call(this);
      },
      showLightbox: function () {
        var e = this;
        this.options.beforeShowLightbox.call(this);
        var i = this.constructLightbox();
        if (i) {
          var n = i.find(".nivo-lightbox-content");
          if (n) {
            var s = this.$el;
            if (
              (t("body").addClass(
                "nivo-lightbox-body-effect-" + this.options.effect
              ),
              this.processContent(n, s),
              this.$el.attr("data-lightbox-gallery"))
            ) {
              e = this;
              var o = t(
                '[data-lightbox-gallery="' +
                  this.$el.attr("data-lightbox-gallery") +
                  '"]'
              );
              t(".nivo-lightbox-nav").show(),
                t(".nivo-lightbox-prev")
                  .off("click")
                  .on("click", function (i) {
                    i.preventDefault();
                    var a = o.index(s);
                    (s = o.eq(a - 1)),
                      t(s).length || (s = o.last()),
                      e.processContent(n, s),
                      e.options.onPrev.call(this, [s]);
                  }),
                t(".nivo-lightbox-next")
                  .off("click")
                  .on("click", function (i) {
                    i.preventDefault();
                    var a = o.index(s);
                    (s = o.eq(a + 1)),
                      t(s).length || (s = o.first()),
                      e.processContent(n, s),
                      e.options.onNext.call(this, [s]);
                  });
            }
            setTimeout(function () {
              i.addClass("nivo-lightbox-open"),
                e.options.afterShowLightbox.call(this, [i]);
            }, 1);
          }
        }
      },
      processContent: function (i, n) {
        var s = this,
          o = n.attr("href");
        if (
          (i.html("").addClass("nivo-lightbox-loading"),
          this.isHidpi() &&
            n.attr("data-lightbox-hidpi") &&
            (o = n.attr("data-lightbox-hidpi")),
          null != o.match(/\.(jpeg|jpg|gif|png)$/))
        ) {
          var a = t("<img>", { src: o });
          a
            .one("load", function () {
              var n = t('<div class="nivo-lightbox-image" />');
              n.append(a),
                i.html(n).removeClass("nivo-lightbox-loading"),
                n.css({
                  "line-height": t(".nivo-lightbox-content").height() + "px",
                  height: t(".nivo-lightbox-content").height() + "px",
                }),
                t(e).resize(function () {
                  n.css({
                    "line-height": t(".nivo-lightbox-content").height() + "px",
                    height: t(".nivo-lightbox-content").height() + "px",
                  });
                });
            })
            .each(function () {
              this.complete && t(this).load();
            }),
            a.error(function () {
              var e = t(
                '<div class="nivo-lightbox-error"><p>' +
                  s.options.errorMessage +
                  "</p></div>"
              );
              i.html(e).removeClass("nivo-lightbox-loading");
            });
        } else if (
          (video = o.match(
            /(youtube|youtu|vimeo)\.(com|be)\/(watch\?v=(\w+)|(\w+))/
          ))
        ) {
          var r = "",
            l = "nivo-lightbox-video";
          if (
            ("youtube" == video[1] &&
              ((r = "http://www.youtube.com/v/" + video[4]),
              (l = "nivo-lightbox-youtube")),
            "youtu" == video[1] &&
              ((r = "http://www.youtube.com/v/" + video[3]),
              (l = "nivo-lightbox-youtube")),
            "vimeo" == video[1] &&
              ((r = "http://player.vimeo.com/video/" + video[3]),
              (l = "nivo-lightbox-vimeo")),
            r)
          ) {
            var h = t("<iframe>", {
              src: r,
              class: l,
              frameborder: 0,
              vspace: 0,
              hspace: 0,
              scrolling: "auto",
            });
            i.html(h),
              h.load(function () {
                i.removeClass("nivo-lightbox-loading");
              });
          }
        } else if ("ajax" == n.attr("data-lightbox-type"))
          (s = this),
            t.ajax({
              url: o,
              cache: !1,
              success: function (n) {
                var s = t('<div class="nivo-lightbox-ajax" />');
                s.append(n),
                  i.html(s).removeClass("nivo-lightbox-loading"),
                  s.outerHeight() < i.height() &&
                    s.css({
                      position: "relative",
                      top: "50%",
                      "margin-top": -s.outerHeight() / 2 + "px",
                    }),
                  t(e).resize(function () {
                    s.outerHeight() < i.height() &&
                      s.css({
                        position: "relative",
                        top: "50%",
                        "margin-top": -s.outerHeight() / 2 + "px",
                      });
                  });
              },
              error: function () {
                var e = t(
                  '<div class="nivo-lightbox-error"><p>' +
                    s.options.errorMessage +
                    "</p></div>"
                );
                i.html(e).removeClass("nivo-lightbox-loading");
              },
            });
        else if ("#" == o.substring(0, 1))
          if (t(o).length)
            (c = t('<div class="nivo-lightbox-inline" />')).append(
              t(o).clone().show()
            ),
              i.html(c).removeClass("nivo-lightbox-loading"),
              c.outerHeight() < i.height() &&
                c.css({
                  position: "relative",
                  top: "50%",
                  "margin-top": -c.outerHeight() / 2 + "px",
                }),
              t(e).resize(function () {
                c.outerHeight() < i.height() &&
                  c.css({
                    position: "relative",
                    top: "50%",
                    "margin-top": -c.outerHeight() / 2 + "px",
                  });
              });
          else {
            var c = t(
              '<div class="nivo-lightbox-error"><p>' +
                s.options.errorMessage +
                "</p></div>"
            );
            i.html(c).removeClass("nivo-lightbox-loading");
          }
        else
          (h = t("<iframe>", {
            src: o,
            class: "nivo-lightbox-item",
            frameborder: 0,
            vspace: 0,
            hspace: 0,
            scrolling: "auto",
          })),
            i.html(h),
            h.load(function () {
              i.removeClass("nivo-lightbox-loading");
            });
        if (n.attr("title")) {
          var u = t("<span>", { class: "nivo-lightbox-title" });
          u.text(n.attr("title")), t(".nivo-lightbox-title-wrap").html(u);
        } else t(".nivo-lightbox-title-wrap").html("");
      },
      constructLightbox: function () {
        if (t(".nivo-lightbox-overlay").length)
          return t(".nivo-lightbox-overlay");
        var e = t("<div>", {
            class:
              "nivo-lightbox-overlay nivo-lightbox-theme-" +
              this.options.theme +
              " nivo-lightbox-effect-" +
              this.options.effect,
          }),
          i = t("<div>", { class: "nivo-lightbox-wrap" }),
          n = t("<div>", { class: "nivo-lightbox-content" }),
          s = t(
            '<a href="#" class="nivo-lightbox-nav nivo-lightbox-prev">Previous</a><a href="#" class="nivo-lightbox-nav nivo-lightbox-next">Next</a>'
          ),
          o = t(
            '<a href="#" class="nivo-lightbox-close" title="Close">Close</a>'
          ),
          a = t("<div>", { class: "nivo-lightbox-title-wrap" });
        i.append(n),
          i.append(a),
          e.append(i),
          e.append(s),
          e.append(o),
          t("body").append(e);
        var r = this;
        return (
          e.on("click", function (e) {
            (e.target === this ||
              t(e.target).hasClass("nivo-lightbox-content") ||
              t(e.target).hasClass("nivo-lightbox-image")) &&
              r.destructLightbox();
          }),
          o.on("click", function (t) {
            t.preventDefault(), r.destructLightbox();
          }),
          e
        );
      },
      destructLightbox: function () {
        this.options.beforeHideLightbox.call(this),
          t(".nivo-lightbox-overlay").removeClass("nivo-lightbox-open"),
          t(".nivo-lightbox-nav").hide(),
          t("body").removeClass(
            "nivo-lightbox-body-effect-" + this.options.effect
          ),
          t(".nivo-lightbox-prev").off("click"),
          t(".nivo-lightbox-next").off("click"),
          this.options.afterHideLightbox.call(this);
      },
      isHidpi: function () {
        return (
          1 < e.devicePixelRatio ||
          !(
            !e.matchMedia ||
            !e.matchMedia(
              "(-webkit-min-device-pixel-ratio: 1.5),\t\t\t\t\t\t\t  (min--moz-device-pixel-ratio: 1.5),\t\t\t\t\t\t\t  (-o-min-device-pixel-ratio: 3/2),\t\t\t\t\t\t\t  (min-resolution: 1.5dppx)"
            ).matches
          )
        );
      },
    }),
      (t.fn[n] = function (e) {
        return this.each(function () {
          t.data(this, n) || t.data(this, n, new i(this, e));
        });
      });
  })(jQuery, window, document),
  (function (t) {
    "use strict";
    function e() {
      var e = this;
      (e.defaults = {
        hideMode: "fadeToggle",
        defaultSearchMode: "parent",
        defaultTarget: ".content",
        throwOnMissingTarget: !0,
        keepStateInCookie: !1,
        cookieName: "simple-expand",
      }),
        (e.settings = {}),
        t.extend(e.settings, e.defaults),
        (e.findLevelOneDeep = function (e, i, n) {
          return e.find(i).filter(function () {
            return !t(this).parentsUntil(e, n).length;
          });
        }),
        (e.setInitialState = function (t, i) {
          e.readState(t)
            ? (t.removeClass("collapsed").addClass("expanded"), e.show(i))
            : (t.removeClass("expanded").addClass("collapsed"), e.hide(i));
        }),
        (e.hide = function (t) {
          "fadeToggle" === e.settings.hideMode
            ? t.hide()
            : "basic" === e.settings.hideMode && t.hide();
        }),
        (e.show = function (t) {
          "fadeToggle" === e.settings.hideMode
            ? t.show()
            : "basic" === e.settings.hideMode && t.show();
        }),
        (e.checkKeepStateInCookiePreconditions = function () {
          if (e.settings.keepStateInCookie && void 0 === t.cookie)
            throw new Error(
              "simple-expand: keepStateInCookie option requires $.cookie to be defined."
            );
        }),
        (e.readCookie = function () {
          var i = t.cookie(e.settings.cookieName);
          return null === i || "" === i ? {} : JSON.parse(i);
        }),
        (e.readState = function (t) {
          if (!e.settings.keepStateInCookie) return t.hasClass("expanded");
          var i = t.attr("Id");
          if (void 0 !== i) {
            var n = e.readCookie();
            return void 0 !== n[i] ? !0 === n[i] : t.hasClass("expanded");
          }
        }),
        (e.saveState = function (i, n) {
          if (e.settings.keepStateInCookie) {
            var s = i.attr("Id");
            if (void 0 !== s) {
              var o = e.readCookie();
              (o[s] = n),
                t.cookie(e.settings.cookieName, JSON.stringify(o), {
                  raw: !0,
                  path: window.location.pathname,
                });
            }
          }
        }),
        (e.toggle = function (i, n) {
          var s = e.toggleCss(i);
          return (
            "fadeToggle" === e.settings.hideMode
              ? n.fadeToggle(150)
              : "basic" === e.settings.hideMode
              ? n.toggle()
              : t.isFunction(e.settings.hideMode) &&
                e.settings.hideMode(i, n, s),
            e.saveState(i, s),
            !1
          );
        }),
        (e.toggleCss = function (t) {
          return t.hasClass("expanded")
            ? (t.toggleClass("collapsed expanded"), !1)
            : (t.toggleClass("expanded collapsed"), !0);
        }),
        (e.findTargets = function (i, n, s) {
          var o = [];
          if ("absolute" === n) o = t(s);
          else if ("relative" === n) o = e.findLevelOneDeep(i, s, s);
          else if ("parent" === n) {
            var a = i.parent();
            do {
              0 === (o = e.findLevelOneDeep(a, s, s)).length &&
                (a = a.parent());
            } while (0 === o.length && 0 !== a.length);
          }
          return o;
        }),
        (e.activate = function (i, n) {
          t.extend(e.settings, n),
            e.checkKeepStateInCookiePreconditions(),
            i.each(function () {
              var i = t(this),
                n = i.attr("data-expander-target") || e.settings.defaultTarget,
                s =
                  i.attr("data-expander-target-search") ||
                  e.settings.defaultSearchMode,
                o = e.findTargets(i, s, n);
              if (0 === o.length) {
                if (e.settings.throwOnMissingTarget)
                  throw "simple-expand: Targets not found";
                return this;
              }
              e.setInitialState(i, o),
                i.click(function () {
                  return e.toggle(i, o);
                });
            });
        });
    }
    (window.SimpleExpand = e),
      (t.fn.simpleexpand = function (t) {
        return new e().activate(this, t), this;
      });
  })(jQuery),
  function () {
    var t,
      e,
      i,
      n,
      s,
      o = function (t, e) {
        return function () {
          return t.apply(e, arguments);
        };
      },
      a =
        [].indexOf ||
        function (t) {
          for (var e = 0, i = this.length; i > e; e++)
            if (e in this && this[e] === t) return e;
          return -1;
        };
    (e = (function () {
      function t() {}
      return (
        (t.prototype.extend = function (t, e) {
          var i, n;
          for (i in e) (n = e[i]), null == t[i] && (t[i] = n);
          return t;
        }),
        (t.prototype.isMobile = function (t) {
          return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
            t
          );
        }),
        (t.prototype.addEvent = function (t, e, i) {
          return null != t.addEventListener
            ? t.addEventListener(e, i, !1)
            : null != t.attachEvent
            ? t.attachEvent("on" + e, i)
            : (t[e] = i);
        }),
        (t.prototype.removeEvent = function (t, e, i) {
          return null != t.removeEventListener
            ? t.removeEventListener(e, i, !1)
            : null != t.detachEvent
            ? t.detachEvent("on" + e, i)
            : delete t[e];
        }),
        (t.prototype.innerHeight = function () {
          return "innerHeight" in window
            ? window.innerHeight
            : document.documentElement.clientHeight;
        }),
        t
      );
    })()),
      (i =
        this.WeakMap ||
        this.MozWeakMap ||
        (i = (function () {
          function t() {
            (this.keys = []), (this.values = []);
          }
          return (
            (t.prototype.get = function (t) {
              var e, i, n, s;
              for (e = i = 0, n = (s = this.keys).length; n > i; e = ++i)
                if (s[e] === t) return this.values[e];
            }),
            (t.prototype.set = function (t, e) {
              var i, n, s, o;
              for (i = n = 0, s = (o = this.keys).length; s > n; i = ++n)
                if (o[i] === t) return void (this.values[i] = e);
              return this.keys.push(t), this.values.push(e);
            }),
            t
          );
        })())),
      (t =
        this.MutationObserver ||
        this.WebkitMutationObserver ||
        this.MozMutationObserver ||
        (t = (function () {
          function t() {
            "undefined" != typeof console &&
              null !== console &&
              console.warn(
                "MutationObserver is not supported by your browser."
              ),
              "undefined" != typeof console &&
                null !== console &&
                console.warn(
                  "WOW.js cannot detect dom mutations, please call .sync() after loading new content."
                );
          }
          return (
            (t.notSupported = !0), (t.prototype.observe = function () {}), t
          );
        })())),
      (n =
        this.getComputedStyle ||
        function (t) {
          return (
            (this.getPropertyValue = function (e) {
              var i;
              return (
                "float" === e && (e = "styleFloat"),
                s.test(e) &&
                  e.replace(s, function (t, e) {
                    return e.toUpperCase();
                  }),
                (null != (i = t.currentStyle) ? i[e] : void 0) || null
              );
            }),
            this
          );
        }),
      (s = /(\-([a-z]){1})/g),
      (this.WOW = (function () {
        function s(t) {
          null == t && (t = {}),
            (this.scrollCallback = o(this.scrollCallback, this)),
            (this.scrollHandler = o(this.scrollHandler, this)),
            (this.start = o(this.start, this)),
            (this.scrolled = !0),
            (this.config = this.util().extend(t, this.defaults)),
            (this.animationNameCache = new i());
        }
        return (
          (s.prototype.defaults = {
            boxClass: "wow",
            animateClass: "animated",
            offset: 0,
            mobile: !0,
            live: !0,
          }),
          (s.prototype.init = function () {
            var t;
            return (
              (this.element = window.document.documentElement),
              "interactive" === (t = document.readyState) || "complete" === t
                ? this.start()
                : this.util().addEvent(
                    document,
                    "DOMContentLoaded",
                    this.start
                  ),
              (this.finished = [])
            );
          }),
          (s.prototype.start = function () {
            var e, i, n, s;
            if (
              ((this.stopped = !1),
              (this.boxes = function () {
                var t, i, n, s;
                for (
                  s = [],
                    t = 0,
                    i = (n = this.element.querySelectorAll(
                      "." + this.config.boxClass
                    )).length;
                  i > t;
                  t++
                )
                  (e = n[t]), s.push(e);
                return s;
              }.call(this)),
              (this.all = function () {
                var t, i, n, s;
                for (s = [], t = 0, i = (n = this.boxes).length; i > t; t++)
                  (e = n[t]), s.push(e);
                return s;
              }.call(this)),
              this.boxes.length)
            )
              if (this.disabled()) this.resetStyle();
              else {
                for (i = 0, n = (s = this.boxes).length; n > i; i++)
                  (e = s[i]), this.applyStyle(e, !0);
                this.util().addEvent(window, "scroll", this.scrollHandler),
                  this.util().addEvent(window, "resize", this.scrollHandler),
                  (this.interval = setInterval(this.scrollCallback, 50));
              }
            return this.config.live
              ? new t(
                  (function (t) {
                    return function (e) {
                      var i, n, s, o, a;
                      for (a = [], s = 0, o = e.length; o > s; s++)
                        (n = e[s]),
                          a.push(
                            function () {
                              var t, e, s, o;
                              for (
                                o = [],
                                  t = 0,
                                  e = (s = n.addedNodes || []).length;
                                e > t;
                                t++
                              )
                                (i = s[t]), o.push(this.doSync(i));
                              return o;
                            }.call(t)
                          );
                      return a;
                    };
                  })(this)
                ).observe(document.body, { childList: !0, subtree: !0 })
              : void 0;
          }),
          (s.prototype.stop = function () {
            return (
              (this.stopped = !0),
              this.util().removeEvent(window, "scroll", this.scrollHandler),
              this.util().removeEvent(window, "resize", this.scrollHandler),
              null != this.interval ? clearInterval(this.interval) : void 0
            );
          }),
          (s.prototype.sync = function () {
            return t.notSupported ? this.doSync(this.element) : void 0;
          }),
          (s.prototype.doSync = function (t) {
            var e, i, n, s, o;
            if ((null == t && (t = this.element), 1 === t.nodeType)) {
              for (
                o = [],
                  i = 0,
                  n = (s = (t = t.parentNode || t).querySelectorAll(
                    "." + this.config.boxClass
                  )).length;
                n > i;
                i++
              )
                (e = s[i]),
                  a.call(this.all, e) < 0
                    ? (this.boxes.push(e),
                      this.all.push(e),
                      this.stopped || this.disabled()
                        ? this.resetStyle()
                        : this.applyStyle(e, !0),
                      o.push((this.scrolled = !0)))
                    : o.push(void 0);
              return o;
            }
          }),
          (s.prototype.show = function (t) {
            return (
              this.applyStyle(t),
              (t.className = t.className + " " + this.config.animateClass)
            );
          }),
          (s.prototype.applyStyle = function (t, e) {
            var i, n, s, o;
            return (
              (n = t.getAttribute("data-wow-duration")),
              (i = t.getAttribute("data-wow-delay")),
              (s = t.getAttribute("data-wow-iteration")),
              this.animate(
                ((o = this),
                function () {
                  return o.customStyle(t, e, n, i, s);
                })
              )
            );
          }),
          (s.prototype.animate =
            "requestAnimationFrame" in window
              ? function (t) {
                  return window.requestAnimationFrame(t);
                }
              : function (t) {
                  return t();
                }),
          (s.prototype.resetStyle = function () {
            var t, e, i, n, s;
            for (s = [], e = 0, i = (n = this.boxes).length; i > e; e++)
              (t = n[e]), s.push((t.style.visibility = "visible"));
            return s;
          }),
          (s.prototype.customStyle = function (t, e, i, n, s) {
            return (
              e && this.cacheAnimationName(t),
              (t.style.visibility = e ? "hidden" : "visible"),
              i && this.vendorSet(t.style, { animationDuration: i }),
              n && this.vendorSet(t.style, { animationDelay: n }),
              s && this.vendorSet(t.style, { animationIterationCount: s }),
              this.vendorSet(t.style, {
                animationName: e ? "none" : this.cachedAnimationName(t),
              }),
              t
            );
          }),
          (s.prototype.vendors = ["moz", "webkit"]),
          (s.prototype.vendorSet = function (t, e) {
            var i, n, s, o;
            for (i in ((o = []), e))
              (n = e[i]),
                (t["" + i] = n),
                o.push(
                  function () {
                    var e, o, a, r;
                    for (
                      r = [], e = 0, o = (a = this.vendors).length;
                      o > e;
                      e++
                    )
                      (s = a[e]),
                        r.push(
                          (t["" + s + i.charAt(0).toUpperCase() + i.substr(1)] =
                            n)
                        );
                    return r;
                  }.call(this)
                );
            return o;
          }),
          (s.prototype.vendorCSS = function (t, e) {
            var i, s, o, a, r, l;
            for (
              i = (s = n(t)).getPropertyCSSValue(e),
                a = 0,
                r = (l = this.vendors).length;
              r > a;
              a++
            )
              (o = l[a]), (i = i || s.getPropertyCSSValue("-" + o + "-" + e));
            return i;
          }),
          (s.prototype.animationName = function (t) {
            var e;
            try {
              e = this.vendorCSS(t, "animation-name").cssText;
            } catch (i) {
              e = n(t).getPropertyValue("animation-name");
            }
            return "none" === e ? "" : e;
          }),
          (s.prototype.cacheAnimationName = function (t) {
            return this.animationNameCache.set(t, this.animationName(t));
          }),
          (s.prototype.cachedAnimationName = function (t) {
            return this.animationNameCache.get(t);
          }),
          (s.prototype.scrollHandler = function () {
            return (this.scrolled = !0);
          }),
          (s.prototype.scrollCallback = function () {
            var t;
            return !this.scrolled ||
              ((this.scrolled = !1),
              (this.boxes = function () {
                var e, i, n, s;
                for (s = [], e = 0, i = (n = this.boxes).length; i > e; e++)
                  (t = n[e]) && (this.isVisible(t) ? this.show(t) : s.push(t));
                return s;
              }.call(this)),
              this.boxes.length || this.config.live)
              ? void 0
              : this.stop();
          }),
          (s.prototype.offsetTop = function (t) {
            for (var e; void 0 === t.offsetTop; ) t = t.parentNode;
            for (e = t.offsetTop; (t = t.offsetParent); ) e += t.offsetTop;
            return e;
          }),
          (s.prototype.isVisible = function (t) {
            var e, i, n, s, o;
            return (
              (i = t.getAttribute("data-wow-offset") || this.config.offset),
              (s =
                (o = window.pageYOffset) +
                Math.min(this.element.clientHeight, this.util().innerHeight()) -
                i),
              (e = (n = this.offsetTop(t)) + t.clientHeight),
              s >= n && e >= o
            );
          }),
          (s.prototype.util = function () {
            return null != this._util ? this._util : (this._util = new e());
          }),
          (s.prototype.disabled = function () {
            return (
              !this.config.mobile && this.util().isMobile(navigator.userAgent)
            );
          }),
          s
        );
      })());
  }.call(this),
  (function (t, e, i, n) {
    function s(e, i) {
      (this.element = e),
        (this.options = t.extend({}, a, i)),
        (this._defaults = a),
        (this._name = o),
        this.init();
    }
    var o = "stellar",
      a = {
        scrollProperty: "scroll",
        positionProperty: "position",
        horizontalScrolling: !0,
        verticalScrolling: !0,
        horizontalOffset: 0,
        verticalOffset: 0,
        responsive: !1,
        parallaxBackgrounds: !0,
        parallaxElements: !0,
        hideDistantElements: !0,
        hideElement: function (t) {
          t.hide();
        },
        showElement: function (t) {
          t.show();
        },
      },
      r = {
        scroll: {
          getLeft: function (t) {
            return t.scrollLeft();
          },
          setLeft: function (t, e) {
            t.scrollLeft(e);
          },
          getTop: function (t) {
            return t.scrollTop();
          },
          setTop: function (t, e) {
            t.scrollTop(e);
          },
        },
        position: {
          getLeft: function (t) {
            return -1 * parseInt(t.css("left"), 10);
          },
          getTop: function (t) {
            return -1 * parseInt(t.css("top"), 10);
          },
        },
        margin: {
          getLeft: function (t) {
            return -1 * parseInt(t.css("margin-left"), 10);
          },
          getTop: function (t) {
            return -1 * parseInt(t.css("margin-top"), 10);
          },
        },
        transform: {
          getLeft: function (t) {
            var e = getComputedStyle(t[0])[h];
            return "none" !== e
              ? -1 * parseInt(e.match(/(-?[0-9]+)/g)[4], 10)
              : 0;
          },
          getTop: function (t) {
            var e = getComputedStyle(t[0])[h];
            return "none" !== e
              ? -1 * parseInt(e.match(/(-?[0-9]+)/g)[5], 10)
              : 0;
          },
        },
      },
      l = {
        position: {
          setLeft: function (t, e) {
            t.css("left", e);
          },
          setTop: function (t, e) {
            t.css("top", e);
          },
        },
        transform: {
          setPosition: function (t, e, i, n, s) {
            t[0].style[h] =
              "translate3d(" + (e - i) + "px, " + (n - s) + "px, 0)";
          },
        },
      },
      h = (function () {
        var e,
          i = /^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,
          n = t("script")[0].style,
          s = "";
        for (e in n)
          if (i.test(e)) {
            s = e.match(i)[0];
            break;
          }
        return (
          "WebkitOpacity" in n && (s = "Webkit"),
          "KhtmlOpacity" in n && (s = "Khtml"),
          function (t) {
            return (
              s + (s.length > 0 ? t.charAt(0).toUpperCase() + t.slice(1) : t)
            );
          }
        );
      })()("transform"),
      c =
        t("<div />", { style: "background:#fff" }).css(
          "background-position-x"
        ) !== n,
      u = c
        ? function (t, e, i) {
            t.css({ "background-position-x": e, "background-position-y": i });
          }
        : function (t, e, i) {
            t.css("background-position", e + " " + i);
          },
      d = c
        ? function (t) {
            return [
              t.css("background-position-x"),
              t.css("background-position-y"),
            ];
          }
        : function (t) {
            return t.css("background-position").split(" ");
          },
      f =
        e.requestAnimationFrame ||
        e.webkitRequestAnimationFrame ||
        e.mozRequestAnimationFrame ||
        e.oRequestAnimationFrame ||
        e.msRequestAnimationFrame ||
        function (t) {
          setTimeout(t, 1e3 / 60);
        };
    (s.prototype = {
      init: function () {
        (this.options.name = o + "_" + Math.floor(1e9 * Math.random())),
          this._defineElements(),
          this._defineGetters(),
          this._defineSetters(),
          this._handleWindowLoadAndResize(),
          this._detectViewport(),
          this.refresh({ firstLoad: !0 }),
          "scroll" === this.options.scrollProperty
            ? this._handleScrollEvent()
            : this._startAnimationLoop();
      },
      _defineElements: function () {
        this.element === i.body && (this.element = e),
          (this.$scrollElement = t(this.element)),
          (this.$element =
            this.element === e ? t("body") : this.$scrollElement),
          (this.$viewportElement =
            this.options.viewportElement !== n
              ? t(this.options.viewportElement)
              : this.$scrollElement[0] === e ||
                "scroll" === this.options.scrollProperty
              ? this.$scrollElement
              : this.$scrollElement.parent());
      },
      _defineGetters: function () {
        var t = this,
          e = r[t.options.scrollProperty];
        (this._getScrollLeft = function () {
          return e.getLeft(t.$scrollElement);
        }),
          (this._getScrollTop = function () {
            return e.getTop(t.$scrollElement);
          });
      },
      _defineSetters: function () {
        var e = this,
          i = r[e.options.scrollProperty],
          n = l[e.options.positionProperty],
          s = i.setLeft,
          o = i.setTop;
        (this._setScrollLeft =
          "function" == typeof s
            ? function (t) {
                s(e.$scrollElement, t);
              }
            : t.noop),
          (this._setScrollTop =
            "function" == typeof o
              ? function (t) {
                  o(e.$scrollElement, t);
                }
              : t.noop),
          (this._setPosition =
            n.setPosition ||
            function (t, i, s, o, a) {
              e.options.horizontalScrolling && n.setLeft(t, i, s),
                e.options.verticalScrolling && n.setTop(t, o, a);
            });
      },
      _handleWindowLoadAndResize: function () {
        var i = this,
          n = t(e);
        i.options.responsive &&
          n.bind("load." + this.name, function () {
            i.refresh();
          }),
          n.bind("resize." + this.name, function () {
            i._detectViewport(), i.options.responsive && i.refresh();
          });
      },
      refresh: function (i) {
        var n = this,
          s = n._getScrollLeft(),
          o = n._getScrollTop();
        (!i || !i.firstLoad) && this._reset(),
          this._setScrollLeft(0),
          this._setScrollTop(0),
          this._setOffsets(),
          this._findParticles(),
          this._findBackgrounds(),
          i &&
            i.firstLoad &&
            /WebKit/.test(navigator.userAgent) &&
            t(e).load(function () {
              var t = n._getScrollLeft(),
                e = n._getScrollTop();
              n._setScrollLeft(t + 1),
                n._setScrollTop(e + 1),
                n._setScrollLeft(t),
                n._setScrollTop(e);
            }),
          this._setScrollLeft(s),
          this._setScrollTop(o);
      },
      _detectViewport: function () {
        var t = this.$viewportElement.offset(),
          e = null !== t && t !== n;
        (this.viewportWidth = this.$viewportElement.width()),
          (this.viewportHeight = this.$viewportElement.height()),
          (this.viewportOffsetTop = e ? t.top : 0),
          (this.viewportOffsetLeft = e ? t.left : 0);
      },
      _findParticles: function () {
        var e = this;
        if ((this._getScrollLeft(), this._getScrollTop(), this.particles !== n))
          for (var i = this.particles.length - 1; i >= 0; i--)
            this.particles[i].$element.data("stellar-elementIsActive", n);
        (this.particles = []),
          this.options.parallaxElements &&
            this.$element.find("[data-stellar-ratio]").each(function (i) {
              var s,
                o,
                a,
                r,
                l,
                h,
                c,
                u,
                d,
                f = t(this),
                p = 0,
                m = 0,
                g = 0,
                v = 0;
              if (f.data("stellar-elementIsActive")) {
                if (f.data("stellar-elementIsActive") !== this) return;
              } else f.data("stellar-elementIsActive", this);
              e.options.showElement(f),
                f.data("stellar-startingLeft")
                  ? (f.css("left", f.data("stellar-startingLeft")),
                    f.css("top", f.data("stellar-startingTop")))
                  : (f.data("stellar-startingLeft", f.css("left")),
                    f.data("stellar-startingTop", f.css("top"))),
                (a = f.position().left),
                (r = f.position().top),
                (l =
                  "auto" === f.css("margin-left")
                    ? 0
                    : parseInt(f.css("margin-left"), 10)),
                (h =
                  "auto" === f.css("margin-top")
                    ? 0
                    : parseInt(f.css("margin-top"), 10)),
                (u = f.offset().left - l),
                (d = f.offset().top - h),
                f.parents().each(function () {
                  var e = t(this);
                  if (!0 === e.data("stellar-offset-parent"))
                    return (p = g), (m = v), (c = e), !1;
                  (g += e.position().left), (v += e.position().top);
                }),
                (s =
                  f.data("stellar-horizontal-offset") !== n
                    ? f.data("stellar-horizontal-offset")
                    : c !== n && c.data("stellar-horizontal-offset") !== n
                    ? c.data("stellar-horizontal-offset")
                    : e.horizontalOffset),
                (o =
                  f.data("stellar-vertical-offset") !== n
                    ? f.data("stellar-vertical-offset")
                    : c !== n && c.data("stellar-vertical-offset") !== n
                    ? c.data("stellar-vertical-offset")
                    : e.verticalOffset),
                e.particles.push({
                  $element: f,
                  $offsetParent: c,
                  isFixed: "fixed" === f.css("position"),
                  horizontalOffset: s,
                  verticalOffset: o,
                  startingPositionLeft: a,
                  startingPositionTop: r,
                  startingOffsetLeft: u,
                  startingOffsetTop: d,
                  parentOffsetLeft: p,
                  parentOffsetTop: m,
                  stellarRatio:
                    f.data("stellar-ratio") !== n ? f.data("stellar-ratio") : 1,
                  width: f.outerWidth(!0),
                  height: f.outerHeight(!0),
                  isHidden: !1,
                });
            });
      },
      _findBackgrounds: function () {
        var e,
          i = this,
          s = this._getScrollLeft(),
          o = this._getScrollTop();
        (this.backgrounds = []),
          this.options.parallaxBackgrounds &&
            ((e = this.$element.find("[data-stellar-background-ratio]")),
            this.$element.data("stellar-background-ratio") &&
              (e = e.add(this.$element)),
            e.each(function () {
              var e,
                a,
                r,
                l,
                h,
                c,
                f,
                p = t(this),
                m = d(p),
                g = 0,
                v = 0,
                b = 0,
                y = 0;
              if (p.data("stellar-backgroundIsActive")) {
                if (p.data("stellar-backgroundIsActive") !== this) return;
              } else p.data("stellar-backgroundIsActive", this);
              p.data("stellar-backgroundStartingLeft")
                ? u(
                    p,
                    p.data("stellar-backgroundStartingLeft"),
                    p.data("stellar-backgroundStartingTop")
                  )
                : (p.data("stellar-backgroundStartingLeft", m[0]),
                  p.data("stellar-backgroundStartingTop", m[1])),
                (r =
                  "auto" === p.css("margin-left")
                    ? 0
                    : parseInt(p.css("margin-left"), 10)),
                (l =
                  "auto" === p.css("margin-top")
                    ? 0
                    : parseInt(p.css("margin-top"), 10)),
                (h = p.offset().left - r - s),
                (c = p.offset().top - l - o),
                p.parents().each(function () {
                  var e = t(this);
                  if (!0 === e.data("stellar-offset-parent"))
                    return (g = b), (v = y), (f = e), !1;
                  (b += e.position().left), (y += e.position().top);
                }),
                (e =
                  p.data("stellar-horizontal-offset") !== n
                    ? p.data("stellar-horizontal-offset")
                    : f !== n && f.data("stellar-horizontal-offset") !== n
                    ? f.data("stellar-horizontal-offset")
                    : i.horizontalOffset),
                (a =
                  p.data("stellar-vertical-offset") !== n
                    ? p.data("stellar-vertical-offset")
                    : f !== n && f.data("stellar-vertical-offset") !== n
                    ? f.data("stellar-vertical-offset")
                    : i.verticalOffset),
                i.backgrounds.push({
                  $element: p,
                  $offsetParent: f,
                  isFixed: "fixed" === p.css("background-attachment"),
                  horizontalOffset: e,
                  verticalOffset: a,
                  startingValueLeft: m[0],
                  startingValueTop: m[1],
                  startingBackgroundPositionLeft: isNaN(parseInt(m[0], 10))
                    ? 0
                    : parseInt(m[0], 10),
                  startingBackgroundPositionTop: isNaN(parseInt(m[1], 10))
                    ? 0
                    : parseInt(m[1], 10),
                  startingPositionLeft: p.position().left,
                  startingPositionTop: p.position().top,
                  startingOffsetLeft: h,
                  startingOffsetTop: c,
                  parentOffsetLeft: g,
                  parentOffsetTop: v,
                  stellarRatio:
                    p.data("stellar-background-ratio") === n
                      ? 1
                      : p.data("stellar-background-ratio"),
                });
            }));
      },
      _reset: function () {
        var t, e, i, n, s;
        for (s = this.particles.length - 1; s >= 0; s--)
          (e = (t = this.particles[s]).$element.data("stellar-startingLeft")),
            (i = t.$element.data("stellar-startingTop")),
            this._setPosition(t.$element, e, e, i, i),
            this.options.showElement(t.$element),
            t.$element
              .data("stellar-startingLeft", null)
              .data("stellar-elementIsActive", null)
              .data("stellar-backgroundIsActive", null);
        for (s = this.backgrounds.length - 1; s >= 0; s--)
          (n = this.backgrounds[s]).$element
            .data("stellar-backgroundStartingLeft", null)
            .data("stellar-backgroundStartingTop", null),
            u(n.$element, n.startingValueLeft, n.startingValueTop);
      },
      destroy: function () {
        this._reset(),
          this.$scrollElement
            .unbind("resize." + this.name)
            .unbind("scroll." + this.name),
          (this._animationLoop = t.noop),
          t(e)
            .unbind("load." + this.name)
            .unbind("resize." + this.name);
      },
      _setOffsets: function () {
        var i = this,
          n = t(e);
        n
          .unbind("resize.horizontal-" + this.name)
          .unbind("resize.vertical-" + this.name),
          "function" == typeof this.options.horizontalOffset
            ? ((this.horizontalOffset = this.options.horizontalOffset()),
              n.bind("resize.horizontal-" + this.name, function () {
                i.horizontalOffset = i.options.horizontalOffset();
              }))
            : (this.horizontalOffset = this.options.horizontalOffset),
          "function" == typeof this.options.verticalOffset
            ? ((this.verticalOffset = this.options.verticalOffset()),
              n.bind("resize.vertical-" + this.name, function () {
                i.verticalOffset = i.options.verticalOffset();
              }))
            : (this.verticalOffset = this.options.verticalOffset);
      },
      _repositionElements: function () {
        var t,
          e,
          i,
          n,
          s,
          o,
          a,
          r,
          l,
          h,
          c = this._getScrollLeft(),
          d = this._getScrollTop(),
          f = !0,
          p = !0;
        if (
          this.currentScrollLeft !== c ||
          this.currentScrollTop !== d ||
          this.currentWidth !== this.viewportWidth ||
          this.currentHeight !== this.viewportHeight
        ) {
          for (
            this.currentScrollLeft = c,
              this.currentScrollTop = d,
              this.currentWidth = this.viewportWidth,
              this.currentHeight = this.viewportHeight,
              h = this.particles.length - 1;
            h >= 0;
            h--
          )
            (e = (t = this.particles[h]).isFixed ? 1 : 0),
              this.options.horizontalScrolling
                ? (r =
                    (o =
                      (c +
                        t.horizontalOffset +
                        this.viewportOffsetLeft +
                        t.startingPositionLeft -
                        t.startingOffsetLeft +
                        t.parentOffsetLeft) *
                        -(t.stellarRatio + e - 1) +
                      t.startingPositionLeft) -
                    t.startingPositionLeft +
                    t.startingOffsetLeft)
                : ((o = t.startingPositionLeft), (r = t.startingOffsetLeft)),
              this.options.verticalScrolling
                ? (l =
                    (a =
                      (d +
                        t.verticalOffset +
                        this.viewportOffsetTop +
                        t.startingPositionTop -
                        t.startingOffsetTop +
                        t.parentOffsetTop) *
                        -(t.stellarRatio + e - 1) +
                      t.startingPositionTop) -
                    t.startingPositionTop +
                    t.startingOffsetTop)
                : ((a = t.startingPositionTop), (l = t.startingOffsetTop)),
              this.options.hideDistantElements &&
                ((p =
                  !this.options.horizontalScrolling ||
                  (r + t.width > (t.isFixed ? 0 : c) &&
                    r <
                      (t.isFixed ? 0 : c) +
                        this.viewportWidth +
                        this.viewportOffsetLeft)),
                (f =
                  !this.options.verticalScrolling ||
                  (l + t.height > (t.isFixed ? 0 : d) &&
                    l <
                      (t.isFixed ? 0 : d) +
                        this.viewportHeight +
                        this.viewportOffsetTop))),
              p && f
                ? (t.isHidden &&
                    (this.options.showElement(t.$element), (t.isHidden = !1)),
                  this._setPosition(
                    t.$element,
                    o,
                    t.startingPositionLeft,
                    a,
                    t.startingPositionTop
                  ))
                : t.isHidden ||
                  (this.options.hideElement(t.$element), (t.isHidden = !0));
          for (h = this.backgrounds.length - 1; h >= 0; h--)
            (e = (i = this.backgrounds[h]).isFixed ? 0 : 1),
              (n = this.options.horizontalScrolling
                ? (c +
                    i.horizontalOffset -
                    this.viewportOffsetLeft -
                    i.startingOffsetLeft +
                    i.parentOffsetLeft -
                    i.startingBackgroundPositionLeft) *
                    (e - i.stellarRatio) +
                  "px"
                : i.startingValueLeft),
              (s = this.options.verticalScrolling
                ? (d +
                    i.verticalOffset -
                    this.viewportOffsetTop -
                    i.startingOffsetTop +
                    i.parentOffsetTop -
                    i.startingBackgroundPositionTop) *
                    (e - i.stellarRatio) +
                  "px"
                : i.startingValueTop),
              u(i.$element, n, s);
        }
      },
      _handleScrollEvent: function () {
        var t = this,
          e = !1,
          i = function () {
            t._repositionElements(), (e = !1);
          },
          n = function () {
            e || (f(i), (e = !0));
          };
        this.$scrollElement.bind("scroll." + this.name, n), n();
      },
      _startAnimationLoop: function () {
        var t = this;
        (this._animationLoop = function () {
          f(t._animationLoop), t._repositionElements();
        }),
          this._animationLoop();
      },
    }),
      (t.fn[o] = function (e) {
        var i = arguments;
        return e === n || "object" == typeof e
          ? this.each(function () {
              t.data(this, "plugin_" + o) ||
                t.data(this, "plugin_" + o, new s(this, e));
            })
          : "string" == typeof e && "_" !== e[0] && "init" !== e
          ? this.each(function () {
              var n = t.data(this, "plugin_" + o);
              n instanceof s &&
                "function" == typeof n[e] &&
                n[e].apply(n, Array.prototype.slice.call(i, 1)),
                "destroy" === e && t.data(this, "plugin_" + o, null);
            })
          : void 0;
      }),
      (t[o] = function (i) {
        var n = t(e);
        return n.stellar.apply(n, Array.prototype.slice.call(arguments, 0));
      }),
      (t[o].scrollProperty = r),
      (t[o].positionProperty = l),
      (e.Stellar = s);
  })(jQuery, this, document),
  (function () {
    function t() {}
    function e(t) {
      return o.retinaImageSuffix + t;
    }
    function i(t, i) {
      if (((this.path = t || ""), null != i))
        (this.at_2x_path = i), (this.perform_check = !1);
      else {
        if (void 0 !== document.createElement) {
          var n = document.createElement("a");
          (n.href = this.path),
            (n.pathname = n.pathname.replace(a, e)),
            (this.at_2x_path = n.href);
        } else {
          var s = this.path.split("?");
          (s[0] = s[0].replace(a, e)), (this.at_2x_path = s.join("?"));
        }
        this.perform_check = !0;
      }
    }
    function n(t) {
      (this.el = t),
        (this.path = new i(
          this.el.getAttribute("src"),
          this.el.getAttribute("data-at2x")
        ));
      var e = this;
      this.path.check_2x_variant(function (t) {
        t && e.swap();
      });
    }
    var s = "undefined" == typeof exports ? window : exports,
      o = {
        retinaImageSuffix: "@2x",
        check_mime_type: !0,
        force_original_dimensions: !0,
      };
    (s.Retina = t),
      (t.configure = function (t) {
        for (var e in (null === t && (t = {}), t))
          t.hasOwnProperty(e) && (o[e] = t[e]);
      }),
      (t.init = function (t) {
        null === t && (t = s);
        var e = t.onload || function () {};
        t.onload = function () {
          var t,
            i,
            s = document.getElementsByTagName("img"),
            o = [];
          for (t = 0; t < s.length; t += 1)
            (i = s[t]).getAttributeNode("data-no-retina") || o.push(new n(i));
          e();
        };
      }),
      (t.isRetina = function () {
        return (
          s.devicePixelRatio > 1 ||
          !(
            !s.matchMedia ||
            !s.matchMedia(
              "(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-resolution: 1.5dppx)"
            ).matches
          )
        );
      });
    var a = /\.\w+$/;
    (s.RetinaImagePath = i),
      (i.confirmed_paths = []),
      (i.prototype.is_external = function () {
        return !(
          !this.path.match(/^https?\:/i) ||
          this.path.match("//" + document.domain)
        );
      }),
      (i.prototype.check_2x_variant = function (t) {
        var e,
          n = this;
        return this.is_external()
          ? t(!1)
          : this.perform_check ||
            void 0 === this.at_2x_path ||
            null === this.at_2x_path
          ? this.at_2x_path in i.confirmed_paths
            ? t(!0)
            : ((e = new XMLHttpRequest()).open("HEAD", this.at_2x_path),
              (e.onreadystatechange = function () {
                if (4 !== e.readyState) return t(!1);
                if (e.status >= 200 && e.status <= 399) {
                  if (o.check_mime_type) {
                    var s = e.getResponseHeader("Content-Type");
                    if (null === s || !s.match(/^image/i)) return t(!1);
                  }
                  return i.confirmed_paths.push(n.at_2x_path), t(!0);
                }
                return t(!1);
              }),
              void e.send())
          : t(!0);
      }),
      (s.RetinaImage = n),
      (n.prototype.swap = function (t) {
        void 0 === t && (t = this.path.at_2x_path);
        var e = this;
        !(function i() {
          e.el.complete
            ? (o.force_original_dimensions &&
                (e.el.setAttribute("width", e.el.offsetWidth),
                e.el.setAttribute("height", e.el.offsetHeight)),
              e.el.setAttribute("src", t))
            : setTimeout(i, 5);
        })();
      }),
      t.isRetina() && t.init(s);
  })(),
  (function (t, e, i, n) {
    var s = function (n, s) {
      (this.elem = n),
        (this.$elem = t(n)),
        (this.options = s),
        (this.metadata = this.$elem.data("plugin-options")),
        (this.$win = t(e)),
        (this.sections = {}),
        (this.didScroll = !1),
        (this.$doc = t(i)),
        (this.docHeight = this.$doc.height());
    };
    (s.defaults = (s.prototype = {
      defaults: {
        navItems: "a",
        currentClass: "current",
        changeHash: !1,
        easing: "swing",
        filter: "",
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        begin: !1,
        end: !1,
        scrollChange: !1,
      },
      init: function () {
        return (
          (this.config = t.extend(
            {},
            this.defaults,
            this.options,
            this.metadata
          )),
          (this.$nav = this.$elem.find(this.config.navItems)),
          "" !== this.config.filter &&
            (this.$nav = this.$nav.filter(this.config.filter)),
          this.$nav.on("click.onePageNav", t.proxy(this.handleClick, this)),
          this.getPositions(),
          this.bindInterval(),
          this.$win.on("resize.onePageNav", t.proxy(this.getPositions, this)),
          this
        );
      },
      adjustNav: function (t, e) {
        t.$elem
          .find("." + t.config.currentClass)
          .removeClass(t.config.currentClass),
          e.addClass(t.config.currentClass);
      },
      bindInterval: function () {
        var t,
          e = this;
        e.$win.on("scroll.onePageNav", function () {
          e.didScroll = !0;
        }),
          (e.t = setInterval(function () {
            (t = e.$doc.height()),
              e.didScroll && ((e.didScroll = !1), e.scrollChange()),
              t !== e.docHeight && ((e.docHeight = t), e.getPositions());
          }, 250));
      },
      getHash: function (t) {
        return t.attr("href").split("#")[1];
      },
      getPositions: function () {
        var e,
          i,
          n,
          s = this;
        s.$nav.each(function () {
          (e = s.getHash(t(this))),
            (n = t("#" + e)).length &&
              ((i = n.offset().top), (s.sections[e] = Math.round(i)));
        });
      },
      getSection: function (t) {
        var e = null,
          i = Math.round(this.$win.height() * this.config.scrollThreshold);
        for (var n in this.sections) this.sections[n] - i < t && (e = n);
        return e;
      },
      handleClick: function (i) {
        var n = this,
          s = t(i.currentTarget),
          o = s.parent(),
          a = "#" + n.getHash(s);
        o.hasClass(n.config.currentClass) ||
          (n.config.begin && n.config.begin(),
          n.adjustNav(n, o),
          n.unbindInterval(),
          n.scrollTo(a, function () {
            n.config.changeHash && (e.location.hash = a),
              n.bindInterval(),
              n.config.end && n.config.end();
          })),
          i.preventDefault();
      },
      scrollChange: function () {
        var t,
          e = this.$win.scrollTop(),
          i = this.getSection(e);
        null !== i &&
          ((t = this.$elem.find('a[href$="#' + i + '"]').parent()).hasClass(
            this.config.currentClass
          ) ||
            (this.adjustNav(this, t),
            this.config.scrollChange && this.config.scrollChange(t)));
      },
      scrollTo: function (e, i) {
        var n = t(e).offset().top;
        t("html, body").animate(
          { scrollTop: n },
          this.config.scrollSpeed,
          this.config.easing,
          i
        );
      },
      unbindInterval: function () {
        clearInterval(this.t), this.$win.unbind("scroll.onePageNav");
      },
    }).defaults),
      (t.fn.onePageNav = function (t) {
        return this.each(function () {
          new s(this, t).init();
        });
      });
  })(jQuery, window, document),
  window.matchMedia ||
    (window.matchMedia = (function () {
      "use strict";
      var t = window.styleMedia || window.media;
      if (!t) {
        var e,
          i = document.createElement("style"),
          n = document.getElementsByTagName("script")[0];
        (i.type = "text/css"),
          (i.id = "matchmediajs-test"),
          n.parentNode.insertBefore(i, n),
          (e =
            ("getComputedStyle" in window &&
              window.getComputedStyle(i, null)) ||
            i.currentStyle),
          (t = {
            matchMedium: function (t) {
              var n = "@media " + t + "{ #matchmediajs-test { width: 1px; } }";
              return (
                i.styleSheet ? (i.styleSheet.cssText = n) : (i.textContent = n),
                "1px" === e.width
              );
            },
          });
      }
      return function (e) {
        return { matches: t.matchMedium(e || "all"), media: e || "all" };
      };
    })()),
  (function (t) {
    "use strict";
    (t.ajaxChimp = {
      responses: {
        "We have sent you a confirmation email": 0,
        "Please enter a value": 1,
        "An email address must contain a single @": 2,
        "The domain portion of the email address is invalid (the portion after the @: )": 3,
        "The username portion of the email address is invalid (the portion before the @: )": 4,
        "This email address looks fake or invalid. Please enter a real email address": 5,
      },
      translations: { en: null },
      init: function (e, i) {
        t(e).ajaxChimp(i);
      },
    }),
      (t.fn.ajaxChimp = function (e) {
        return (
          t(this).each(function (i, n) {
            var s = t(n),
              o = s.find("input[type=email]"),
              a = s.find("label[for=" + o.attr("id") + "]"),
              r = t.extend({ url: s.attr("action"), language: "en" }, e),
              l = r.url.replace("/post?", "/post-json?").concat("&c=?");
            s.attr("novalidate", "true"),
              o.attr("name", "EMAIL"),
              s.submit(function () {
                var e = {},
                  i = s.serializeArray();
                t.each(i, function (t, i) {
                  e[i.name] = i.value;
                }),
                  t.ajax({
                    url: l,
                    data: e,
                    success: function (e) {
                      if ("success" === e.result)
                        (i = "We have sent you a confirmation email"),
                          a.removeClass("error").addClass("valid"),
                          o.removeClass("error").addClass("valid");
                      else {
                        var i;
                        o.removeClass("valid").addClass("error"),
                          a.removeClass("valid").addClass("error");
                        try {
                          var n = e.msg.split(" - ", 2);
                          void 0 === n[1]
                            ? (i = e.msg)
                            : parseInt(n[0], 10).toString() === n[0]
                            ? (n[0], (i = n[1]))
                            : (i = e.msg);
                        } catch (t) {
                          i = e.msg;
                        }
                      }
                      "en" !== r.language &&
                        t.ajaxChimp.responses[i] &&
                        t.ajaxChimp.translations &&
                        t.ajaxChimp.translations[r.language] &&
                        t.ajaxChimp.translations[r.language][
                          t.ajaxChimp.responses[i]
                        ] &&
                        (i =
                          t.ajaxChimp.translations[r.language][
                            t.ajaxChimp.responses[i]
                          ]),
                        a.html(i),
                        a.show(2e3),
                        r.callback && r.callback(e);
                    },
                    dataType: "jsonp",
                    error: function (t, e) {
                      console.log("mailchimp ajax submit error: " + e);
                    },
                  });
                var n = "Submitting...";
                return (
                  "en" !== r.language &&
                    t.ajaxChimp.translations &&
                    t.ajaxChimp.translations[r.language] &&
                    t.ajaxChimp.translations[r.language].submit &&
                    (n = t.ajaxChimp.translations[r.language].submit),
                  a.html(n).show(2e3),
                  !1
                );
              });
          }),
          this
        );
      });
  })(jQuery),
  (function (t) {
    "use strict";
    t.fn.fitVids = function (e) {
      var i = { customSelector: null, ignore: null };
      if (!document.getElementById("fit-vids-style")) {
        var n = document.head || document.getElementsByTagName("head")[0],
          s = document.createElement("div");
        (s.innerHTML =
          '<p>x</p><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>'),
          n.appendChild(s.childNodes[1]);
      }
      return (
        e && t.extend(i, e),
        this.each(function () {
          var e = [
            "iframe[src*='player.vimeo.com']",
            "iframe[src*='youtube.com']",
            "iframe[src*='youtube-nocookie.com']",
            "iframe[src*='kickstarter.com'][src*='video.html']",
            "object",
            "embed",
          ];
          i.customSelector && e.push(i.customSelector);
          var n = ".fitvidsignore";
          i.ignore && (n = n + ", " + i.ignore);
          var s = t(this).find(e.join(","));
          (s = (s = s.not("object object")).not(n)).each(function () {
            var e = t(this);
            if (
              !(
                e.parents(n).length > 0 ||
                ("embed" === this.tagName.toLowerCase() &&
                  e.parent("object").length) ||
                e.parent(".fluid-width-video-wrapper").length
              )
            ) {
              e.css("height") ||
                e.css("width") ||
                (!isNaN(e.attr("height")) && !isNaN(e.attr("width"))) ||
                (e.attr("height", 9), e.attr("width", 16));
              var i =
                ("object" === this.tagName.toLowerCase() ||
                (e.attr("height") && !isNaN(parseInt(e.attr("height"), 10)))
                  ? parseInt(e.attr("height"), 10)
                  : e.height()) /
                (isNaN(parseInt(e.attr("width"), 10))
                  ? e.width()
                  : parseInt(e.attr("width"), 10));
              if (!e.attr("id")) {
                var s = "fitvid" + Math.floor(999999 * Math.random());
                e.attr("id", s);
              }
              e
                .wrap('<div class="fluid-width-video-wrapper"></div>')
                .parent(".fluid-width-video-wrapper")
                .css("padding-top", 100 * i + "%"),
                e.removeAttr("height").removeAttr("width");
            }
          });
        })
      );
    };
  })(window.jQuery || window.Zepto),
  (function (t, e) {
    "function" == typeof define && define.amd
      ? define(["jquery"], e)
      : "object" == typeof exports
      ? (module.exports = e(require("jquery")))
      : (t.lightbox = e(t.jQuery));
  })(this, function (t) {
    function e(e) {
      (this.album = []),
        (this.currentImageIndex = void 0),
        this.init(),
        (this.options = t.extend({}, this.constructor.defaults)),
        this.option(e);
    }
    return (
      (e.defaults = {
        albumLabel: "Image %1 of %2",
        alwaysShowNavOnTouchDevices: !1,
        fadeDuration: 500,
        fitImagesInViewport: !0,
        positionFromTop: 50,
        resizeDuration: 700,
        showImageNumberLabel: !0,
        wrapAround: !1,
        disableScrolling: !1,
      }),
      (e.prototype.option = function (e) {
        t.extend(this.options, e);
      }),
      (e.prototype.imageCountLabel = function (t, e) {
        return this.options.albumLabel.replace(/%1/g, t).replace(/%2/g, e);
      }),
      (e.prototype.init = function () {
        this.enable(), this.build();
      }),
      (e.prototype.enable = function () {
        var e = this;
        t("body").on(
          "click",
          "a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]",
          function (i) {
            return e.start(t(i.currentTarget)), !1;
          }
        );
      }),
      (e.prototype.build = function () {
        var e = this;
        t(
          '<div id="lightboxOverlay" class="lightboxOverlay"></div><div id="lightbox" class="lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" /><div class="lb-nav"><a class="lb-prev" href="" ></a><a class="lb-next" href="" ></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>'
        ).appendTo(t("body")),
          (this.$lightbox = t("#lightbox")),
          (this.$overlay = t("#lightboxOverlay")),
          (this.$outerContainer = this.$lightbox.find(".lb-outerContainer")),
          (this.$container = this.$lightbox.find(".lb-container")),
          (this.containerTopPadding = parseInt(
            this.$container.css("padding-top"),
            10
          )),
          (this.containerRightPadding = parseInt(
            this.$container.css("padding-right"),
            10
          )),
          (this.containerBottomPadding = parseInt(
            this.$container.css("padding-bottom"),
            10
          )),
          (this.containerLeftPadding = parseInt(
            this.$container.css("padding-left"),
            10
          )),
          this.$overlay.hide().on("click", function () {
            return e.end(), !1;
          }),
          this.$lightbox.hide().on("click", function (i) {
            return "lightbox" === t(i.target).attr("id") && e.end(), !1;
          }),
          this.$outerContainer.on("click", function (i) {
            return "lightbox" === t(i.target).attr("id") && e.end(), !1;
          }),
          this.$lightbox.find(".lb-prev").on("click", function () {
            return (
              0 === e.currentImageIndex
                ? e.changeImage(e.album.length - 1)
                : e.changeImage(e.currentImageIndex - 1),
              !1
            );
          }),
          this.$lightbox.find(".lb-next").on("click", function () {
            return (
              e.currentImageIndex === e.album.length - 1
                ? e.changeImage(0)
                : e.changeImage(e.currentImageIndex + 1),
              !1
            );
          }),
          this.$lightbox.find(".lb-loader, .lb-close").on("click", function () {
            return e.end(), !1;
          });
      }),
      (e.prototype.start = function (e) {
        var i = this,
          n = t(window);
        n.on("resize", t.proxy(this.sizeOverlay, this)),
          t("select, object, embed").css({ visibility: "hidden" }),
          this.sizeOverlay(),
          (this.album = []);
        var s = 0;
        function o(t) {
          i.album.push({
            link: t.attr("href"),
            title: t.attr("data-title") || t.attr("title"),
          });
        }
        var a,
          r = e.attr("data-lightbox");
        if (r) {
          a = t(e.prop("tagName") + '[data-lightbox="' + r + '"]');
          for (var l = 0; l < a.length; l = ++l)
            o(t(a[l])), a[l] === e[0] && (s = l);
        } else if ("lightbox" === e.attr("rel")) o(e);
        else {
          a = t(e.prop("tagName") + '[rel="' + e.attr("rel") + '"]');
          for (var h = 0; h < a.length; h = ++h)
            o(t(a[h])), a[h] === e[0] && (s = h);
        }
        var c = n.scrollTop() + this.options.positionFromTop,
          u = n.scrollLeft();
        this.$lightbox
          .css({ top: c + "px", left: u + "px" })
          .fadeIn(this.options.fadeDuration),
          this.options.disableScrolling &&
            t("body").addClass("lb-disable-scrolling"),
          this.changeImage(s);
      }),
      (e.prototype.changeImage = function (e) {
        var i = this;
        this.disableKeyboardNav();
        var n = this.$lightbox.find(".lb-image");
        this.$overlay.fadeIn(this.options.fadeDuration),
          t(".lb-loader").fadeIn("slow"),
          this.$lightbox
            .find(
              ".lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption"
            )
            .hide(),
          this.$outerContainer.addClass("animating");
        var s = new Image();
        (s.onload = function () {
          var o, a, r, l, h, c;
          n.attr("src", i.album[e].link),
            t(s),
            n.width(s.width),
            n.height(s.height),
            i.options.fitImagesInViewport &&
              ((c = t(window).width()),
              (h = t(window).height()),
              (l = c - i.containerLeftPadding - i.containerRightPadding - 20),
              (r = h - i.containerTopPadding - i.containerBottomPadding - 120),
              i.options.maxWidth &&
                i.options.maxWidth < l &&
                (l = i.options.maxWidth),
              i.options.maxHeight &&
                i.options.maxHeight < l &&
                (r = i.options.maxHeight),
              (s.width > l || s.height > r) &&
                (s.width / l > s.height / r
                  ? ((a = l),
                    (o = parseInt(s.height / (s.width / a), 10)),
                    n.width(a),
                    n.height(o))
                  : ((o = r),
                    (a = parseInt(s.width / (s.height / o), 10)),
                    n.width(a),
                    n.height(o)))),
            i.sizeContainer(n.width(), n.height());
        }),
          (s.src = this.album[e].link),
          (this.currentImageIndex = e);
      }),
      (e.prototype.sizeOverlay = function () {
        this.$overlay.width(t(document).width()).height(t(document).height());
      }),
      (e.prototype.sizeContainer = function (t, e) {
        var i = this,
          n = this.$outerContainer.outerWidth(),
          s = this.$outerContainer.outerHeight(),
          o = t + this.containerLeftPadding + this.containerRightPadding,
          a = e + this.containerTopPadding + this.containerBottomPadding;
        function r() {
          i.$lightbox.find(".lb-dataContainer").width(o),
            i.$lightbox.find(".lb-prevLink").height(a),
            i.$lightbox.find(".lb-nextLink").height(a),
            i.showImage();
        }
        n !== o || s !== a
          ? this.$outerContainer.animate(
              { width: o, height: a },
              this.options.resizeDuration,
              "swing",
              function () {
                r();
              }
            )
          : r();
      }),
      (e.prototype.showImage = function () {
        this.$lightbox.find(".lb-loader").stop(!0).hide(),
          this.$lightbox.find(".lb-image").fadeIn("slow"),
          this.updateNav(),
          this.updateDetails(),
          this.preloadNeighboringImages(),
          this.enableKeyboardNav();
      }),
      (e.prototype.updateNav = function () {
        var t = !1;
        try {
          document.createEvent("TouchEvent"),
            (t = !!this.options.alwaysShowNavOnTouchDevices);
        } catch (t) {}
        this.$lightbox.find(".lb-nav").show(),
          this.album.length > 1 &&
            (this.options.wrapAround
              ? (t &&
                  this.$lightbox.find(".lb-prev, .lb-next").css("opacity", "1"),
                this.$lightbox.find(".lb-prev, .lb-next").show())
              : (this.currentImageIndex > 0 &&
                  (this.$lightbox.find(".lb-prev").show(),
                  t && this.$lightbox.find(".lb-prev").css("opacity", "1")),
                this.currentImageIndex < this.album.length - 1 &&
                  (this.$lightbox.find(".lb-next").show(),
                  t && this.$lightbox.find(".lb-next").css("opacity", "1"))));
      }),
      (e.prototype.updateDetails = function () {
        var e = this;
        if (
          (void 0 !== this.album[this.currentImageIndex].title &&
            "" !== this.album[this.currentImageIndex].title &&
            this.$lightbox
              .find(".lb-caption")
              .html(this.album[this.currentImageIndex].title)
              .fadeIn("fast")
              .find("a")
              .on("click", function (e) {
                void 0 !== t(this).attr("target")
                  ? window.open(t(this).attr("href"), t(this).attr("target"))
                  : (location.href = t(this).attr("href"));
              }),
          this.album.length > 1 && this.options.showImageNumberLabel)
        ) {
          var i = this.imageCountLabel(
            this.currentImageIndex + 1,
            this.album.length
          );
          this.$lightbox.find(".lb-number").text(i).fadeIn("fast");
        } else this.$lightbox.find(".lb-number").hide();
        this.$outerContainer.removeClass("animating"),
          this.$lightbox
            .find(".lb-dataContainer")
            .fadeIn(this.options.resizeDuration, function () {
              return e.sizeOverlay();
            });
      }),
      (e.prototype.preloadNeighboringImages = function () {
        this.album.length > this.currentImageIndex + 1 &&
          (new Image().src = this.album[this.currentImageIndex + 1].link),
          this.currentImageIndex > 0 &&
            (new Image().src = this.album[this.currentImageIndex - 1].link);
      }),
      (e.prototype.enableKeyboardNav = function () {
        t(document).on("keyup.keyboard", t.proxy(this.keyboardAction, this));
      }),
      (e.prototype.disableKeyboardNav = function () {
        t(document).off(".keyboard");
      }),
      (e.prototype.keyboardAction = function (t) {
        var e = t.keyCode,
          i = String.fromCharCode(e).toLowerCase();
        27 === e || i.match(/x|o|c/)
          ? this.end()
          : "p" === i || 37 === e
          ? 0 !== this.currentImageIndex
            ? this.changeImage(this.currentImageIndex - 1)
            : this.options.wrapAround &&
              this.album.length > 1 &&
              this.changeImage(this.album.length - 1)
          : ("n" !== i && 39 !== e) ||
            (this.currentImageIndex !== this.album.length - 1
              ? this.changeImage(this.currentImageIndex + 1)
              : this.options.wrapAround &&
                this.album.length > 1 &&
                this.changeImage(0));
      }),
      (e.prototype.end = function () {
        this.disableKeyboardNav(),
          t(window).off("resize", this.sizeOverlay),
          this.$lightbox.fadeOut(this.options.fadeDuration),
          this.$overlay.fadeOut(this.options.fadeDuration),
          t("select, object, embed").css({ visibility: "visible" }),
          this.options.disableScrolling &&
            t("body").removeClass("lb-disable-scrolling");
      }),
      new e()
    );
  }),
  (function (t) {
    "use strict";
    var e = function (t, e) {
      this.init("magnify", t, e);
    };
    (e.prototype = {
      constructor: e,
      init: function (e, i, n) {
        (this.type = e),
          (this.$element = t(i)),
          (this.options = this.getOptions(n)),
          (this.nativeWidth = 0),
          (this.nativeHeight = 0),
          this.$element.parent().hasClass("magnify") ||
            (this.$element.wrap('<div class="magnify" >'),
            this.$element
              .parent(".magnify")
              .append('<div class="magnify-large" >')),
          this.$element
            .siblings(".magnify-large")
            .css(
              "background",
              "url('" + this.$element.attr("src") + "') no-repeat"
            ),
          this.$element
            .parent(".magnify")
            .on("mousemove." + this.type, t.proxy(this.check, this)),
          this.$element
            .parent(".magnify")
            .on("mouseleave." + this.type, t.proxy(this.check, this));
      },
      getOptions: function (e) {
        return (
          (e = t.extend({}, t.fn[this.type].defaults, e, this.$element.data()))
            .delay &&
            "number" == typeof e.delay &&
            (e.delay = { show: e.delay, hide: e.delay }),
          e
        );
      },
      check: function (e) {
        var i = t(e.currentTarget),
          n = i.children("img"),
          s = i.children(".magnify-large");
        if (this.nativeWidth || this.nativeHeight) {
          var o = i.offset(),
            a = e.pageX - o.left,
            r = e.pageY - o.top;
          if (
            (a < i.width() && r < i.height() && a > 0 && r > 0
              ? s.fadeIn(100)
              : s.fadeOut(100),
            s.is(":visible"))
          ) {
            var l =
                -1 *
                  Math.round(
                    (a / i.width()) * this.nativeWidth - s.width() / 2
                  ) +
                "px " +
                -1 *
                  Math.round(
                    (r / i.height()) * this.nativeHeight - s.height() / 2
                  ) +
                "px",
              h = a - s.width() / 2,
              c = r - s.height() / 2;
            s.css({ left: h, top: c, backgroundPosition: l });
          }
        } else {
          var u = new Image();
          (u.src = n.attr("src")),
            (this.nativeWidth = u.width),
            (this.nativeHeight = u.height);
        }
      },
    }),
      (t.fn.magnify = function (i) {
        return this.each(function () {
          var n = t(this),
            s = n.data("magnify"),
            o = "object" == typeof i && i;
          s || n.data("tooltip", (s = new e(this, o))),
            "string" == typeof i && s[i]();
        });
      }),
      (t.fn.magnify.Constructor = e),
      (t.fn.magnify.defaults = { delay: 0 }),
      t(window).on("load", function () {
        t('[data-toggle="magnify"]').each(function () {
          t(this).magnify();
        });
      });
  })(window.jQuery),
  jQuery(document).ready(function () {
    jQuery("#contact_form").click(function () {
      var t = !1;
      return (
        "" == grecaptcha.getResponse() &&
          (jQuery("#err-captch").show(500),
          jQuery("#err-captch").delay(4e3),
          jQuery("#err-captch").animate(
            { height: "toggle" },
            500,
            function () {}
          ),
          (t = !0)),
        0 == t
      );
    });
  }),
  $(document).ready(function () {
    $("#contact_form").validate({
      rules: {
        name: { required: !0, minlength: 3 },
        email: { required: !0, email: !0 },
        phone: { required: !0, minlength: 11, maxlength: 14 },
        business: { required: !0, minlength: 3, maxlength: 100 },
        postcode: { required: !0, minlength: 3, maxlength: 10 },
        subject: { required: !0, minlength: 3 },
        message: { required: !0, minlength: 5 },
      },
      messages: {
        name: "Please enter a name.",
        email: "Please enter a valid email address.",
        phone: "Please enter a valid phone number.",
        business: "Please enter business name.",
        postcode: "Please enter a postcode.",
        message: "Please leave a message.",
      },
      submitHandler: function () {
        var t = $("#contact_form").serialize();
        $.ajax({
          type: "POST",
          url: "contactform.php",
          data: t,
          beforeSend: function () {
            $("#error").fadeOut(),
              $("#btn-submit").html(
                '<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...'
              );
          },
          success: function (t) {
            console.log(t),
              t
                ? ($("#success_message").slideDown({ opacity: "show" }, "slow"),
                  setTimeout('window.location.href = "home"; ', 5e3))
                : alert("Something wrong");
          },
        });
      },
    });
  }),
  (function (t) {
    t.extend(t.fn, {
      validate: function (e) {
        if (this.length) {
          var i = t.data(this[0], "validator");
          return (
            i ||
            (this.attr("novalidate", "novalidate"),
            (i = new t.validator(e, this[0])),
            t.data(this[0], "validator", i),
            i.settings.onsubmit &&
              (this.validateDelegate(":submit", "click", function (e) {
                i.settings.submitHandler && (i.submitButton = e.target),
                  t(e.target).hasClass("cancel") && (i.cancelSubmit = !0),
                  void 0 !== t(e.target).attr("formnovalidate") &&
                    (i.cancelSubmit = !0);
              }),
              this.submit(function (e) {
                function n() {
                  var n;
                  return (
                    !i.settings.submitHandler ||
                    (i.submitButton &&
                      (n = t("<input type='hidden'/>")
                        .attr("name", i.submitButton.name)
                        .val(t(i.submitButton).val())
                        .appendTo(i.currentForm)),
                    i.settings.submitHandler.call(i, i.currentForm, e),
                    i.submitButton && n.remove(),
                    !1)
                  );
                }
                return (
                  i.settings.debug && e.preventDefault(),
                  i.cancelSubmit
                    ? ((i.cancelSubmit = !1), n())
                    : i.form()
                    ? i.pendingRequest
                      ? ((i.formSubmitted = !0), !1)
                      : n()
                    : (i.focusInvalid(), !1)
                );
              })),
            i)
          );
        }
        e &&
          e.debug &&
          window.console &&
          console.warn("Nothing selected, can't validate, returning nothing.");
      },
      valid: function () {
        if (t(this[0]).is("form")) return this.validate().form();
        var e = !0,
          i = t(this[0].form).validate();
        return (
          this.each(function () {
            e = e && i.element(this);
          }),
          e
        );
      },
      removeAttrs: function (e) {
        var i = {},
          n = this;
        return (
          t.each(e.split(/\s/), function (t, e) {
            (i[e] = n.attr(e)), n.removeAttr(e);
          }),
          i
        );
      },
      rules: function (e, i) {
        var n = this[0];
        if (e) {
          var s = t.data(n.form, "validator").settings,
            o = s.rules,
            a = t.validator.staticRules(n);
          switch (e) {
            case "add":
              t.extend(a, t.validator.normalizeRule(i)),
                delete a.messages,
                (o[n.name] = a),
                i.messages &&
                  (s.messages[n.name] = t.extend(
                    s.messages[n.name],
                    i.messages
                  ));
              break;
            case "remove":
              if (!i) return delete o[n.name], a;
              var r = {};
              return (
                t.each(i.split(/\s/), function (t, e) {
                  (r[e] = a[e]), delete a[e];
                }),
                r
              );
          }
        }
        var l = t.validator.normalizeRules(
          t.extend(
            {},
            t.validator.classRules(n),
            t.validator.attributeRules(n),
            t.validator.dataRules(n),
            t.validator.staticRules(n)
          ),
          n
        );
        if (l.required) {
          var h = l.required;
          delete l.required, (l = t.extend({ required: h }, l));
        }
        return l;
      },
    }),
      t.extend(t.expr[":"], {
        blank: function (e) {
          return !t.trim("" + t(e).val());
        },
        filled: function (e) {
          return !!t.trim("" + t(e).val());
        },
        unchecked: function (e) {
          return !t(e).prop("checked");
        },
      }),
      (t.validator = function (e, i) {
        (this.settings = t.extend(!0, {}, t.validator.defaults, e)),
          (this.currentForm = i),
          this.init();
      }),
      (t.validator.format = function (e, i) {
        return 1 === arguments.length
          ? function () {
              var i = t.makeArray(arguments);
              return i.unshift(e), t.validator.format.apply(this, i);
            }
          : (arguments.length > 2 &&
              i.constructor !== Array &&
              (i = t.makeArray(arguments).slice(1)),
            i.constructor !== Array && (i = [i]),
            t.each(i, function (t, i) {
              e = e.replace(RegExp("\\{" + t + "\\}", "g"), function () {
                return i;
              });
            }),
            e);
      }),
      t.extend(t.validator, {
        defaults: {
          messages: {},
          groups: {},
          rules: {},
          errorClass: "error",
          validClass: "valid",
          errorElement: "label",
          focusInvalid: !0,
          errorContainer: t([]),
          errorLabelContainer: t([]),
          onsubmit: !0,
          ignore: ":hidden",
          ignoreTitle: !1,
          onfocusin: function (t) {
            (this.lastActive = t),
              this.settings.focusCleanup &&
                !this.blockFocusCleanup &&
                (this.settings.unhighlight &&
                  this.settings.unhighlight.call(
                    this,
                    t,
                    this.settings.errorClass,
                    this.settings.validClass
                  ),
                this.addWrapper(this.errorsFor(t)).hide());
          },
          onfocusout: function (t) {
            this.checkable(t) ||
              (!(t.name in this.submitted) && this.optional(t)) ||
              this.element(t);
          },
          onkeyup: function (t, e) {
            (9 !== e.which || "" !== this.elementValue(t)) &&
              (t.name in this.submitted || t === this.lastElement) &&
              this.element(t);
          },
          onclick: function (t) {
            t.name in this.submitted
              ? this.element(t)
              : t.parentNode.name in this.submitted &&
                this.element(t.parentNode);
          },
          highlight: function (e, i, n) {
            "radio" === e.type
              ? this.findByName(e.name).addClass(i).removeClass(n)
              : t(e).addClass(i).removeClass(n);
          },
          unhighlight: function (e, i, n) {
            "radio" === e.type
              ? this.findByName(e.name).removeClass(i).addClass(n)
              : t(e).removeClass(i).addClass(n);
          },
        },
        setDefaults: function (e) {
          t.extend(t.validator.defaults, e);
        },
        messages: {
          required: "This field is required.",
          remote: "Please fix this field.",
          email: "Please enter a valid email address.",
          url: "Please enter a valid URL.",
          date: "Please enter a valid date.",
          dateISO: "Please enter a valid date (ISO).",
          number: "Please enter a valid number.",
          digits: "Please enter only digits.",
          creditcard: "Please enter a valid credit card number.",
          equalTo: "Please enter the same value again.",
          maxlength: t.validator.format(
            "Please enter no more than {0} characters."
          ),
          minlength: t.validator.format(
            "Please enter at least {0} characters."
          ),
          rangelength: t.validator.format(
            "Please enter a value between {0} and {1} characters long."
          ),
          range: t.validator.format(
            "Please enter a value between {0} and {1}."
          ),
          max: t.validator.format(
            "Please enter a value less than or equal to {0}."
          ),
          min: t.validator.format(
            "Please enter a value greater than or equal to {0}."
          ),
        },
        autoCreateRanges: !1,
        prototype: {
          init: function () {
            function e(e) {
              var i = t.data(this[0].form, "validator"),
                n = "on" + e.type.replace(/^validate/, "");
              i.settings[n] && i.settings[n].call(i, this[0], e);
            }
            (this.labelContainer = t(this.settings.errorLabelContainer)),
              (this.errorContext =
                (this.labelContainer.length && this.labelContainer) ||
                t(this.currentForm)),
              (this.containers = t(this.settings.errorContainer).add(
                this.settings.errorLabelContainer
              )),
              (this.submitted = {}),
              (this.valueCache = {}),
              (this.pendingRequest = 0),
              (this.pending = {}),
              (this.invalid = {}),
              this.reset();
            var i = (this.groups = {});
            t.each(this.settings.groups, function (e, n) {
              "string" == typeof n && (n = n.split(/\s/)),
                t.each(n, function (t, n) {
                  i[n] = e;
                });
            });
            var n = this.settings.rules;
            t.each(n, function (e, i) {
              n[e] = t.validator.normalizeRule(i);
            }),
              t(this.currentForm)
                .validateDelegate(
                  ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'] ",
                  "focusin focusout keyup",
                  e
                )
                .validateDelegate(
                  "[type='radio'], [type='checkbox'], select, option",
                  "click",
                  e
                ),
              this.settings.invalidHandler &&
                t(this.currentForm).bind(
                  "invalid-form.validate",
                  this.settings.invalidHandler
                );
          },
          form: function () {
            return (
              this.checkForm(),
              t.extend(this.submitted, this.errorMap),
              (this.invalid = t.extend({}, this.errorMap)),
              this.valid() ||
                t(this.currentForm).triggerHandler("invalid-form", [this]),
              this.showErrors(),
              this.valid()
            );
          },
          checkForm: function () {
            this.prepareForm();
            for (
              var t = 0, e = (this.currentElements = this.elements());
              e[t];
              t++
            )
              this.check(e[t]);
            return this.valid();
          },
          element: function (e) {
            (e = this.validationTargetFor(this.clean(e))),
              (this.lastElement = e),
              this.prepareElement(e),
              (this.currentElements = t(e));
            var i = !1 !== this.check(e);
            return (
              i ? delete this.invalid[e.name] : (this.invalid[e.name] = !0),
              this.numberOfInvalids() ||
                (this.toHide = this.toHide.add(this.containers)),
              this.showErrors(),
              i
            );
          },
          showErrors: function (e) {
            if (e) {
              for (var i in (t.extend(this.errorMap, e),
              (this.errorList = []),
              e))
                this.errorList.push({
                  message: e[i],
                  element: this.findByName(i)[0],
                });
              this.successList = t.grep(this.successList, function (t) {
                return !(t.name in e);
              });
            }
            this.settings.showErrors
              ? this.settings.showErrors.call(
                  this,
                  this.errorMap,
                  this.errorList
                )
              : this.defaultShowErrors();
          },
          resetForm: function () {
            t.fn.resetForm && t(this.currentForm).resetForm(),
              (this.submitted = {}),
              (this.lastElement = null),
              this.prepareForm(),
              this.hideErrors(),
              this.elements()
                .removeClass(this.settings.errorClass)
                .removeData("previousValue");
          },
          numberOfInvalids: function () {
            return this.objectLength(this.invalid);
          },
          objectLength: function (t) {
            var e = 0;
            for (var i in t) e++;
            return e;
          },
          hideErrors: function () {
            this.addWrapper(this.toHide).hide();
          },
          valid: function () {
            return 0 === this.size();
          },
          size: function () {
            return this.errorList.length;
          },
          focusInvalid: function () {
            if (this.settings.focusInvalid)
              try {
                t(
                  this.findLastActive() ||
                    (this.errorList.length && this.errorList[0].element) ||
                    []
                )
                  .filter(":visible")
                  .focus()
                  .trigger("focusin");
              } catch (t) {}
          },
          findLastActive: function () {
            var e = this.lastActive;
            return (
              e &&
              1 ===
                t.grep(this.errorList, function (t) {
                  return t.element.name === e.name;
                }).length &&
              e
            );
          },
          elements: function () {
            var e = this,
              i = {};
            return t(this.currentForm)
              .find("input, select, textarea")
              .not(":submit, :reset, :image, [disabled]")
              .not(this.settings.ignore)
              .filter(function () {
                return (
                  !this.name &&
                    e.settings.debug &&
                    window.console &&
                    console.error("%o has no name assigned", this),
                  !(
                    this.name in i ||
                    !e.objectLength(t(this).rules()) ||
                    ((i[this.name] = !0), 0)
                  )
                );
              });
          },
          clean: function (e) {
            return t(e)[0];
          },
          errors: function () {
            var e = this.settings.errorClass.replace(" ", ".");
            return t(this.settings.errorElement + "." + e, this.errorContext);
          },
          reset: function () {
            (this.successList = []),
              (this.errorList = []),
              (this.errorMap = {}),
              (this.toShow = t([])),
              (this.toHide = t([])),
              (this.currentElements = t([]));
          },
          prepareForm: function () {
            this.reset(), (this.toHide = this.errors().add(this.containers));
          },
          prepareElement: function (t) {
            this.reset(), (this.toHide = this.errorsFor(t));
          },
          elementValue: function (e) {
            var i = t(e).attr("type"),
              n = t(e).val();
            return "radio" === i || "checkbox" === i
              ? t("input[name='" + t(e).attr("name") + "']:checked").val()
              : "string" == typeof n
              ? n.replace(/\r/g, "")
              : n;
          },
          check: function (e) {
            e = this.validationTargetFor(this.clean(e));
            var i,
              n = t(e).rules(),
              s = !1,
              o = this.elementValue(e);
            for (var a in n) {
              var r = { method: a, parameters: n[a] };
              try {
                if (
                  "dependency-mismatch" ===
                  (i = t.validator.methods[a].call(this, o, e, r.parameters))
                ) {
                  s = !0;
                  continue;
                }
                if (((s = !1), "pending" === i))
                  return void (this.toHide = this.toHide.not(
                    this.errorsFor(e)
                  ));
                if (!i) return this.formatAndAdd(e, r), !1;
              } catch (t) {
                throw (
                  (this.settings.debug &&
                    window.console &&
                    console.log(
                      "Exception occurred when checking element " +
                        e.id +
                        ", check the '" +
                        r.method +
                        "' method.",
                      t
                    ),
                  t)
                );
              }
            }
            return s
              ? void 0
              : (this.objectLength(n) && this.successList.push(e), !0);
          },
          customDataMessage: function (e, i) {
            return (
              t(e).data("msg-" + i.toLowerCase()) ||
              (e.attributes && t(e).attr("data-msg-" + i.toLowerCase()))
            );
          },
          customMessage: function (t, e) {
            var i = this.settings.messages[t];
            return i && (i.constructor === String ? i : i[e]);
          },
          findDefined: function () {
            for (var t = 0; arguments.length > t; t++)
              if (void 0 !== arguments[t]) return arguments[t];
          },
          defaultMessage: function (e, i) {
            return this.findDefined(
              this.customMessage(e.name, i),
              this.customDataMessage(e, i),
              (!this.settings.ignoreTitle && e.title) || void 0,
              t.validator.messages[i],
              "<strong>Warning: No message defined for " + e.name + "</strong>"
            );
          },
          formatAndAdd: function (e, i) {
            var n = this.defaultMessage(e, i.method),
              s = /\$?\{(\d+)\}/g;
            "function" == typeof n
              ? (n = n.call(this, i.parameters, e))
              : s.test(n) &&
                (n = t.validator.format(n.replace(s, "{$1}"), i.parameters)),
              this.errorList.push({ message: n, element: e }),
              (this.errorMap[e.name] = n),
              (this.submitted[e.name] = n);
          },
          addWrapper: function (t) {
            return (
              this.settings.wrapper &&
                (t = t.add(t.parent(this.settings.wrapper))),
              t
            );
          },
          defaultShowErrors: function () {
            var t, e;
            for (t = 0; this.errorList[t]; t++) {
              var i = this.errorList[t];
              this.settings.highlight &&
                this.settings.highlight.call(
                  this,
                  i.element,
                  this.settings.errorClass,
                  this.settings.validClass
                ),
                this.showLabel(i.element, i.message);
            }
            if (
              (this.errorList.length &&
                (this.toShow = this.toShow.add(this.containers)),
              this.settings.success)
            )
              for (t = 0; this.successList[t]; t++)
                this.showLabel(this.successList[t]);
            if (this.settings.unhighlight)
              for (t = 0, e = this.validElements(); e[t]; t++)
                this.settings.unhighlight.call(
                  this,
                  e[t],
                  this.settings.errorClass,
                  this.settings.validClass
                );
            (this.toHide = this.toHide.not(this.toShow)),
              this.hideErrors(),
              this.addWrapper(this.toShow).show();
          },
          validElements: function () {
            return this.currentElements.not(this.invalidElements());
          },
          invalidElements: function () {
            return t(this.errorList).map(function () {
              return this.element;
            });
          },
          showLabel: function (e, i) {
            var n = this.errorsFor(e);
            n.length
              ? (n
                  .removeClass(this.settings.validClass)
                  .addClass(this.settings.errorClass),
                n.html(i))
              : ((n = t("<" + this.settings.errorElement + ">")
                  .attr("for", this.idOrName(e))
                  .addClass(this.settings.errorClass)
                  .html(i || "")),
                this.settings.wrapper &&
                  (n = n
                    .hide()
                    .show()
                    .wrap("<" + this.settings.wrapper + "/>")
                    .parent()),
                this.labelContainer.append(n).length ||
                  (this.settings.errorPlacement
                    ? this.settings.errorPlacement(n, t(e))
                    : n.insertAfter(e))),
              !i &&
                this.settings.success &&
                (n.text(""),
                "string" == typeof this.settings.success
                  ? n.addClass(this.settings.success)
                  : this.settings.success(n, e)),
              (this.toShow = this.toShow.add(n));
          },
          errorsFor: function (e) {
            var i = this.idOrName(e);
            return this.errors().filter(function () {
              return t(this).attr("for") === i;
            });
          },
          idOrName: function (t) {
            return (
              this.groups[t.name] ||
              (this.checkable(t) ? t.name : t.id || t.name)
            );
          },
          validationTargetFor: function (t) {
            return (
              this.checkable(t) &&
                (t = this.findByName(t.name).not(this.settings.ignore)[0]),
              t
            );
          },
          checkable: function (t) {
            return /radio|checkbox/i.test(t.type);
          },
          findByName: function (e) {
            return t(this.currentForm).find("[name='" + e + "']");
          },
          getLength: function (e, i) {
            switch (i.nodeName.toLowerCase()) {
              case "select":
                return t("option:selected", i).length;
              case "input":
                if (this.checkable(i))
                  return this.findByName(i.name).filter(":checked").length;
            }
            return e.length;
          },
          depend: function (t, e) {
            return (
              !this.dependTypes[typeof t] || this.dependTypes[typeof t](t, e)
            );
          },
          dependTypes: {
            boolean: function (t) {
              return t;
            },
            string: function (e, i) {
              return !!t(e, i.form).length;
            },
            function: function (t, e) {
              return t(e);
            },
          },
          optional: function (e) {
            var i = this.elementValue(e);
            return (
              !t.validator.methods.required.call(this, i, e) &&
              "dependency-mismatch"
            );
          },
          startRequest: function (t) {
            this.pending[t.name] ||
              (this.pendingRequest++, (this.pending[t.name] = !0));
          },
          stopRequest: function (e, i) {
            this.pendingRequest--,
              0 > this.pendingRequest && (this.pendingRequest = 0),
              delete this.pending[e.name],
              i &&
              0 === this.pendingRequest &&
              this.formSubmitted &&
              this.form()
                ? (t(this.currentForm).submit(), (this.formSubmitted = !1))
                : !i &&
                  0 === this.pendingRequest &&
                  this.formSubmitted &&
                  (t(this.currentForm).triggerHandler("invalid-form", [this]),
                  (this.formSubmitted = !1));
          },
          previousValue: function (e) {
            return (
              t.data(e, "previousValue") ||
              t.data(e, "previousValue", {
                old: null,
                valid: !0,
                message: this.defaultMessage(e, "remote"),
              })
            );
          },
        },
        classRuleSettings: {
          required: { required: !0 },
          email: { email: !0 },
          url: { url: !0 },
          date: { date: !0 },
          dateISO: { dateISO: !0 },
          number: { number: !0 },
          digits: { digits: !0 },
          creditcard: { creditcard: !0 },
        },
        addClassRules: function (e, i) {
          e.constructor === String
            ? (this.classRuleSettings[e] = i)
            : t.extend(this.classRuleSettings, e);
        },
        classRules: function (e) {
          var i = {},
            n = t(e).attr("class");
          return (
            n &&
              t.each(n.split(" "), function () {
                this in t.validator.classRuleSettings &&
                  t.extend(i, t.validator.classRuleSettings[this]);
              }),
            i
          );
        },
        attributeRules: function (e) {
          var i = {},
            n = t(e),
            s = n[0].getAttribute("type");
          for (var o in t.validator.methods) {
            var a;
            "required" === o
              ? ("" === (a = n.get(0).getAttribute(o)) && (a = !0), (a = !!a))
              : (a = n.attr(o)),
              /min|max/.test(o) &&
                (null === s || /number|range|text/.test(s)) &&
                (a = Number(a)),
              a ? (i[o] = a) : s === o && "range" !== s && (i[o] = !0);
          }
          return (
            i.maxlength &&
              /-1|2147483647|524288/.test(i.maxlength) &&
              delete i.maxlength,
            i
          );
        },
        dataRules: function (e) {
          var i,
            n,
            s = {},
            o = t(e);
          for (i in t.validator.methods)
            void 0 !== (n = o.data("rule-" + i.toLowerCase())) && (s[i] = n);
          return s;
        },
        staticRules: function (e) {
          var i = {},
            n = t.data(e.form, "validator");
          return (
            n.settings.rules &&
              (i = t.validator.normalizeRule(n.settings.rules[e.name]) || {}),
            i
          );
        },
        normalizeRules: function (e, i) {
          return (
            t.each(e, function (n, s) {
              if (!1 !== s) {
                if (s.param || s.depends) {
                  var o = !0;
                  switch (typeof s.depends) {
                    case "string":
                      o = !!t(s.depends, i.form).length;
                      break;
                    case "function":
                      o = s.depends.call(i, i);
                  }
                  o ? (e[n] = void 0 === s.param || s.param) : delete e[n];
                }
              } else delete e[n];
            }),
            t.each(e, function (n, s) {
              e[n] = t.isFunction(s) ? s(i) : s;
            }),
            t.each(["minlength", "maxlength"], function () {
              e[this] && (e[this] = Number(e[this]));
            }),
            t.each(["rangelength", "range"], function () {
              var i;
              e[this] &&
                (t.isArray(e[this])
                  ? (e[this] = [Number(e[this][0]), Number(e[this][1])])
                  : "string" == typeof e[this] &&
                    ((i = e[this].split(/[\s,]+/)),
                    (e[this] = [Number(i[0]), Number(i[1])])));
            }),
            t.validator.autoCreateRanges &&
              (e.min &&
                e.max &&
                ((e.range = [e.min, e.max]), delete e.min, delete e.max),
              e.minlength &&
                e.maxlength &&
                ((e.rangelength = [e.minlength, e.maxlength]),
                delete e.minlength,
                delete e.maxlength)),
            e
          );
        },
        normalizeRule: function (e) {
          if ("string" == typeof e) {
            var i = {};
            t.each(e.split(/\s/), function () {
              i[this] = !0;
            }),
              (e = i);
          }
          return e;
        },
        addMethod: function (e, i, n) {
          (t.validator.methods[e] = i),
            (t.validator.messages[e] =
              void 0 !== n ? n : t.validator.messages[e]),
            3 > i.length &&
              t.validator.addClassRules(e, t.validator.normalizeRule(e));
        },
        methods: {
          required: function (e, i, n) {
            if (!this.depend(n, i)) return "dependency-mismatch";
            if ("select" === i.nodeName.toLowerCase()) {
              var s = t(i).val();
              return s && s.length > 0;
            }
            return this.checkable(i)
              ? this.getLength(e, i) > 0
              : t.trim(e).length > 0;
          },
          email: function (t, e) {
            return (
              this.optional(e) ||
              /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(
                t
              )
            );
          },
          url: function (t, e) {
            return (
              this.optional(e) ||
              /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(
                t
              )
            );
          },
          date: function (t, e) {
            return this.optional(e) || !/Invalid|NaN/.test("" + new Date(t));
          },
          dateISO: function (t, e) {
            return (
              this.optional(e) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(t)
            );
          },
          number: function (t, e) {
            return (
              this.optional(e) ||
              /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)
            );
          },
          digits: function (t, e) {
            return this.optional(e) || /^\d+$/.test(t);
          },
          creditcard: function (t, e) {
            if (this.optional(e)) return "dependency-mismatch";
            if (/[^0-9 \-]+/.test(t)) return !1;
            for (
              var i = 0,
                n = 0,
                s = !1,
                o = (t = t.replace(/\D/g, "")).length - 1;
              o >= 0;
              o--
            ) {
              var a = t.charAt(o);
              (n = parseInt(a, 10)),
                s && (n *= 2) > 9 && (n -= 9),
                (i += n),
                (s = !s);
            }
            return 0 == i % 10;
          },
          minlength: function (e, i, n) {
            var s = t.isArray(e) ? e.length : this.getLength(t.trim(e), i);
            return this.optional(i) || s >= n;
          },
          maxlength: function (e, i, n) {
            var s = t.isArray(e) ? e.length : this.getLength(t.trim(e), i);
            return this.optional(i) || n >= s;
          },
          rangelength: function (e, i, n) {
            var s = t.isArray(e) ? e.length : this.getLength(t.trim(e), i);
            return this.optional(i) || (s >= n[0] && n[1] >= s);
          },
          min: function (t, e, i) {
            return this.optional(e) || t >= i;
          },
          max: function (t, e, i) {
            return this.optional(e) || i >= t;
          },
          range: function (t, e, i) {
            return this.optional(e) || (t >= i[0] && i[1] >= t);
          },
          equalTo: function (e, i, n) {
            var s = t(n);
            return (
              this.settings.onfocusout &&
                s
                  .unbind(".validate-equalTo")
                  .bind("blur.validate-equalTo", function () {
                    t(i).valid();
                  }),
              e === s.val()
            );
          },
          remote: function (e, i, n) {
            if (this.optional(i)) return "dependency-mismatch";
            var s = this.previousValue(i);
            if (
              (this.settings.messages[i.name] ||
                (this.settings.messages[i.name] = {}),
              (s.originalMessage = this.settings.messages[i.name].remote),
              (this.settings.messages[i.name].remote = s.message),
              (n = ("string" == typeof n && { url: n }) || n),
              s.old === e)
            )
              return s.valid;
            s.old = e;
            var o = this;
            this.startRequest(i);
            var a = {};
            return (
              (a[i.name] = e),
              t.ajax(
                t.extend(
                  !0,
                  {
                    url: n,
                    mode: "abort",
                    port: "validate" + i.name,
                    dataType: "json",
                    data: a,
                    success: function (n) {
                      o.settings.messages[i.name].remote = s.originalMessage;
                      var a = !0 === n || "true" === n;
                      if (a) {
                        var r = o.formSubmitted;
                        o.prepareElement(i),
                          (o.formSubmitted = r),
                          o.successList.push(i),
                          delete o.invalid[i.name],
                          o.showErrors();
                      } else {
                        var l = {},
                          h = n || o.defaultMessage(i, "remote");
                        (l[i.name] = s.message = t.isFunction(h) ? h(e) : h),
                          (o.invalid[i.name] = !0),
                          o.showErrors(l);
                      }
                      (s.valid = a), o.stopRequest(i, a);
                    },
                  },
                  n
                )
              ),
              "pending"
            );
          },
        },
      }),
      (t.format = t.validator.format);
  })(jQuery),
  (function (t) {
    var e = {};
    if (t.ajaxPrefilter)
      t.ajaxPrefilter(function (t, i, n) {
        var s = t.port;
        "abort" === t.mode && (e[s] && e[s].abort(), (e[s] = n));
      });
    else {
      var i = t.ajax;
      t.ajax = function (n) {
        var s = ("mode" in n ? n : t.ajaxSettings).mode,
          o = ("port" in n ? n : t.ajaxSettings).port;
        return "abort" === s
          ? (e[o] && e[o].abort(), (e[o] = i.apply(this, arguments)), e[o])
          : i.apply(this, arguments);
      };
    }
  })(jQuery),
  (function (t) {
    t.extend(t.fn, {
      validateDelegate: function (e, i, n) {
        return this.bind(i, function (i) {
          var s = t(i.target);
          return s.is(e) ? n.apply(s, arguments) : void 0;
        });
      },
    });
  })(jQuery),
  jQuery(window).load(function () {
    jQuery(".status").fadeOut(),
      jQuery(".preloader").delay(1e3).fadeOut("slow");
  }),
  $(".video-container").fitVids(),
  $(document).ready(function () {
    $(".main-navigation").onePageNav({
      scrollThreshold: 0.2,
      filter: ":not(.external)",
      changeHash: !0,
    });
  }),
  matchMedia("(max-width: 480px)").matches &&
    $(".main-navigation a").on("click", function () {
      $(".navbar-toggle").click();
    }),
  $(document).ready(function () {
    mainNav();
  }),
  $(window).scroll(function () {
    mainNav();
  }),
  matchMedia("(min-width: 992px), (max-width: 767px)").matches)
)
  function mainNav() {
    ((document.documentElement && document.documentElement.scrollTop) ||
      document.body.scrollTop) > 40
      ? $(".sticky-navigation").stop().animate({ top: "0" })
      : $(".sticky-navigation").stop().animate({ top: "-60" });
  }
if (matchMedia("(min-width: 768px) and (max-width: 991px)").matches)
  function mainNav() {
    ((document.documentElement && document.documentElement.scrollTop) ||
      document.body.scrollTop) > 40
      ? $(".sticky-navigation").stop().animate({ top: "0" })
      : $(".sticky-navigation").stop().animate({ top: "-120" });
  }
function alturaMaxima() {
  var t = $(window).height();
  $(".full-screen").css("min-height", t);
}
jQuery(function (t) {
  t("#download-button").localScroll({ duration: 1e3 });
}),
  $(document).ready(function () {
    alturaMaxima(), $(window).bind("resize", alturaMaxima);
  });
var scrollAnimationTime = 1200,
  scrollAnimation = "easeInOutExpo";
if (
  ($("a.scrollto").bind("click.smoothscroll", function (t) {
    t.preventDefault();
    var e = this.hash;
    $("html, body")
      .stop()
      .animate(
        { scrollTop: $(e).offset().top },
        scrollAnimationTime,
        scrollAnimation,
        function () {
          window.location.hash = e;
        }
      );
  }),
  (wow = new WOW({ mobile: !1 })),
  wow.init(),
  $(document).ready(function () {
    $("#feedbacks").owlCarousel({
      navigation: !1,
      slideSpeed: 800,
      paginationSpeed: 400,
      autoPlay: 5e3,
      singleItem: !0,
    }),
      $("#screenshots").owlCarousel({
        items: 4,
        itemsDesktop: [1e3, 4],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: !1,
      }),
      $("#business-card").owlCarousel({
        items: 2,
        itemsDesktop: [1e3, 2],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        autoPlay: !0,
        itemsMobile: !1,
      }),
      $("#ala-carte-menu").owlCarousel({
        items: 1,
        itemsDesktop: [1e3, 1],
        itemsDesktopSmall: [900, 1],
        itemsTablet: [600, 1],
        autoPlay: !0,
        itemsMobile: !1,
      });
  }),
  $(document).ready(function () {
    $("#screenshots a").nivoLightbox({ effect: "fadeScale" });
  }),
  $("#subscribe").submit(function (t) {
    t.preventDefault();
    var e,
      i = $("#subscriber-email").val(),
      n = "email=" + i;
    return (
      (e = i),
      new RegExp(
        /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i
      ).test(e)
        ? $.ajax({
            type: "POST",
            url: "subscribe/subscribe.php",
            data: n,
            success: function () {
              $(".subscription-success").fadeIn(1e3),
                $(".subscription-error").fadeOut(500),
                $(".hide-after").fadeOut(500);
            },
          })
        : $(".subscription-error").fadeIn(1e3),
      !1
    );
  }),
  $("#contact").submit(function (t) {
    t.preventDefault();
    var e,
      i = $("#name").val(),
      n = $("#email").val(),
      s = $("#subject").val(),
      o = $("#message").val(),
      a = "name=" + i + "&email=" + n + "&subject=" + s + "&message=" + o;
    return (
      (e = n),
      new RegExp(
        /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i
      ).test(e) &&
      o.length > 1 &&
      i.length > 1
        ? $.ajax({
            type: "POST",
            url: "sendmail.php",
            data: a,
            success: function () {
              $(".success").fadeIn(1e3), $(".error").fadeOut(500);
            },
          })
        : ($(".error").fadeIn(1e3), $(".success").fadeOut(500)),
      !1
    );
  }),
  $(".expand-form").simpleexpand({ defaultTarget: ".expanded-contact-form" }),
  $(window).stellar({ horizontalScrolling: !1 }),
  navigator.userAgent.match(/IEMobile\/10\.0/))
) {
  var msViewportStyle = document.createElement("style");
  msViewportStyle.appendChild(
    document.createTextNode("@-ms-viewport{width:auto!important}")
  ),
    document.querySelector("head").appendChild(msViewportStyle);
}
function subscribe(t) {
  t.preventDefault();
  var e,
    i = document.getElementById("subscription_email").value;
  /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/.test(i)
    ? ((document.getElementById("return_msg").innerHTML =
        "<img src='https://www.chefonline.com/printmedia/images/loader.gif' height='16' width='16'>"),
      ((e = window.XMLHttpRequest
        ? new XMLHttpRequest()
        : new ActiveXObject("Microsoft.XMLHTTP")).onreadystatechange =
        function () {
          4 == e.readyState &&
            200 == e.status &&
            (1 == e.responseText
              ? (document.getElementById("return_msg").innerHTML =
                  "You are successfully subscribed.")
              : 2 == e.responseText
              ? (document.getElementById("return_msg").innerHTML =
                  "Your email already in subscription list.")
              : (document.getElementById("return_msg").innerHTML =
                  "Subscription Failed. Please Try Later"),
            (document.getElementById("subscription_email").value = ""));
        }),
      e.open("POST", "subscribe.php", !0),
      e.setRequestHeader("Content-type", "application/x-www-form-urlencoded"),
      e.send("email=" + i))
    : (document.getElementById("return_msg").innerHTML =
        "Invalid E-mail Address");
}
jQuery(".gsm-btn, .gsm-close").click(function () {
  jQuery(".gsm").slideToggle("slow");
}),
  jQuery(".paperfinish-btn, .paperfinish-close").click(function () {
    jQuery(".paperfinish").slideToggle("slow");
  }),
  jQuery(".lamination-btn, .lamination-close").click(function () {
    jQuery(".lamination").slideToggle("slow");
  }),
  $(document).ready(function () {
    $("#form1").validate({
      rules: { email2: { required: !0, email: !0 } },
      messages: { email2: "Please enter a valid email address." },
      submitHandler: function () {
        $("#successmsg").show(),
          $("#form1")[0].reset(),
          setTimeout(function () {
            $("#successmsg").hide();
          }, 5e3);
      },
    });
  }),
  $(".product-image-thumbs").owlCarousel({
    loop: !0,
    autoplay: !1,
    items: 4,
    pagination: !1,
    navigation: !0,
    autoplayHoverPause: !0,
    animateOut: "slideOutUp",
    animateIn: "slideInUp",
    navigationText: [
      '<i class="glyphicon glyphicon-chevron-left"></i>',
      '<i class="glyphicon glyphicon-chevron-right"></i>',
    ],
  }),
  jQuery(".product-image-thumbs img").on("click", function () {
    var t = jQuery(this).attr("src");
    jQuery(".rk").html(
      '<img class="img-responsive animated bounceIn" src="' + t + '">'
    ),
      jQuery(".rk img").magnify();
  });
