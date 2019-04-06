CKEDITOR.dialog.add('alertsDialog', function (editor) {
    return {
        title: 'Inserting Bootstrap Alerts',
        minWidth: 400,
        minHeight: 200,
        contents: [
            {
                id: 'tab-basic',
                label: 'Settings',
                elements: [
                    {
                        type: 'textarea',
                        id: 'alerts',
                        label: 'Text on alerts',
                        cols: 5,
                        rows: 3,
                        validate: CKEDITOR.dialog.validate.notEmpty("Textarea can't be empty."),
                        /*setup: function (element) {							
                            this.setValue(element.getText());
                        },*/
                        commit: function (element) {							    					
                            element.setText(this.getValue());
                        }
                },
                    {
                        type: 'radio',
                        id: 'alertsclass',
                        label: 'Select Alert', 
                        items: [['success', 'alert alert-success'], ['info', 'alert alert-info'], ['warning', 'alert alert-warning'], ['danger', 'alert alert-danger']],
                        'default': 'alert alert-info',
                        /*setup: function (element) {
                            this.setValue(element.getAttribute("alertsclass"));
                        },*/
                        commit: function (element) {
                            element.setAttribute("class", this.getValue());
                        }
                        
                },                    
                    {
                        id: 'width',
                        type: 'text',
                        label: 'Width',
                        width: '100px',
                        'default': '100%',
                        validate: CKEDITOR.dialog.validate.notEmpty("Width cannot be empty."),
                        /*setup: function (element) {
                            this.setValue(element.getAttribute("width"));
                        },*/
                        commit: function (element) {
                            element.setAttribute('style', 'width:' + this.getValue());
                        },
                }
            ],
          },
        ],
        onShow: function () {
            var selection = editor.getSelection();
            var element = selection.getStartElement();

            if (element)
                element = element.getAscendant('alerts', true);

            if (!element || element.getName() != 'alerts') {            	
				element = editor.document.createElement('div');	
                this.insertMode = true;
            } else
                this.insertMode = false;

            this.element = element;
            if (!this.insertMode)
                this.setupContent(this.element);			
        },
        onOk: function () {
            var dialog = this;
            var alerts = this.element;
            this.commitContent(alerts);

            if (this.insertMode)
                editor.insertElement(alerts);
        }
    };
});