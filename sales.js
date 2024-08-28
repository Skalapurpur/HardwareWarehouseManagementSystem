var lv,
    formatDate = mobiscroll.util.datetime.formatDate;

lv = mobiscroll.listview('#demo', {
    theme: 'windows',
    themeVariant: 'light',
    stages: [{
        percent: -25,
        color: 'red',
        text: 'Delete',
        confirm: true,
        action: function(event, inst) {
            inst.remove(event.target);
            return false;
        }
    }, {
        percent: 25,
        color: 'green',
        text: 'Update',
        action: function(event, inst) {
            event.target.querySelector('.md-timestamp').innerHTML = formatDate('DD d hh:ii:ss A', new Date());
        }
    }]
});

document.getElementById('add').addEventListener('click', function() {
    mobiscroll.prompt({
        title: 'New item',
        message: 'Enter a description and add it to the list of existing tasks.',
        placeholder: 'What to do next...',
        callback: function(value) {
            if (value !== null) {
                lv.add(null, mobiscroll.$('<li>' + (value ? value : 'New item') + '<div class="md-timestamp mbsc-italic">' + formatDate('DD d hh:ii:ss A', new Date()) + '</div></li>'));

                mobiscroll.toast({
                    message: 'New item added'
                });
            }
        }
    });
});

document.querySelectorAll('.md-timestamp').forEach(function(elm) {
    elm.innerHTML = formatDate('DD d hh:ii:ss A', new Date());
});