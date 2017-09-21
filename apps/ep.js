<!DOCTYPE html>
<html class=' pp' lang='en'>

<head>
    <meta charset='utf-8'>
    <meta content='IE=Edge,chrome=1' http-equiv='X-UA-Compatible'>
    <!----
        <script type="text/javascript">
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "10c1d33cbe",
            "applicationID": "4041489",
            "transactionName": "d1gKQUdeW1QAFh0UXFNeF0FHUENRCgpBSVxQXhA=",
            "queueTime": 23,
            "applicationTime": 81,
            "agent": ""
        }
    </script>
        
    ---->    
    <script type="text/javascript">
        (window.NREUM || (NREUM = {})).loader_config = {
            xpid: "VwEFUlRVGwcAUFBWDwg="
        };
        window.NREUM || (NREUM = {}), __nr_require = function(t, e, n) {
            function r(n) {
                if (!e[n]) {
                    var o = e[n] = {
                        exports: {}
                    };
                    t[n][0].call(o.exports, function(e) {
                        var o = t[n][1][e];
                        return r(o || e)
                    }, o, o.exports)
                }
                return e[n].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < n.length; o++) r(n[o]);
            return r
        }({
            1: [function(t, e, n) {
                function r(t) {
                    try {
                        c.console && console.log(t)
                    } catch (e) {}
                }
                var o, i = t("ee"),
                    a = t(19),
                    c = {};
                try {
                    o = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (c.console = !0, o.indexOf("dev") !== -1 && (c.dev = !0), o.indexOf("nr_dev") !== -1 && (c.nrDev = !0))
                } catch (s) {}
                c.nrDev && i.on("internal-error", function(t) {
                    r(t.stack)
                }), c.dev && i.on("fn-err", function(t, e, n) {
                    r(n.stack)
                }), c.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(c, function(t, e) {
                    return t
                }).join(", ")))
            }, {}],
            2: [function(t, e, n) {
                function r(t, e, n, r, o) {
                    try {
                        d ? d -= 1 : i("err", [o || new UncaughtException(t, e, n)])
                    } catch (c) {
                        try {
                            i("ierr", [c, s.now(), !0])
                        } catch (u) {}
                    }
                    return "function" == typeof f && f.apply(this, a(arguments))
                }

                function UncaughtException(t, e, n) {
                    this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
                }

                function o(t) {
                    i("err", [t, s.now()])
                }
                var i = t("handle"),
                    a = t(20),
                    c = t("ee"),
                    s = t("loader"),
                    f = window.onerror,
                    u = !1,
                    d = 0;
                s.features.err = !0, t(1), window.onerror = r;
                try {
                    throw new Error
                } catch (p) {
                    "stack" in p && (t(12), t(11), "addEventListener" in window && t(6), s.xhrWrappable && t(13), u = !0)
                }
                c.on("fn-start", function(t, e, n) {
                    u && (d += 1)
                }), c.on("fn-err", function(t, e, n) {
                    u && (this.thrown = !0, o(n))
                }), c.on("fn-end", function() {
                    u && !this.thrown && d > 0 && (d -= 1)
                }), c.on("internal-error", function(t) {
                    i("ierr", [t, s.now(), !0])
                })
            }, {}],
            3: [function(t, e, n) {
                t("loader").features.ins = !0
            }, {}],
            4: [function(t, e, n) {
                function r() {
                    C++, N = y.hash, this[u] = M.now()
                }

                function o() {
                    C--, y.hash !== N && i(0, !0);
                    var t = M.now();
                    this[l] = ~~this[l] + t - this[u], this[d] = t
                }

                function i(t, e) {
                    x.emit("newURL", ["" + y, e])
                }

                function a(t, e) {
                    t.on(e, function() {
                        this[e] = M.now()
                    })
                }
                var c = "-start",
                    s = "-end",
                    f = "-body",
                    u = "fn" + c,
                    d = "fn" + s,
                    p = "cb" + c,
                    h = "cb" + s,
                    l = "jsTime",
                    m = "fetch",
                    v = "addEventListener",
                    w = window,
                    y = w.location;
                if (w[v]) {
                    var b = t(9),
                        g = t(10),
                        x = t(8),
                        E = t(6),
                        O = t(12),
                        R = t(7),
                        P = t(13),
                        T = t("ee"),
                        S = T.get("tracer");
                    t(14);
                    var M = t("loader");
                    M.features.spa = !0;
                    var N, j = w[v],
                        C = 0;
                    T.on(u, r), T.on(p, r), T.on(d, o), T.on(h, o), T.buffer([u, d, "xhr-done", "xhr-resolved"]), E.buffer([u]), O.buffer(["setTimeout" + s, "clearTimeout" + c, u]), P.buffer([u, "new-xhr", "send-xhr" + c]), R.buffer([m + c, m + "-done", m + f + c, m + f + s]), x.buffer(["newURL"]), b.buffer([u]), g.buffer(["propagate", p, h, "executor-err", "resolve" + c]), S.buffer([u, "no-" + u]), a(P, "send-xhr" + c), a(T, "xhr-resolved"), a(T, "xhr-done"), a(R, m + c), a(R, m + "-done"), x.on("pushState-end", i), x.on("replaceState-end", i), j("hashchange", i, !0), j("load", i, !0), j("popstate", function() {
                        i(0, C > 1)
                    }, !0)
                }
            }, {}],
            5: [function(t, e, n) {
                function r(t) {}
                if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                    var o = t("ee"),
                        i = t("handle"),
                        a = t(12),
                        c = t(11),
                        s = "learResourceTimings",
                        f = "addEventListener",
                        u = "resourcetimingbufferfull",
                        d = "bstResource",
                        p = "resource",
                        h = "-start",
                        l = "-end",
                        m = "fn" + h,
                        v = "fn" + l,
                        w = "bstTimer",
                        y = "pushState",
                        b = t("loader");
                    b.features.stn = !0, t(8);
                    var g = NREUM.o.EV;
                    o.on(m, function(t, e) {
                        var n = t[0];
                        n instanceof g && (this.bstStart = b.now())
                    }), o.on(v, function(t, e) {
                        var n = t[0];
                        n instanceof g && i("bst", [n, e, this.bstStart, b.now()])
                    }), a.on(m, function(t, e, n) {
                        this.bstStart = b.now(), this.bstType = n
                    }), a.on(v, function(t, e) {
                        i(w, [e, this.bstStart, b.now(), this.bstType])
                    }), c.on(m, function() {
                        this.bstStart = b.now()
                    }), c.on(v, function(t, e) {
                        i(w, [e, this.bstStart, b.now(), "requestAnimationFrame"])
                    }), o.on(y + h, function(t) {
                        this.time = b.now(), this.startPath = location.pathname + location.hash
                    }), o.on(y + l, function(t) {
                        i("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                    }), f in window.performance && (window.performance["c" + s] ? window.performance[f](u, function(t) {
                        i(d, [window.performance.getEntriesByType(p)]), window.performance["c" + s]()
                    }, !1) : window.performance[f]("webkit" + u, function(t) {
                        i(d, [window.performance.getEntriesByType(p)]), window.performance["webkitC" + s]()
                    }, !1)), document[f]("scroll", r, {
                        passive: !0
                    }), document[f]("keypress", r, !1), document[f]("click", r, !1)
                }
            }, {}],
            6: [function(t, e, n) {
                function r(t) {
                    for (var e = t; e && !e.hasOwnProperty(u);) e = Object.getPrototypeOf(e);
                    e && o(e)
                }

                function o(t) {
                    c.inPlace(t, [u, d], "-", i)
                }

                function i(t, e) {
                    return t[1]
                }
                var a = t("ee").get("events"),
                    c = t(22)(a, !0),
                    s = t("gos"),
                    f = XMLHttpRequest,
                    u = "addEventListener",
                    d = "removeEventListener";
                e.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f.prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start", function(t, e) {
                    var n = t[1],
                        r = s(n, "nr@wrapped", function() {
                            function t() {
                                if ("function" == typeof n.handleEvent) return n.handleEvent.apply(n, arguments)
                            }
                            var e = {
                                object: t,
                                "function": n
                            }[typeof n];
                            return e ? c(e, "fn-", null, e.name || "anonymous") : n
                        });
                    this.wrapped = t[1] = r
                }), a.on(d + "-start", function(t) {
                    t[1] = this.wrapped || t[1]
                })
            }, {}],
            7: [function(t, e, n) {
                function r(t, e, n) {
                    var r = t[e];
                    "function" == typeof r && (t[e] = function() {
                        var t = r.apply(this, arguments);
                        return o.emit(n + "start", arguments, t), t.then(function(e) {
                            return o.emit(n + "end", [null, e], t), e
                        }, function(e) {
                            throw o.emit(n + "end", [e], t), e
                        })
                    })
                }
                var o = t("ee").get("fetch"),
                    i = t(19);
                e.exports = o;
                var a = window,
                    c = "fetch-",
                    s = c + "body-",
                    f = ["arrayBuffer", "blob", "json", "text", "formData"],
                    u = a.Request,
                    d = a.Response,
                    p = a.fetch,
                    h = "prototype";
                u && d && p && (i(f, function(t, e) {
                    r(u[h], e, s), r(d[h], e, s)
                }), r(a, "fetch", c), o.on(c + "end", function(t, e) {
                    var n = this;
                    e ? e.clone().arrayBuffer().then(function(t) {
                        n.rxSize = t.byteLength, o.emit(c + "done", [null, e], n)
                    }) : o.emit(c + "done", [t], n)
                }))
            }, {}],
            8: [function(t, e, n) {
                var r = t("ee").get("history"),
                    o = t(22)(r);
                e.exports = r, o.inPlace(window.history, ["pushState", "replaceState"], "-")
            }, {}],
            9: [function(t, e, n) {
                var r = t("ee").get("mutation"),
                    o = t(22)(r),
                    i = NREUM.o.MO;
                e.exports = r, i && (window.MutationObserver = function(t) {
                    return this instanceof i ? new i(o(t, "fn-")) : i.apply(this, arguments)
                }, MutationObserver.prototype = i.prototype)
            }, {}],
            10: [function(t, e, n) {
                function r(t) {
                    var e = a.context(),
                        n = c(t, "executor-", e),
                        r = new f(n);
                    return a.context(r).getCtx = function() {
                        return e
                    }, a.emit("new-promise", [r, e], e), r
                }

                function o(t, e) {
                    return e
                }
                var i = t(22),
                    a = t("ee").get("promise"),
                    c = i(a),
                    s = t(19),
                    f = NREUM.o.PR;
                e.exports = a, f && (window.Promise = r, ["all", "race"].forEach(function(t) {
                    var e = f[t];
                    f[t] = function(n) {
                        function r(t) {
                            return function() {
                                a.emit("propagate", [null, !o], i), o = o || !t
                            }
                        }
                        var o = !1;
                        s(n, function(e, n) {
                            Promise.resolve(n).then(r("all" === t), r(!1))
                        });
                        var i = e.apply(f, arguments),
                            c = f.resolve(i);
                        return c
                    }
                }), ["resolve", "reject"].forEach(function(t) {
                    var e = f[t];
                    f[t] = function(t) {
                        var n = e.apply(f, arguments);
                        return t !== n && a.emit("propagate", [t, !0], n), n
                    }
                }), f.prototype["catch"] = function(t) {
                    return this.then(null, t)
                }, f.prototype = Object.create(f.prototype, {
                    constructor: {
                        value: r
                    }
                }), s(Object.getOwnPropertyNames(f), function(t, e) {
                    try {
                        r[e] = f[e]
                    } catch (n) {}
                }), a.on("executor-start", function(t) {
                    t[0] = c(t[0], "resolve-", this), t[1] = c(t[1], "resolve-", this)
                }), a.on("executor-err", function(t, e, n) {
                    t[1](n)
                }), c.inPlace(f.prototype, ["then"], "then-", o), a.on("then-start", function(t, e) {
                    this.promise = e, t[0] = c(t[0], "cb-", this), t[1] = c(t[1], "cb-", this)
                }), a.on("then-end", function(t, e, n) {
                    this.nextPromise = n;
                    var r = this.promise;
                    a.emit("propagate", [r, !0], n)
                }), a.on("cb-end", function(t, e, n) {
                    a.emit("propagate", [n, !0], this.nextPromise)
                }), a.on("propagate", function(t, e, n) {
                    this.getCtx && !e || (this.getCtx = function() {
                        if (t instanceof Promise) var e = a.context(t);
                        return e && e.getCtx ? e.getCtx() : this
                    })
                }), r.toString = function() {
                    return "" + f
                })
            }, {}],
            11: [function(t, e, n) {
                var r = t("ee").get("raf"),
                    o = t(22)(r),
                    i = "equestAnimationFrame";
                e.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i], "raf-"), r.on("raf-start", function(t) {
                    t[0] = o(t[0], "fn-")
                })
            }, {}],
            12: [function(t, e, n) {
                function r(t, e, n) {
                    t[0] = a(t[0], "fn-", null, n)
                }

                function o(t, e, n) {
                    this.method = n, this.timerDuration = "number" == typeof t[1] ? t[1] : 0, t[0] = a(t[0], "fn-", this, n)
                }
                var i = t("ee").get("timer"),
                    a = t(22)(i),
                    c = "setTimeout",
                    s = "setInterval",
                    f = "clearTimeout",
                    u = "-start",
                    d = "-";
                e.exports = i, a.inPlace(window, [c, "setImmediate"], c + d), a.inPlace(window, [s], s + d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(s + u, r), i.on(c + u, o)
            }, {}],
            13: [function(t, e, n) {
                function r(t, e) {
                    d.inPlace(e, ["onreadystatechange"], "fn-", c)
                }

                function o() {
                    var t = this,
                        e = u.context(t);
                    t.readyState > 3 && !e.resolved && (e.resolved = !0, u.emit("xhr-resolved", [], t)), d.inPlace(t, v, "fn-", c)
                }

                function i(t) {
                    w.push(t), l && (b = -b, g.data = b)
                }

                function a() {
                    for (var t = 0; t < w.length; t++) r([], w[t]);
                    w.length && (w = [])
                }

                function c(t, e) {
                    return e
                }

                function s(t, e) {
                    for (var n in t) e[n] = t[n];
                    return e
                }
                t(6);
                var f = t("ee"),
                    u = f.get("xhr"),
                    d = t(22)(u),
                    p = NREUM.o,
                    h = p.XHR,
                    l = p.MO,
                    m = "readystatechange",
                    v = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"],
                    w = [];
                e.exports = u;
                var y = window.XMLHttpRequest = function(t) {
                    var e = new h(t);
                    try {
                        u.emit("new-xhr", [e], e), e.addEventListener(m, o, !1)
                    } catch (n) {
                        try {
                            u.emit("internal-error", [n])
                        } catch (r) {}
                    }
                    return e
                };
                if (s(h, y), y.prototype = h.prototype, d.inPlace(y.prototype, ["open", "send"], "-xhr-", c), u.on("send-xhr-start", function(t, e) {
                        r(t, e), i(e)
                    }), u.on("open-xhr-start", r), l) {
                    var b = 1,
                        g = document.createTextNode(b);
                    new l(a).observe(g, {
                        characterData: !0
                    })
                } else f.on("fn-end", function(t) {
                    t[0] && t[0].type === m || a()
                })
            }, {}],
            14: [function(t, e, n) {
                function r(t) {
                    var e = this.params,
                        n = this.metrics;
                    if (!this.ended) {
                        this.ended = !0;
                        for (var r = 0; r < d; r++) t.removeEventListener(u[r], this.listener, !1);
                        if (!e.aborted) {
                            if (n.duration = a.now() - this.startTime, 4 === t.readyState) {
                                e.status = t.status;
                                var i = o(t, this.lastSize);
                                if (i && (n.rxSize = i), this.sameOrigin) {
                                    var s = t.getResponseHeader("X-NewRelic-App-Data");
                                    s && (e.cat = s.split(", ").pop())
                                }
                            } else e.status = 0;
                            n.cbTime = this.cbTime, f.emit("xhr-done", [t], t), c("xhr", [e, n, this.startTime])
                        }
                    }
                }

                function o(t, e) {
                    var n = t.responseType;
                    if ("json" === n && null !== e) return e;
                    var r = "arraybuffer" === n || "blob" === n || "json" === n ? t.response : t.responseText;
                    return l(r)
                }

                function i(t, e) {
                    var n = s(e),
                        r = t.params;
                    r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.sameOrigin = n.sameOrigin
                }
                var a = t("loader");
                if (a.xhrWrappable) {
                    var c = t("handle"),
                        s = t(15),
                        f = t("ee"),
                        u = ["load", "error", "abort", "timeout"],
                        d = u.length,
                        p = t("id"),
                        h = t(18),
                        l = t(17),
                        m = window.XMLHttpRequest;
                    a.features.xhr = !0, t(13), f.on("new-xhr", function(t) {
                        var e = this;
                        e.totalCbs = 0, e.called = 0, e.cbTime = 0, e.end = r, e.ended = !1, e.xhrGuids = {}, e.lastSize = null, h && (h > 34 || h < 10) || window.opera || t.addEventListener("progress", function(t) {
                            e.lastSize = t.loaded
                        }, !1)
                    }), f.on("open-xhr-start", function(t) {
                        this.params = {
                            method: t[0]
                        }, i(this, t[1]), this.metrics = {}
                    }), f.on("open-xhr-end", function(t, e) {
                        "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
                    }), f.on("send-xhr-start", function(t, e) {
                        var n = this.metrics,
                            r = t[0],
                            o = this;
                        if (n && r) {
                            var i = l(r);
                            i && (n.txSize = i)
                        }
                        this.startTime = a.now(), this.listener = function(t) {
                            try {
                                "abort" === t.type && (o.params.aborted = !0), ("load" !== t.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof e.onload)) && o.end(e)
                            } catch (n) {
                                try {
                                    f.emit("internal-error", [n])
                                } catch (r) {}
                            }
                        };
                        for (var c = 0; c < d; c++) e.addEventListener(u[c], this.listener, !1)
                    }), f.on("xhr-cb-time", function(t, e, n) {
                        this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
                    }), f.on("xhr-load-added", function(t, e) {
                        var n = "" + p(t) + !!e;
                        this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
                    }), f.on("xhr-load-removed", function(t, e) {
                        var n = "" + p(t) + !!e;
                        this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this.totalCbs -= 1)
                    }), f.on("addEventListener-end", function(t, e) {
                        e instanceof m && "load" === t[0] && f.emit("xhr-load-added", [t[1], t[2]], e)
                    }), f.on("removeEventListener-end", function(t, e) {
                        e instanceof m && "load" === t[0] && f.emit("xhr-load-removed", [t[1], t[2]], e)
                    }), f.on("fn-start", function(t, e, n) {
                        e instanceof m && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = a.now()))
                    }), f.on("fn-end", function(t, e) {
                        this.xhrCbStart && f.emit("xhr-cb-time", [a.now() - this.xhrCbStart, this.onload, e], e)
                    })
                }
            }, {}],
            15: [function(t, e, n) {
                e.exports = function(t) {
                    var e = document.createElement("a"),
                        n = window.location,
                        r = {};
                    e.href = t, r.port = e.port;
                    var o = e.href.split("://");
                    !r.port && o[1] && (r.port = o[1].split("/")[0].split("@").pop().split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = e.hostname || n.hostname, r.pathname = e.pathname, r.protocol = o[0], "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname);
                    var i = !e.protocol || ":" === e.protocol || e.protocol === n.protocol,
                        a = e.hostname === document.domain && e.port === n.port;
                    return r.sameOrigin = i && (!e.hostname || a), r
                }
            }, {}],
            16: [function(t, e, n) {
                function r() {}

                function o(t, e, n) {
                    return function() {
                        return i(t, [f.now()].concat(c(arguments)), e ? null : this, n), e ? void 0 : this
                    }
                }
                var i = t("handle"),
                    a = t(19),
                    c = t(20),
                    s = t("ee").get("tracer"),
                    f = t("loader"),
                    u = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = u);
                var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    p = "api-",
                    h = p + "ixn-";
                a(d, function(t, e) {
                    u[e] = o(p + e, !0, "api")
                }), u.addPageAction = o(p + "addPageAction", !0), u.setCurrentRouteName = o(p + "routeName", !0), e.exports = newrelic, u.interaction = function() {
                    return (new r).get()
                };
                var l = r.prototype = {
                    createTracer: function(t, e) {
                        var n = {},
                            r = this,
                            o = "function" == typeof e;
                        return i(h + "tracer", [f.now(), t, n], r),
                            function() {
                                if (s.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try {
                                    return e.apply(this, arguments)
                                } finally {
                                    s.emit("fn-end", [f.now()], n)
                                }
                            }
                    }
                };
                a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(t, e) {
                    l[e] = o(h + e)
                }), newrelic.noticeError = function(t) {
                    "string" == typeof t && (t = new Error(t)), i("err", [t, f.now()])
                }
            }, {}],
            17: [function(t, e, n) {
                e.exports = function(t) {
                    if ("string" == typeof t && t.length) return t.length;
                    if ("object" == typeof t) {
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
                        if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                            return JSON.stringify(t).length
                        } catch (e) {
                            return
                        }
                    }
                }
            }, {}],
            18: [function(t, e, n) {
                var r = 0,
                    o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                o && (r = +o[1]), e.exports = r
            }, {}],
            19: [function(t, e, n) {
                function r(t, e) {
                    var n = [],
                        r = "",
                        i = 0;
                    for (r in t) o.call(t, r) && (n[i] = e(r, t[r]), i += 1);
                    return n
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            20: [function(t, e, n) {
                function r(t, e, n) {
                    e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                    for (var r = -1, o = n - e || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[e + r];
                    return i
                }
                e.exports = r
            }, {}],
            21: [function(t, e, n) {
                e.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            22: [function(t, e, n) {
                function r(t) {
                    return !(t && t instanceof Function && t.apply && !t[a])
                }
                var o = t("ee"),
                    i = t(20),
                    a = "nr@original",
                    c = Object.prototype.hasOwnProperty,
                    s = !1;
                e.exports = function(t, e) {
                    function n(t, e, n, o) {
                        function nrWrapper() {
                            var r, a, c, s;
                            try {
                                a = this, r = i(arguments), c = "function" == typeof n ? n(r, a) : n || {}
                            } catch (f) {
                                p([f, "", [r, a, o], c])
                            }
                            u(e + "start", [r, a, o], c);
                            try {
                                return s = t.apply(a, r)
                            } catch (d) {
                                throw u(e + "err", [r, a, d], c), d
                            } finally {
                                u(e + "end", [r, a, s], c)
                            }
                        }
                        return r(t) ? t : (e || (e = ""), nrWrapper[a] = t, d(t, nrWrapper), nrWrapper)
                    }

                    function f(t, e, o, i) {
                        o || (o = "");
                        var a, c, s, f = "-" === o.charAt(0);
                        for (s = 0; s < e.length; s++) c = e[s], a = t[c], r(a) || (t[c] = n(a, f ? c + o : o, i, c))
                    }

                    function u(n, r, o) {
                        if (!s || e) {
                            var i = s;
                            s = !0;
                            try {
                                t.emit(n, r, o, e)
                            } catch (a) {
                                p([a, n, r, o])
                            }
                            s = i
                        }
                    }

                    function d(t, e) {
                        if (Object.defineProperty && Object.keys) try {
                            var n = Object.keys(t);
                            return n.forEach(function(n) {
                                Object.defineProperty(e, n, {
                                    get: function() {
                                        return t[n]
                                    },
                                    set: function(e) {
                                        return t[n] = e, e
                                    }
                                })
                            }), e
                        } catch (r) {
                            p([r])
                        }
                        for (var o in t) c.call(t, o) && (e[o] = t[o]);
                        return e
                    }

                    function p(e) {
                        try {
                            t.emit("internal-error", e)
                        } catch (n) {}
                    }
                    return t || (t = o), n.inPlace = f, n.flag = a, n
                }
            }, {}],
            ee: [function(t, e, n) {
                function r() {}

                function o(t) {
                    function e(t) {
                        return t && t instanceof r ? t : t ? s(t, c, i) : i()
                    }

                    function n(n, r, o, i) {
                        if (!p.aborted || i) {
                            t && t(n, r, o);
                            for (var a = e(o), c = l(n), s = c.length, f = 0; f < s; f++) c[f].apply(a, r);
                            var d = u[y[n]];
                            return d && d.push([b, n, r, a]), a
                        }
                    }

                    function h(t, e) {
                        w[t] = l(t).concat(e)
                    }

                    function l(t) {
                        return w[t] || []
                    }

                    function m(t) {
                        return d[t] = d[t] || o(n)
                    }

                    function v(t, e) {
                        f(t, function(t, n) {
                            e = e || "feature", y[n] = e, e in u || (u[e] = [])
                        })
                    }
                    var w = {},
                        y = {},
                        b = {
                            on: h,
                            emit: n,
                            get: m,
                            listeners: l,
                            context: e,
                            buffer: v,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (u.api || u.feature) && (p.aborted = !0, u = p.backlog = {})
                }
                var c = "nr@context",
                    s = t("gos"),
                    f = t(19),
                    u = {},
                    d = {},
                    p = e.exports = o();
                p.backlog = u
            }, {}],
            gos: [function(t, e, n) {
                function r(t, e, n) {
                    if (o.call(t, e)) return t[e];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, e, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return t[e] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            handle: [function(t, e, n) {
                function r(t, e, n, r) {
                    o.buffer([t], r), o.emit(t, e, n)
                }
                var o = t("ee").get("handle");
                e.exports = r, r.ee = o
            }, {}],
            id: [function(t, e, n) {
                function r(t) {
                    var e = typeof t;
                    return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = t("gos");
                e.exports = r
            }, {}],
            loader: [function(t, e, n) {
                function r() {
                    if (!x++) {
                        var t = g.info = NREUM.info,
                            e = p.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && e)) return u.abort();
                        f(y, function(e, n) {
                            t[e] || (t[e] = n)
                        }), s("mark", ["onload", a() + g.offset], null, "api");
                        var n = p.createElement("script");
                        n.src = "https://" + t.agent, e.parentNode.insertBefore(n, e)
                    }
                }

                function o() {
                    "complete" === p.readyState && i()
                }

                function i() {
                    s("mark", ["domContent", a() + g.offset], null, "api")
                }

                function a() {
                    return E.exists && performance.now ? Math.round(performance.now()) : (c = Math.max((new Date).getTime(), c)) - g.offset
                }
                var c = (new Date).getTime(),
                    s = t("handle"),
                    f = t(19),
                    u = t("ee"),
                    d = window,
                    p = d.document,
                    h = "addEventListener",
                    l = "attachEvent",
                    m = d.XMLHttpRequest,
                    v = m && m.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    CT: clearTimeout,
                    XHR: m,
                    REQ: d.Request,
                    EV: d.Event,
                    PR: d.Promise,
                    MO: d.MutationObserver
                };
                var w = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-spa-1026.min.js"
                    },
                    b = m && v && v[h] && !/CriOS/.test(navigator.userAgent),
                    g = e.exports = {
                        offset: c,
                        now: a,
                        origin: w,
                        features: {},
                        xhrWrappable: b
                    };
                t(16), p[h] ? (p[h]("DOMContentLoaded", i, !1), d[h]("load", r, !1)) : (p[l]("onreadystatechange", o), d[l]("onload", r)), s("mark", ["firstbyte", c], null, "api");
                var x = 0,
                    E = t(21)
            }, {}]
        }, {}, ["loader", 2, 14, 5, 3, 4]);
    </script>
    <title>ProductPlan</title>
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="iaWQPjtjK3+mtJffXlDWe7hZuDhVLHIu4TkIxjyddSppsyo4S8K2PHo56ClW3+h60I32ML0LqCtlrtWU4kiu9Q==" />

    <link rel="stylesheet" media="all" href="https://assets0.productplan.com/assets/application-0fbdc17e3f9f3ce8c309a48e9d64b9f9e07ea1b67ed588adcf5557d1e5a8fdb3.css" />
    <link rel="shortcut icon" type="image/x-icon" href="https://assets0.productplan.com/assets/favicon-ad9ab65e552a23afddc9a34a4fddb448f79362ab05cef1475c0b794327ba7377.ico" />
    <script>
        window.ppVersion = 'v2.2.0-build76';
        window.current_user = {
            "id": 68339,
            "email": "rencherga@ldschurch.org",
            "preferences": {
                "tab": {
                    "158115": "roadmap",
                    "96780": "roadmap",
                    "121069": "roadmap",
                    "106160": "roadmap",
                    "100799": "roadmap",
                    "158473": "roadmap",
                    "162738": "roadmap",
                    "164184": "roadmap"
                },
                "bar_details_mode": "edit"
            },
            "features": {
                "jira_sync": true,
                "jira_proxy": true,
                "password_complexity": false,
                "roadmap_tag_manager": true,
                "enterprise_tag_manager": true,
                "overlap_prevention_resize": true,
                "enterprise_tag_manager_sharing": true,
                "cleanup_label_positions": false,
                "jira_import_tab": true,
                "notifications_settings_tab": false,
                "manage_team_tab": false,
                "api": false,
                "oauth": false,
                "pivotal_integration": false,
                "master_plan_view_filters": false,
                "bar_sync_from_links": true
            },
            "jira_url": null,
            "can_attach_jira_issue": false,
            "jira_authentication_enabled": false,
            "name": "George Rencher",
            "is_enterprise": false,
            "account_id": 39650,
            "is_on_team": true,
            "email_notification_setting": {
                "comment": 10,
                "roadmap_diff": 2
            }
        };
        dataLayer = [{
            'User Status': 'Subscriber'
        }];
    </script>
</head>

<body data-action='edit' data-controller='registrationsController'>
    <!-- Google Tag Manager -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-56MDRJ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        dataLayer.push({
            'userId': '68339'
        });
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-56MDRJ');
    </script>
    <!-- End Google Tag Manager -->

    <nav class='navbar navbar-fixed-top navbar-default'>
        <div class='container-fluid'>
            <div class='navbar-header company-name'>
                <a class='navbar-brand' href='/' id='brand'>COPB</a>
            </div>
            <ul class='nav navbar-nav navbar-right user_menu'>
                <li><a id="roadmaps_header_link" title="Create or view other roadmaps" href="https://app.productplan.com/roadmaps">Roadmaps</a>
                </li>
                <li class='notifications'></li>
                <li class='dropdown'>
                    <a class='dropdown-toggle pull-right' data-toggle='dropdown' href='#' id='user_menu'>
rencherga@ldschurch.org
<i class='fa fa-caret-down'></i>
<ul class='dropdown-menu'>
<li><a id="your_settings" href="/user_settings/profile">Your Settings</a>
                </li>
                <li>
                    <a id="billing" href="/manage_subscription/overview">Account Settings</a>
                </li>
                <li><a id="integrations" href="https://app.productplan.com/integrations">Integrations</a>
                </li>
                <li><a id="sign_out" rel="nofollow" data-method="delete" href="https://app.productplan.com/users/sign_out">Sign Out</a>
                </li>
            </ul>
            </a>
            </li>
            <li style='visibility:hidden;'>
                <a class='fullscreen-button show navbar-link' id='go-fullscreen'>
                    <i class='fa fa-arrows-alt' title='Start Presenter View'></i>
                </a>
            </li>
            </ul>
        </div>
    </nav>

    <div id='page-content'>
        <div class='container-fluid'>

            <script src="https://assets0.productplan.com/assets/vendor-86d82988b4ca220cbc9fea50ba377344cd53db888b25048be3d858d08d4d2c05.js"></script>
            <script src="https://assets0.productplan.com/assets/main-a69d1d54c371ed1ac43502f293444c0e20ffce6daeca6c46c231181226d315d9.js"></script>
            <div id='user-settings-content'>
                <div id='sections-holder'>
                    <div class='settings-title'>
                        <h1>Your Settings</h1>
                    </div>
                    <ul class='nav nav-tabs' id='settings-navigation'>
                        <li class='settings_tab active' id='profile'>
                            <i class='fa fa-user'></i>
                            <a href="/user_settings/profile">Profile</a>
                        </li>
                        <li class='settings_tab' id='notifications'>
                            <i class='fa fa-bell fa-1'></i>
                            <a href="/user_settings/notifications">Notifications</a>
                        </li>
                    </ul>
                </div>

                <div id='section-content-holder'>
                    <div class='flash-wrapper'>


                    </div>
                    <h2 class='section-title'>Profile</h2>
                    <div class='section-content'>
                        <div class='user-profile-form'>
                            <form class="simple_form form-horizontal center-block" novalidate="novalidate" id="edit_user_68339" action="/users" accept-charset="UTF-8" method="post">
                                <input name="utf8" type="hidden" value="&#x2713;" />
                                <input type="hidden" name="_method" value="put" />
                                <input type="hidden" name="authenticity_token" value="PlVJNbc8ZP9psTt9t+Y8BFOMT4wO9Zw2Zcs34FYq+JneQ/Mzx535vLU8RIu/aQIFO1gBhObSRjPhXOqyiP8jRg==" />
                                <div class="form-group horizontal string required user_name">
                                    <label class="string required control-label" for="user_name">Full Name <i class="required-dot">*</i>
                                    </label>
                                    <div class="pp-input-wrapper">
                                        <input class="string required form-control" autofocus="autofocus" type="text" value="George Rencher" name="user[name]" id="user_name" />
                                    </div>
                                </div>
                                <div class="form-group horizontal string required user_company_name">
                                    <label class="string required control-label" for="user_company_name">Company name <i class="required-dot">*</i>
                                    </label>
                                    <div class="pp-input-wrapper">
                                        <input class="string required form-control" type="text" value="COPB" name="user[company_name]" id="user_company_name" />
                                    </div>
                                </div>
                                <div class="form-group horizontal string optional user_phone_number">
                                    <label class="string optional control-label" for="user_phone_number">Phone number</label>
                                    <div class="pp-input-wrapper">
                                        <input class="string optional form-control" type="text" name="user[phone_number]" id="user_phone_number" />
                                    </div>
                                </div>
                                <div class="form-group horizontal email optional user_email">
                                    <label class="email optional control-label" for="user_email">Email</label>
                                    <div class="pp-input-wrapper">
                                        <input class="string email optional form-control form-control" type="email" value="rencherga@ldschurch.org" name="user[email]" id="user_email" />
                                    </div>
                                </div>
                                <div class='user-profile-password-section'>
                                    <div class="form-group horizontal password optional user_current_password">
                                        <label class="password optional control-label" for="user_current_password">Current password</label>
                                        <div class="pp-input-wrapper">
                                            <input class="password optional form-control" type="password" name="user[current_password]" id="user_current_password" /><span class="help-block">Required to save your password or email</span>
                                        </div>
                                    </div>
                                    <div class="form-group horizontal password optional user_password">
                                        <label class="password optional control-label" for="user_password">Change Password</label>
                                        <div class="pp-input-wrapper">
                                            <input class="password optional form-control" type="password" name="user[password]" id="user_password" />
                                        </div>
                                    </div>
                                    <div class="form-group horizontal password optional user_password_confirmation">
                                        <label class="password optional control-label" for="user_password_confirmation">Confirm New Password</label>
                                        <div class="pp-input-wrapper">
                                            <input class="password optional form-control" type="password" name="user[password_confirmation]" id="user_password_confirmation" />
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='pp-input-aligned-buttons'>
                                        <input type="submit" name="commit" value="Update" id="submit_btn" class="btn btn-primary pull-left" data-disable-with="Saving..." />
                                        <a class="form-cancel pull-left btn btn-default" id="cancel" href="/user_settings/profile">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class='panel panel-default' id='ajax-loader-modal'>
                <i class='fa fa-spinner fa-spin'></i> Updating
            </div>
        </div>
    </div>
    <nav class='navbar navbar-fixed-bottom footer'>
        <div class='container-fluid'>
            <div class='help'>
                <a href='http://www.productplan.com/help' id='support' target='_blank'>
Help
</a>
                <span>
|
</span>
                <a class='intercom-link' href=''>
Contact Us
</a>
            </div>
            <div class='footer-icon'>
                Powered by
                <a href='http://productplan.com'><img src="https://assets0.productplan.com/assets/footer_logo-df856addd91d6c2a00d6ca63cc938882c5ca98252431a0233bd69668b1a4dbbf.png" alt="Footer logo" />
                </a>
            </div>
        </div>
    </nav>

    <!--[if lt IE 9]> <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js" type="text/javascript"></script> <![endif]-->

    <script id="IntercomSettingsScriptTag">
        window.intercomSettings = {
            "email": "rencherga@ldschurch.org",
            "name": "George Rencher",
            "created_at": 1490285255,
            "user_id": 68339,
            "app_id": "wlpnai8m",
            "widget": {
                "activator": ".intercom-link"
            }
        };
        (function() {
            var w = window;
            var ic = w.Intercom;
            if (typeof ic === "function") {
                ic('reattach_activator');
                ic('update', intercomSettings);
            } else {
                var d = document;
                var i = function() {
                    i.c(arguments)
                };
                i.q = [];
                i.c = function(args) {
                    i.q.push(args)
                };
                w.Intercom = i;

                function l() {
                    var s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = 'https://widget.intercom.io/widget/wlpnai8m';
                    var x = d.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            };
        })()
    </script>
</body>

</html>