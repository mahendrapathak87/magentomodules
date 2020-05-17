define(['uiComponent','jquery'], function(Component,$){
    
    const query = `
{
	demoModelData  {
    modelData
  }
}`;
    return Component.extend({
        defaults: {
            tracks: {
                result: true
            }
        },
        initialize: function(){
            const customQuery ={
                query: query
            }
           
            new Promise((resolve,reject)=>{
                $.ajax({
                   url: '/graphql',
                   contentType: 'application/json',
                   dataType: 'json',
                   method: 'POST',
                   data: JSON.stringify(customQuery),
                   success: resolve,
                   error: reject
                });
            }).then(data =>this.result = data)
              .catch(console.error);
            return this._super();
        }
    });
});