var _____WB$wombat$assign$function_____ = function (name) { return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function (obj) { this.__WB_source = obj; return this; } }
{
    let window = _____WB$wombat$assign$function_____("window");
    let self = _____WB$wombat$assign$function_____("self");
    let document = _____WB$wombat$assign$function_____("document");
    let location = _____WB$wombat$assign$function_____("location");
    let top = _____WB$wombat$assign$function_____("top");
    let parent = _____WB$wombat$assign$function_____("parent");
    let frames = _____WB$wombat$assign$function_____("frames");
    let opener = _____WB$wombat$assign$function_____("opener");
    (function ($) {
        $.fn.postMessage = function (message) {
            var toUrl = this.attr("src");
            var iframe = document.getElementById(this.attr("id")).contentWindow;
            if (window.postMessage) {
                iframe.postMessage(message, toUrl);
            } else {
                var theIframe = document.getElementById(this.attr("id"));
                theIframe.src = theIframe.src.split('#')[0] + "#" + message;
            }
        };
        $.fn.onMessage = function (triggeredFunction) {
            if (window.postMessage) {
                if (typeof window.addEventListener != 'undefined') {
                    window.addEventListener('message', triggeredFunction, false);
                } else if (typeof window.attachEvent != 'undefined') {
                    window.attachEvent('onmessage', triggeredFunction);
                }
            } else {
                var _origURL = document.location.href;
                var _poller = function () {
                    if (document.location.href != _origURL) {
                        _origURL = document.location.href;
                        var currentUrl = document.location.href;
                        var message = currentUrl.split('#')[1];
                        document.location.hash = "";
                        var event = {
                            data: ""
                        };
                        event.data = message;
                        triggeredFunction(event);
                    }
                };
                setInterval(_poller, 300);
            }
        };
    })(jQuery);
}