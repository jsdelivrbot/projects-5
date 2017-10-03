//Color Line no 49


/********************************
 ** FILE: lib/nytg.js
 ********************************/

var nytg=nytg||{};



/********************************
 ** FILE: BasicStepper.js
 ********************************/

var INK=INK||{};INK.BasicStepper=function(a,c,b){this.$=nytg.$;this.$el=this.$(a);this.steps=c;a={onChange:function(){},labelWithIndex:!1};this.previousStep=this.previousIndex=this.currentStep=this.currentIndex=null;this.length=this.steps.length;b&&this.$.extend(a,b);this.$.extend(this,a);this.init()};
INK.BasicStepper.prototype={init:function(){this.render();this.stepButtons=this.$el.find(".ink-steps li.ink-step");this.$el.on("click",".ink-step",this.$.proxy(this.onStepClick,this))},render:function(){var a,c,b;b="<div class='ink-basicStepper clearfix'><div class='ink-shareDesc' style='display:none'><div class='ink-shareTitle'>When you&rsquo;re done, share your scenario.</div><span class='ink-stateCount'></span> undecided <span class='ink-stateNoun'>states</span> remaining</div><a href='how-the-facebook-offering-compares.html#' class='ink-stepperButton ink-previous'>Prev</a><a href='how-the-facebook-offering-compares.html#' class='ink-stepperButton ink-next'>Next</a><ul class='ink-steps'>";
for(a=0;a<this.steps.length;a++){c=this.labelWithIndex?""+(a+1):this.steps[a];var d="";a===this.steps.length-1&&(d=" ink-last");b+="<li class='ink-step"+d+"' data-index='"+a+"'><a href='how-the-facebook-offering-compares.html#'>"+c+"</a></li>"}this.$el.html(b+"</ul></div>");this.$el.on("click",".ink-next",this.$.proxy(this.onNext,this));this.$el.on("click",".ink-previous",this.$.proxy(this.onPrevious,this))},setIndex:function(a){var c=+a,b=this.steps.length-1;this.$(".ink-shared").toggle(c==b);this.$("#app-header .sharetools").toggle(c!=
b);c!==this.currentIndex&&(this.previousIndex=this.currentIndex,this.previousStep=this.steps[this.previousIndex],this.currentIndex=c,this.currentStep=this.steps[this.currentIndex],this.$(this.stepButtons[this.currentIndex]).addClass("ink-selected"),this.$(this.stepButtons[this.previousIndex]).removeClass("ink-selected"),this.$el.find(".ink-stepperButton").removeClass("ink-disabled"),this.atEnd()&&this.$el.find(".ink-next").addClass("ink-disabled"),this.atBeginning()&&this.$el.find(".ink-previous").addClass("ink-disabled"),
this.onChange(a))},previous:function(){this.atBeginning()||this.setIndex(this.currentIndex-1)},next:function(){this.atEnd()||this.setIndex(this.currentIndex+1)},atEnd:function(){return this.currentIndex===this.length-1},atBeginning:function(){return 0===this.currentIndex},onNext:function(a){a.preventDefault();this.next()},onPrevious:function(a){a.preventDefault();this.previous()},onStepClick:function(a){a.preventDefault();this.setIndex(this.$(a.currentTarget).data("index"))}};



/********************************
 ** FILE: chart.js
 ********************************/

window.nytg || (window.nytg = {});
var USE_CANVAS = !0;
"trydom" != window.location.hash && "#trydom" != window.location.hash || (USE_CANVAS = !1), nytg.Chart = function() {
    function a(a) {
        A.fillStyle = a.color, A.beginPath(), A.arc(a.x, a.y, a.r, 0, 2 * Math.PI), A.closePath(), A.fill(), a.selected && A.stroke()
    }
    var b = jQuery,
        c = b.browser.msie && 9 > parseInt(b.browser.version, 10),
        d = nytg.ipoData;
    if (!c) {
        _.forEach(d, function(a) {
            var b = ("" + a.rec_dat).substr(0, 4),
                c = ("" + a.rec_dat).substr(4, 2),
                d = ("" + a.rec_dat).substr(6, 2);
            a.date = new Date(b, c, d), a.threeYear = a.run * (a.BHRET3 / 100 + 1), a.Name = a.Name.toUpperCase()
        });
        for (var e = new Date(1975, 1, 0), f = d3.max(d, function(a) {
                return a.date
            }), g = d3.max(d, function(a) {
                return a.appreciation
            }), h = d3.time.scale().domain([e, f]).range([0, 825]), i = d3.scale.linear().domain([0, 5e3]).range([480, 0]), j = d3.scale.log().domain([20, 8e5]).range([480, 0]), k = d3.scale.pow().exponent(.5).clamp(!0).domain([0, g]).range([0, 80]), l = d3.scale.linear().domain([e, f]).rangeRound(["rgba(255,0,0,0.4)", "rgba(0,66,118,0.4)"]), m = [
                [156, 187, 89],
                [0, 66, 118]
            ], l = function(a, b) {
                for (var c = (a - e) / (f - e), d = [], g = 0; 3 > g; g++) d.push(Math.round(m[0][g] + c * (m[1][g] - m[0][g])));
                return d.push(b || .7), "rgba(" + d.join(",") + ")"
            }, n = USE_CANVAS ? 0 : "px", o = function(a) {
                return a = k(a), isNaN(a) || null === a ? 0 + n : Math.ceil(a) + n
            }, p = function(a, b) {
                return isNaN(a[b]) ? 0 + n : Math.round(h(a.date) - k(a[b]) / 2) + n
            }, q = function(a, b) {
                var c = i(a[b]) - k(a[b]) / 2;
                return isNaN(c) ? 0 + n : Math.round(c) + n
            }, r = function(a, b) {
                var c = a[b];
                return null === c || isNaN(c) ? 0 + n : Math.round(j(a[b]) - k(a[b]) / 2) + n
            }, g = 0, s = d.length; g < s; g++) {
            var t = d[g];
            t.r = o(t.appreciation) / 2, t.x = p(t, "appreciation") + t.r, t.y = q(t, "appreciation") + t.r, t.a = .7, t.color = l(t.date)
        }
        if (!c) var u = d3.select("#nytg-canvas").append("div").attr("class", "nytg-stage").style("width", "950px").style("height", "500px").style("left", "75px").style("top", "0px"),
            v = u.append("div").attr("class", "nytg-circleContainer").style("width", "875px").style("height", "480px"),
            w = d3.select("#nytg-canvas").append("svg").attr("width", 950).attr("height", 500).style("position", "absolute").append("g").attr("transform", "translate(75,0)");
        if (USE_CANVAS) {
            var x = 875,
                y = 480;
            b("#nytg-canvas").append('<canvas width="' + x + '" height="' + y + '" style="margin-left: 75px;"></canvas>');
            var z = b("#nytg-canvas canvas")[0];
            window.CanvasSwf && CanvasSwf.initElement(z);
            var A = z.getContext("2d");
            A.lineWidth = 2
        }
        if (!c) {
            var B = d3.svg.axis().scale(i).tickFormat(function(a) {
                return a / 1
            }).tickSize(15).orient("left");
            w.append("g").attr("class", "y axis").call(B), g = d3.svg.axis().scale(h).tickFormat(function(a) {
                return new Date(a).getFullYear()
            }).orient("bottom"), w.append("g").attr("class", "x axis").attr("transform", "translate(0, 480)").call(g)
        }
        if (USE_CANVAS) {
            var C = b(z).offset(),
                D = -1,
                E = !1;
            b(window).mousemove(function(a) {
                var b = a.pageX - C.left,
                    c = a.pageY - C.top,
                    e = 0,
                    f = -1;
                if (c <= y && 0 < c)
                    for (var g = 0, h = d.length; g < h; g++) {
                        var i, j = d[g];
                        i = b - j.x;
                        var k = c - j.y;
                        i = Math.sqrt(i * i + k * k), k = j = j.r, 3 > k && (k = 3);
                        var l = 0;
                        i < k ? (k += 1 * i, l = 1e3 - k) : i < j + 10 && (l = 10 + j - i), i = l, i > e && (e = i, f = g)
                    }(!E && D != f || E && -1 < f) && (-1 < D && delete d[D].selected, -1 < f ? (d[f].selected = !0, I(d[f])) : E || F.hide(), D = f, E = !1, Q()), E || F.css({
                        top: a.pageY - H - 18,
                        left: a.pageX - .5 * G
                    })
            }), b(window).mouseenter(function() {
                F.hide()
            }), nytg.selectBubbleById = function(a) {
                if (a != D) {
                    -1 < D && (console.log("clearSelectedBubble()"), console.log(d[D]), delete d[D].selected, D = -1), D = a, a = d[D], a.selected = !0, Q();
                    var b = a.x + C.left,
                        c = a.y + C.top;
                    I(a), F.css({
                        top: c - H - 18,
                        left: b - .5 * G
                    }), E = !0
                }
            };
            var F = $jq("<div>").addClass("nytg-popup").hide().appendTo("body"),
                G = 0,
                H = 0,
                I = function(a) {
                    C = b(z).offset(), F.html(M(a)).show(), H = F.outerHeight(), G = F.outerWidth()
                },
                J = d3.format("+,.0f"),
                K = d3.format(",.0f"),
                L = d3.format(",.1f"),
                M = function(a) {
                    var b = a.appreciation,
                        c = a.BHRET3,
                        d = 100 * (a.run / b - 1),
                        e = a.rec_dat,
                        f = 20080101 > e ? "Three years<br>later" : "Return<br>to date",
						ra = a.run,
						rb = a.appreciation,
                        g = " million";
                    1e3 < b && (g = " billion", b /= 1e3);
                    var b = "$" + (10 > b ? L(b) : K(b)),
                        d = J(d) + "%",
                        c = J(c) + "%",
                        e = ("" + e).substr(0, 4),
                        h = a.Name,
                        a = "facebook" == h.toLowerCase(),
						
                        e = "<div class='nytg-popup-label'>" + e + "</div>" + ("<div class='nytg-popup-title'>" + h + "</div>");
                    return e = a ? e + "<div class='nytg-popup-line'><span class='nytg-popup-label'>Value at I.P.O.</span><br/><span class='nytg-popup-value'>$104 billion</span></div>" : e + ("<div class='nytg-popup-line'><span class='nytg-popup-value'>" + ra + "</span> <span class='nytg-popup-label'>year run drove total return of:</span></div>") + "<table>" + ("<tr><td class='row1'><span class='nytg-popup-label'>year run drove total return of:</span>" + rb + "%</td></tr>") + ("</table>")
                };
            _.forEach(nytg.ipoLabels, function(a) {
                var b = {
                        width: a.width + "px",
                        left: a.xpos + "px",
                        top: a.ypos + "px"
                    },
                    b = $jq("<div>").addClass("nytg-ipo-label").css(b).html(a.sentence).hide().appendTo("#nytg-canvas");
                a.element = b[0]
            });
            var N = function(a) {
                    _.forEach(nytg.ipoLabels, function(b) {
                        a == b.step && $jq(b.element).fadeIn(200)
                    })
                },
                O = function() {
                    _.forEach(nytg.ipoLabels, function(a) {
                        $jq(a.element).fadeOut(200)
                    })
                }
        }
        var P = function(a, b, c, d) {
                return a /= d / 2, 1 > a ? c / 2 * a * a * a + b : (a -= 2, c / 2 * (a * a * a + 2) + b)
            },
            Q = function() {
                A.clearRect(0, 0, x, y);
                for (var b = null, c = 0, e = d.length; c < e; c++) {
                    var f = d[c];
                    f.selected ? b = f : a(f)
                }
                b && a(b)
            },
            R = null,
            S = function(a, b) {
                R && cancelAnimationFrame(R);
                for (var c = b ? r : q, e = d[d.length - 1], f = 0, g = d.length; f < g; f++) {
                    var h = d[f];
                    h.startR = h.r, h.startX = h.x, h.startY = h.y, h.deltaR = o(h[a]) / 2 - h.r, h.deltaX = p(h, a) + (h.r + h.deltaR) - h.x, h.deltaY = c(h, a) + (h.r + h.deltaR) - h.y, h == e && (h.startA = h.a, h.deltaA = .7 - h.a)
                }
                var i = Date.now(),
                    j = function() {
                        for (var a = Math.min(Date.now() - i, 3e3), b = 0, c = d.length; b < c; b++) {
                            var f = d[b];
                            f.r = P(a, f.startR, f.deltaR, 3e3), f.x = P(a, f.startX, f.deltaX, 3e3), f.y = P(a, f.startY, f.deltaY, 3e3), f == e && (f.a = P(a, f.startA, f.deltaA, 3e3), f.color = l(f.date, f.a))
                        }
                        Q(), 3e3 > a && (R = requestAnimationFrame(j, z))
                    };
                R = requestAnimationFrame(j, z)
            };
        return USE_CANVAS ? Q() : v.selectAll(".company").data(d).enter().append("div").attr("class", "company").style("background", function(a) {
            return l(a.date)
        }).style("left", function(a) {
            return p(a, "appreciation")
        }).style("top", function(a) {
            return q(a, "appreciation")
        }).style("width", function(a) {
            return o(a.appreciation)
        }).style("height", function(a) {
            return o(a.appreciation)
        }), {
            d: d,
            set: function(a) {
                var b = w.transition().duration(2e3).each("end", function() {
                    N(a)
                });
                if (O(), "preFacebook" === a) {
                    var d = "appreciation";
                    if (c || (B.scale(i).tickValues([0, 200, 400, 600, 800]), i.domain([0, 1000]), b.select(".y.axis").call(B)), USE_CANVAS) S(d);
                    else {
                        var e = u.transition().duration(2e3);
                        e.selectAll(".company").style("left", function(a) {
                            return p(a, d)
                        }).style("top", function(a) {
                            return q(a, d)
                        }).style("width", function(a) {
                            return o(a[d])
                        }).style("height", function(a) {
                            return o(a[d])
                        })
                    }
                } else "facebook" === a ? (d = "appreciation", c || (B.scale(i).tickValues([0, 500, 1000, 1500]), i.domain([0, 2000]), b.select(".y.axis").call(B)), USE_CANVAS ? S(d) : (e = u.transition().duration(2e3), e.selectAll(".company").style("left", function(a) {
                    return p(a, d)
                }).style("top", function(a) {
                    return q(a, d)
                }).style("width", function(a) {
                    return o(a[d])
                }).style("height", function(a) {
                    return o(a[d])
                }))) : "log" === a ? (d = "appreciation", c || (B.scale(i).tickValues([0, 500, 1000, 1500, 2000, 2500]), i.domain([0, 3000]), b.select(".y.axis").call(B)), USE_CANVAS ? S(d) : (e = u.transition().duration(2e3), e.selectAll(".company").style("left", function(a) {
                    return p(a, d)
                }).style("top", function(a) {
                    return r(a, d)
                }).style("width", function(a) {
                    return o(a[d])
                }).style("height", function(a) {
                    return o(a[d])
                })), b.select(".y.axis").call(B)) : "pop" === a ? (d = "appreciation", c || (B.scale(i).tickValues([0, 1000, 2000, 3000, 3500]), i.domain([0, 4000]), b.select(".y.axis").call(B)), USE_CANVAS ? S(d) : (e = u.transition().duration(2e3), e.selectAll(".company").style("left", function(a) {
                    return p(a, d)
                }).style("top", function(a) {
                    return r(a, d)
                }).style("width", function(a) {
                    return o(a[d])
                }).style("height", function(a) {
                    return o(a[d])
                })), b.select(".y.axis").call(B)) : "threeYear" === a && (d = "appreciation", c || (B.scale(i).tickValues([0, 1000, 2000, 3000, 4000, 5000]), i.domain([0, 5000]), b.select(".y.axis").call(B)), USE_CANVAS ? S(d) : (e = u.transition().duration(2e3), e.selectAll(".company").style("left", function(a) {
                    return p(a, d)
                }).style("top", function(a) {
                    return r(a, d)
                }).style("width", function(a) {
                    return o(a[d])
                }).style("height", function(a) {
                    return o(a[d])
                })), b.select(".y.axis").call(B))
            }
        }
    }
    b("#nytg-wrapper").hide(), b("#nytg-ie8-wrapper").show()
};


/********************************
 ** FILE: search.js
 ********************************/

var $jq=jQuery,inputBox=$jq("#nytg-search-input");$jq("#nytg-search-form").submit(handleSubmit);function handleSubmit(){var a=inputBox[0];matches=getMatches(a.value);if(0<matches.length){var b=matches[0];selectByName(b);a.value=b;inputBox.blur()}return!1}inputBox.bind("keydown",function(a){if(9==a.keyCode)return handleSubmit(),!1});function selectByName(a){for(var b=0,c=nytg.ipoData.length;b<c;b++)if(nytg.ipoData[b].Name==a){nytg.selectBubbleById(b);break}}var matchItems;
function getMatches(a){matchItems||(matchItems=$jq.map(nytg.ipoData,function(a){return a.Name.toLowerCase()}));for(var a=a.toLowerCase(),b=[],c=[],d=0,e=matchItems.length;d<e;d++)0==matchItems[d].indexOf(a)&&b.push(nytg.ipoData[d].Name);a=b;b.sort();10>a.length&&(c.sort(),a=a.concat(c));10<a.length&&a.splice(10);return a}var source=function(a,b){var c=getMatches(a.term);b(c)},autoCompleteOpts={minLength:1,delay:100,select:function(a,b){selectByName(b.item.value)},source:source};inputBox.autocomplete(autoCompleteOpts);
inputBox.click(function(){""!=inputBox[0].value&&this.select()});



/********************************
 ** FILE: base.js
 ********************************/

nytg.$=jQuery;nytg.c=nytg.Chart();nytg.stepperChange=function(a){nytg.c.set(nytg.s.currentStep);a=nytg.ipoSteps[a];nytg.$(".nytg-explainer .nytg-title").html(a.head);nytg.$(".nytg-explainer .nytg-description").html(a.text)};nytg.s=new INK.BasicStepper("#nytg-stepper",["preFacebook","facebook","log","pop","threeYear"],{onChange:nytg.stepperChange,labelWithIndex:!0});nytg.s.setIndex(0);
nytg.tryDOM=function(){jQuery("#nytg-canvas").empty();window.USE_CANVAS=!1;nytg.c=nytg.Chart();nytg.s.setIndex(1);nytg.s.setIndex(0)};
