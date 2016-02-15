define(['backbone'], function(Backbone){
    return Backbone.Router.extend({

        routes: {
            "":                  "index",
            "album/:id":         "album",
            "album/:id/:page":   "album"
        },

        index: function(){
            //
        },

        album: function(albumId, page){
            //
        }
    })
});