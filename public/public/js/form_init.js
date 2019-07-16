$(function(){
    $("select").select2();
    UE.Editor.prototype._bkGetActionUrl = UE.Editor.prototype.getActionUrl;
    UE.Editor.prototype.getActionUrl = function(action) {
        if (action == 'uploadimage') {
            return '/uploadImage';
        } else if (action == 'uploadscrawl') {
            return '/uploadScrawl';
        } else {
            return this._bkGetActionUrl.call(this, action);
        }
    }
    var text = $('.fulltext');
    for(var i=0;i<text.length;i++){
        var ue = UE.getEditor(text.eq(i).attr('id'));
        ue.ready(function() {
            this.execCommand('serverparam', '_token', token);
        });
    }   
})