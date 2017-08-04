System.register(["./View"], function (exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var View_1, MensagemView;
    return {
        setters: [
            function (View_1_1) {
                View_1 = View_1_1;
            }
        ],
        execute: function () {
            MensagemView = class MensagemView extends View_1.View {
                template(model, tipoAlert = '') {
                    if (!tipoAlert || tipoAlert == '') {
                        tipoAlert = 'alert alert-info';
                    }
                    return `<p class=" ${tipoAlert} ">${model}</p>`;
                }
                update(model, classUpdate = '') {
                    let template = this.template(model, classUpdate);
                    this._elemento.html(template);
                }
            };
            exports_1("MensagemView", MensagemView);
        }
    };
});
