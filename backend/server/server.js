'use strict';

var loopback = require('loopback');
var boot = require('loopback-boot');

var app = module.exports = loopback();

app.start = function() {
  // start the web server
  return app.listen(function() {
    app.emit('started');
    var baseUrl = app.get('url').replace(/\/$/, '');
    console.log('Web server listening at: %s', baseUrl);
    if (app.get('loopback-component-explorer')) {
      var explorerPath = app.get('loopback-component-explorer').mountPath;
      console.log('Browse your REST API at %s%s', baseUrl, explorerPath);
    }
  });
};

// Bootstrap the application, configure models, datasources and middleware.
// Sub-apps like REST API are mounted via boot scripts.
boot(app, __dirname, function(err) {
  if (err) throw err;

  app.dataSources.sqliteDS.autoupdate('contact', function(err) { if (err) throw err; })
  app.dataSources.sqliteDS.autoupdate('group', function(err) { if (err) throw err; })

  // ds.isActual(models, function(err, actual) {
  //   if (!actual) {
  //     ds.autoupdate(models, function(err, result) {
  //     });
  //   }
  // });

  // start the server if `$ node server.js`
  if (require.main === module)
    app.start();
});
