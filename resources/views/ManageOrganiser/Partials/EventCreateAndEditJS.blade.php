<link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
<script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
<script>
    $(function() {
        try {
            $(".geocomplete").geocomplete({
                    details: "form.gf",
                    types: ["geocode", "establishment"]
                }).bind("geocode:result", function(event, result) {
                    console.log(result);
            }, 1000);

        } catch (e) {
            console.log(e);
        }

        $('.editable').each(function() {
            var easyMDE = new EasyMDE({
                element: this,
                spellChecker: false,
                status: false
            });
        })

        // $("#DatePicker").remove();
        // var $div = $("<div>", {id: "DatePicker"});
        // $("body").append($div);
        // $div.DateTimePicker({
        //     dateTimeFormat: window.Attendize.DateTimeFormat,
        //     dateSeparator: window.Attendize.DateSeparator
        // });

    });
</script>
<style>
    .editor-toolbar {
        border-radius: 0 !important;
    }
    .CodeMirror, .CodeMirror-scroll {
        min-height: 100px !important;
    }

    .create_organiser, .address-manual {
        padding: 10px;
        border: 1px solid #ddd;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: #FAFAFA;
    }

    .in-form-link {
        display: block; padding: 5px;margin-bottom: 5px;padding-left: 0;
    }
</style>
