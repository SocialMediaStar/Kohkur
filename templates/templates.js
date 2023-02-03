(function() {
  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};
templates['eventList'] = template({"1":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"events") : depth0),{"name":"each","hash":{},"fn":container.program(2, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":3,"column":0},"end":{"line":32,"column":19}}})) != null ? stack1 : "");
},"2":function(container,depth0,helpers,partials,data) {
    var stack1, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=container.lambda, alias3=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "          <div class=\"card mt-2\">\r\n            <div class=\"card-body p-0\">\r\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(depth0 != null ? lookupProperty(depth0,"event_picture") : depth0),{"name":"if","hash":{},"fn":container.program(3, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":6,"column":14},"end":{"line":10,"column":21}}})) != null ? stack1 : "")
    + "              <div class=\"p-2\">\r\n                <h4 class=\"mt-2\">"
    + alias3(alias2((depth0 != null ? lookupProperty(depth0,"event_name") : depth0), depth0))
    + "</h4>\r\n                <p>"
    + alias3(alias2((depth0 != null ? lookupProperty(depth0,"event_desc") : depth0), depth0))
    + "</p>\r\n                <p>Kokku vaja: "
    + alias3(alias2((depth0 != null ? lookupProperty(depth0,"event_sum") : depth0), depth0))
    + " € (per laps)</p>\r\n              </div>\r\n              <div class=\"p-2\">\r\n                <div class=\"progress\">\r\n                    <div class=\"progress-bar\" style=\"width:"
    + alias3(alias2((depth0 != null ? lookupProperty(depth0,"per") : depth0), depth0))
    + "%; background:#130269;\">\r\n                        <div class=\"progress-value\">"
    + alias3(alias2((depth0 != null ? lookupProperty(depth0,"per") : depth0), depth0))
    + "%</div>\r\n                    </div>\r\n                </div>\r\n              </div>\r\n              <div class=\"p-2\">\r\n"
    + ((stack1 = lookupProperty(helpers,"if").call(alias1,(lookupProperty(helpers,"eqw")||(depth0 && lookupProperty(depth0,"eqw"))||container.hooks.helperMissing).call(alias1,(depth0 != null ? lookupProperty(depth0,"mePaid") : depth0),"0",{"name":"eqw","hash":{},"data":data,"loc":{"start":{"line":24,"column":22},"end":{"line":24,"column":38}}}),{"name":"if","hash":{},"fn":container.program(5, data, 0),"inverse":container.program(7, data, 0),"data":data,"loc":{"start":{"line":24,"column":16},"end":{"line":28,"column":23}}})) != null ? stack1 : "")
    + "              </div>\r\n            </div>\r\n          </div>\r\n";
},"3":function(container,depth0,helpers,partials,data) {
    var lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "              <div class=\"card-image\">\r\n                <img src=\""
    + container.escapeExpression(container.lambda((depth0 != null ? lookupProperty(depth0,"event_picture") : depth0), depth0))
    + "\" width=\"100%\">\r\n              </div>\r\n";
},"5":function(container,depth0,helpers,partials,data) {
    var helper, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "                <button class=\"btn btn-blue\" onClick=\"PayForEvent("
    + container.escapeExpression(((helper = (helper = lookupProperty(helpers,"event_id") || (depth0 != null ? lookupProperty(depth0,"event_id") : depth0)) != null ? helper : container.hooks.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"event_id","hash":{},"data":data,"loc":{"start":{"line":25,"column":66},"end":{"line":25,"column":78}}}) : helper)))
    + ")\">Maksa</button>\r\n";
},"7":function(container,depth0,helpers,partials,data) {
    return "                * Sa oled juba tasunud ürituse eest.\r\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "\r\n"
    + ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"events") : depth0),{"name":"if","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":2,"column":0},"end":{"line":33,"column":7}}})) != null ? stack1 : "");
},"useData":true});
templates['groupMembers'] = template({"1":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"each").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"members") : depth0),{"name":"each","hash":{},"fn":container.program(2, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":2,"column":2},"end":{"line":23,"column":11}}})) != null ? stack1 : "");
},"2":function(container,depth0,helpers,partials,data) {
    var alias1=container.lambda, alias2=container.escapeExpression, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return "    <tr>\r\n      <th>\r\n        <div class=\"d-flex mb-3\">\r\n          <div class=\"me-auto p-2\">\r\n            <h4><strong>"
    + alias2(alias1((depth0 != null ? lookupProperty(depth0,"fname") : depth0), depth0))
    + " "
    + alias2(alias1((depth0 != null ? lookupProperty(depth0,"lname") : depth0), depth0))
    + "</strong></h4>\r\n          </div>\r\n        <div class=\"p-2\">\r\n          <div class=\"dropdown\">\r\n            <a href=\"javascript:void(0)\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">\r\n              <i class=\"fa-solid fa-ellipsis-vertical\"></i>\r\n            </a>\r\n            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">\r\n              <li><a class=\"dropdown-item\" href=\"#\">Eemalda grupist</a></li>\r\n              <li><a class=\"dropdown-item\" href=\"#\">Saada kiri</a></li>\r\n            </ul>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </th>\r\n  </tr>\r\n";
},"compiler":[8,">= 4.3.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, lookupProperty = container.lookupProperty || function(parent, propertyName) {
        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
          return parent[propertyName];
        }
        return undefined
    };

  return ((stack1 = lookupProperty(helpers,"if").call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? lookupProperty(depth0,"members") : depth0),{"name":"if","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data,"loc":{"start":{"line":1,"column":0},"end":{"line":24,"column":7}}})) != null ? stack1 : "");
},"useData":true});
})();