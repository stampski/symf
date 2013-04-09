<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_51a7f2380d4d59eb4cbda8a2e97073f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_2eaefc7bf590dd703f15bf722bf483e8e3910e77"] = $this;
        // line 5
        if ((!array_key_exists("colors", $context))) {
            // line 6
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute($_collector_, "events"))) ? (sprintf("%.0f ms", $this->getAttribute($_collector_, "duration"))) : ("n/a"));
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        <img width=\"16\" height=\"28\" alt=\"Time\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=\"/>
        <span>";
        // line 22
        if (isset($context["duration"])) { $_duration_ = $context["duration"]; } else { $_duration_ = null; }
        echo twig_escape_filter($this->env, $_duration_, "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 27
        if (isset($context["duration"])) { $_duration_ = $context["duration"]; } else { $_duration_ = null; }
        echo twig_escape_filter($this->env, $_duration_, "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAACz0lEQVR42t2XXWhSYRjHc+pyWrC10e66qKggiGoF0Qh1SBPFDxCcX00yrG6EImFsRhAuvUjwQgZB1EUICYEkgRJGB0QmKMNGEYx1URYEg2w6amWY/YUXXH7Ms9M5RAk/PByf8/58P573ec+2Wq32V/g3xFKpdB3UQBV8JVTJvXUuxbXN+P96TODNzMzsNJvNo3UCgYCYszmmKKrPYrE4NBrNU7lcvtY8xGNjYyWtVvvEZrPZES9kQyy02+3nx8fH3xFJV5RK5RuHw2GqP8tInEgk+g0GwyN6wlZMJtPdfD6/Y0viVCo1iKHLMpM20Ov1FNqT0BWLsWhiXdImDyiQ7ybHVN1HnKibWHgNHxr5egXI6t90ej49PX0BsYKO4qWlpT1qtXqFhlhGnpHREWPaPiB2dydxL/7ZTRLMnpjg8/lcpNct4mGr1fqSK7HT6UwhfleLuFwuH1EoFBWuxDqd7jPiDzSLe+Lx+AQJYl9MKBQKZ+pb7kaxKBKJXGUgPgqCgGrQOc3S6fQEfuNvFEtisdgUA3E/kcsadE6zhYUFG9lKG2LcvMxA3EKnKUBx+bm6uqptFvcCtUql+kECWcdoNH6BQw56fltcYNTtdr/nSuzxeJbhONkujw9Fo9EYV+JkMvkAjv3txEOVSuUSytk3tqWoz2to/xwYaCcWgtPI5+dsSrGo6mn0GG2PtG6ZDYbBRb/f/5EtcSgUeos2J8HgpmURHMaQz6JglP5U6vV6P6G962Sr5HcUE/rAKXB7bm5uhenwhsPheim8BUa6HwQaSMjSv5HNZl+gstDOb5fL9X1xcTGLZ6fAMSDe6ilTBA4CO7iXyWReB4PBMo5F1WYZymkVc1nK5XKvEHsHWMA+sJ3p8VYAhkjvJ4EPRMCzYrE4XyqV5nGdBA/BLLCC46Tu8tl4kxCAAdKLE0AGzhKkZB73kqIh4PI1lQf4BB6TNn4B8KR3FN9bp4MAAAAASUVORK5CYII=\" alt=\"Timeline\" /></span>
    <strong>Timeline</strong>
</span>
";
    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        // line 41
        echo "    <h2>Timeline</h2>
    ";
        // line 42
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "events"))) {
            // line 43
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 51
    public function block_panelContent($context, array $blocks = array())
    {
        // line 52
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\" />
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 57
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($_collector_, "duration")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 61
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($_collector_, "inittime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"1\" min=\"0\" /> ms</td>
            </tr>
        </table>
    </form>

    <h3>
        ";
        // line 71
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo (($this->getAttribute($_profile_, "parent")) ? ("Request") : ("Main Request"));
        echo "
        <small>
            - ";
        // line 73
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "duration"), "html", null, true);
        echo " ms
            ";
        // line 74
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "parent")) {
            // line 75
            echo "                - <a href=\"";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($_profile_, "parent"), "token"), "panel" => "time")), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 77
        echo "        </small>
    </h3>

    ";
        // line 80
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
        echo $context["__internal_2eaefc7bf590dd703f15bf722bf483e8e3910e77"]->getdisplay_timeline(("timeline_" . $_token_), $this->getAttribute($_collector_, "events"), $_colors_);
        echo "

    ";
        // line 82
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children"))) {
            // line 83
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 84
                echo "            ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context["events"] = $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "time"), "method"), "events");
                // line 85
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 86
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($_child_, "token"), "panel" => "time")), "html", null, true);
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "request"), "method"), "requestattributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 87
                if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_events_, "__section__"), "duration"), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 90
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
                if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
                echo $context["__internal_2eaefc7bf590dd703f15bf722bf483e8e3910e77"]->getdisplay_timeline(("timeline_" . $this->getAttribute($_child_, "token")), $_events_, $_colors_);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 92
            echo "    ";
        }
        // line 93
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                }

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            }
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param  string selector a CSS-selector-compatible query string.
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors  = ";
        // line 136
        if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
        echo twig_jsonencode_filter($_colors_);
        echo ",
                _storagePrefix  = 'timeline/',
                _threshold      = 1,
                _requests       = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is.
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is.
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds).
             * @param width     the width of the canvas.
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId    = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent  = 38,
                    colors = _drawingColors,
                    space  = 10.5,
                    ratio  = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx    = canvas.getContext(\"2d\");

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                canvas.width  = width;
                canvas.height = canvasHeight;

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#dfdfdf\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            ctx.fillStyle = colors.child_sections;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return ! isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle   = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle   = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle   = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if ( ! isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#dfdfdf\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \" ~ \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / ~ \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"12px sans-serif\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"10px sans-serif\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width     = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (threshold === null) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        };

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 389
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "endtime")), "html", null, true);
        echo ",
            \"requests\": [
";
        // line 391
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo $context["__internal_2eaefc7bf590dd703f15bf722bf483e8e3910e77"]->getdump_request_data($_token_, $_profile_, $this->getAttribute($_collector_, "events"), $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "origin"));
        echo "

";
        // line 393
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children"))) {
            // line 394
            echo "                ,
";
            // line 395
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 396
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo $context["__internal_2eaefc7bf590dd703f15bf722bf483e8e3910e77"]->getdump_request_data($this->getAttribute($_child_, "token"), $_child_, $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "time"), "method"), "events"), $this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "events"), "__section__"), "origin"));
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo (($this->getAttribute($_loop_, "last")) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 399
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl  = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize                 = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick  = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup  = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]></script>
";
    }

    // line 434
    public function getdump_request_data($_token = null, $_profile = null, $_events = null, $_origin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $_token,
            "profile" => $_profile,
            "events" => $_events,
            "origin" => $_origin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 435
            $context["__internal_17f5da5241d52418b629f23c541f538a7e23e235"] = $this;
            // line 436
            echo "                {
                    \"id\": \"";
            // line 437
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "\",
                    \"left\": ";
            // line 438
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            if (isset($context["origin"])) { $_origin_ = $context["origin"]; } else { $_origin_ = null; }
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute($_events_, "__section__"), "origin") - $_origin_)), "html", null, true);
            echo ",
                    \"events\": [
";
            // line 440
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            echo $context["__internal_17f5da5241d52418b629f23c541f538a7e23e235"]->getdump_events($_events_);
            echo "
                    ]
                }
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 445
    public function getdump_events($_events = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $_events,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 446
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_events_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 447
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (("__section__" != $_name_)) {
                    // line 448
                    echo "                        {
                            \"name\": \"";
                    // line 449
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, strtr($_name_, array("\\" => "\\\\")), "html", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 450
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "category"), "html", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 451
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "origin")), "html", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 452
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "starttime")), "html", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 453
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "endtime")), "html", null, true);
                    echo ",
                            \"duration\": ";
                    // line 454
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_event_, "duration")), "html", null, true);
                    echo ",
                            \"memory\": ";
                    // line 455
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($_event_, "memory") / 1024) / 1024)), "html", null, true);
                    echo ",
                            \"periods\": [";
                    // line 457
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_event_, "periods"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 458
                        echo "{\"start\": ";
                        if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_period_, "starttime")), "html", null, true);
                        echo ", \"end\": ";
                        if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($_period_, "endtime")), "html", null, true);
                        echo "}";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo (($this->getAttribute($_loop_, "last")) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 460
                    echo "]
                        }";
                    // line 461
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo (($this->getAttribute($_loop_, "last")) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 466
    public function getdisplay_timeline($_id = null, $_events = null, $_colors = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "events" => $_events,
            "colors" => $_colors,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 467
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 469
            if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_colors_);
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 470
                echo "                <span data-color=\"";
                if (isset($context["color"])) { $_color_ = $context["color"]; } else { $_color_ = null; }
                echo twig_escape_filter($this->env, $_color_, "html", null, true);
                echo "\">";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $_category_, "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 472
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 473
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  845 => 473,  842 => 472,  829 => 470,  824 => 469,  820 => 467,  807 => 466,  780 => 461,  777 => 460,  755 => 458,  737 => 457,  732 => 455,  727 => 454,  722 => 453,  717 => 452,  712 => 451,  707 => 450,  702 => 449,  699 => 448,  696 => 447,  678 => 446,  667 => 445,  651 => 440,  644 => 438,  639 => 437,  636 => 436,  634 => 435,  620 => 434,  583 => 399,  562 => 396,  544 => 395,  541 => 394,  538 => 393,  530 => 391,  524 => 389,  219 => 92,  208 => 90,  190 => 85,  186 => 84,  180 => 83,  164 => 77,  157 => 75,  154 => 74,  143 => 71,  129 => 61,  121 => 57,  103 => 45,  97 => 43,  94 => 42,  41 => 19,  28 => 3,  391 => 119,  388 => 118,  367 => 113,  364 => 112,  354 => 109,  351 => 108,  336 => 104,  329 => 102,  318 => 100,  312 => 98,  307 => 97,  292 => 95,  282 => 93,  270 => 92,  262 => 85,  236 => 78,  224 => 77,  175 => 63,  156 => 51,  152 => 49,  149 => 73,  144 => 45,  130 => 40,  127 => 39,  96 => 25,  64 => 27,  48 => 21,  39 => 7,  214 => 67,  196 => 66,  189 => 64,  174 => 63,  162 => 59,  151 => 58,  134 => 41,  119 => 35,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 24,  86 => 28,  83 => 27,  76 => 24,  432 => 160,  429 => 159,  423 => 158,  411 => 156,  406 => 155,  399 => 152,  396 => 151,  393 => 150,  390 => 149,  380 => 147,  377 => 116,  374 => 145,  368 => 141,  365 => 140,  361 => 111,  358 => 110,  353 => 135,  347 => 107,  344 => 106,  340 => 105,  337 => 128,  332 => 125,  326 => 121,  323 => 120,  311 => 115,  308 => 114,  303 => 111,  300 => 110,  295 => 96,  291 => 105,  284 => 103,  280 => 101,  277 => 100,  272 => 97,  264 => 93,  258 => 83,  255 => 88,  251 => 81,  248 => 86,  243 => 83,  237 => 79,  234 => 78,  230 => 77,  227 => 76,  222 => 93,  216 => 69,  201 => 87,  195 => 59,  192 => 65,  188 => 57,  181 => 54,  178 => 53,  170 => 62,  167 => 46,  161 => 43,  158 => 42,  147 => 39,  139 => 35,  131 => 31,  116 => 47,  113 => 24,  104 => 39,  99 => 20,  85 => 21,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 13,  69 => 12,  66 => 18,  60 => 25,  52 => 21,  47 => 9,  45 => 20,  40 => 6,  37 => 5,  22 => 1,  267 => 136,  185 => 56,  177 => 82,  165 => 46,  159 => 52,  148 => 42,  137 => 42,  133 => 40,  120 => 27,  117 => 37,  115 => 36,  110 => 31,  107 => 30,  101 => 29,  90 => 34,  87 => 24,  80 => 34,  70 => 20,  67 => 12,  62 => 18,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 6,  29 => 6,  456 => 183,  445 => 180,  440 => 179,  437 => 178,  431 => 177,  428 => 176,  420 => 157,  417 => 169,  410 => 165,  402 => 153,  394 => 157,  386 => 153,  378 => 149,  370 => 114,  362 => 141,  346 => 129,  338 => 125,  330 => 121,  325 => 101,  319 => 119,  316 => 118,  304 => 113,  301 => 112,  298 => 111,  289 => 104,  286 => 94,  278 => 97,  275 => 96,  269 => 96,  266 => 92,  261 => 89,  254 => 87,  244 => 85,  241 => 84,  229 => 79,  221 => 75,  213 => 68,  209 => 76,  206 => 75,  203 => 74,  193 => 86,  187 => 62,  182 => 57,  179 => 60,  176 => 59,  169 => 80,  166 => 60,  163 => 55,  160 => 54,  153 => 51,  145 => 54,  140 => 46,  132 => 42,  128 => 50,  125 => 49,  122 => 36,  114 => 52,  111 => 51,  108 => 31,  105 => 31,  98 => 27,  91 => 41,  88 => 40,  78 => 20,  75 => 19,  71 => 30,  68 => 24,  63 => 17,  56 => 16,  46 => 13,  43 => 12,  38 => 18,  35 => 6,  33 => 4,  30 => 5,);
    }
}
