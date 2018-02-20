module.exports = {

  friendlyName: 'Get login URL',
  description: 'Get the URL on Spotify that a user should visit to authorize the specified Spotify app (i.e. your app).',

  extendedDescription: 'This is the URL where you typically redirect a user in order for them to grant access to your Spotify app.',

  cacheable: true,

  inputs: {
    clientId: {
      example: 'abc123jdhs3h4js',
      description: 'The clientId for your Spotify app. The client ID provided to you by Spotify when you register your application.',
      required: true
    },
    redirectUri: {
      example: 'https://example.com/callback?code=NApCCg..BkWtQ&state=profile%2Factivity',
      description: 'The URI to redirect to after the user grants/denies permission. This URI needs to have been entered in the Redirect URI whitelist that you specified when you registered your application.',
      required: true
    },
    responseType: {
      example: ['code'],
      description: '(code, token_and_code)'
    },
    state:{
      example:'34fFs29kd09',
      description:'The state can be useful for correlating requests and responses. Because your redirect_uri can be guessed, using a state value can increase your assurance that an incoming connection is the result of an authentication request. If you generate a random string or encode the hash of some client state (e.g., a cookie) in this state variable, you can validate the response to additionally ensure that the request and response originated in the same browser.',
    },
    scope: {
      example: '*',
      description: 'A space-separated list of scopes: see Using Scopes. If no scopes are specified, authorization will be granted only to access publicly available information: that is, only information normally visible in the Spotify desktop, web and mobile players. '
    },
    dialog: {
      example: 'false',
      description: 'Whether or not to force the user to approve the app again if they’ve already done so. If false (default), a user who has already approved the application may be automatically redirected to the URI specified by redirect_uri. If true, the user will not be automatically redirected and will have to approve the app again.'
    }
  },

  defaultExit: 'success',

  catchallExit: 'error',

  exits: {
    error: {
      description: 'Triggered when the Spotify API returns an error (i.e. a non-2xx status code)'
    },
    success: {
      example: 'https://accounts.spotify.com/authorize/?client_id=5fe01282e44241328a84e7c5cc169165&response_type=code&redirect_uri=https%3A%2F%2Fexample.com%2Fcallback&scope=user-read-private%20user-read-email&state=34fFs29kd09'
    }
  },

  fn: function (inputs, exits) {

    var util = require('util');
    var url = 'https://accounts.spotify.com';
    inputs.scope = inputs.scope || [];

    // Generate a semi-random string to use for the state
    var state = (Math.random() + 1).toString(36).substring(7);

    try {
      return exits.success(util.format(
        'https://accounts.spotify.com/authorize/?client_id=%s&response_type=%s&redirect_uri=%s&scope=%s&state=%s',
        inputs.clientId, inputs.responseType, inputs.redirectUri, inputs.scope, state
      ));
    }
    catch(e) {
      return exits.error(e);
    }
  }
};
