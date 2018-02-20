module.exports = {


  friendlyName: 'Get Access Token',


  description: 'Get access token to use with requests to Spotify Web API.',


  extendedDescription: 'Get access token using your Client ID and Client Secret for use with requests to Spotify Web API.',


  inputs: {
    clientId: {
      example: 'abc123jdhs3h4js',
      description: 'The clientId for your Spotify app. The client ID provided to you by Spotify when you register your application.',
      required: true
    },
    clientSecret:{
      example:'87kljf66jlf9jj98q89f7s8i',
      description:'Secure key for your Spotify App.',
      required:true
    }
  },


  defaultExit: 'success',


  exits: {

    error: {
      description: 'Triggered when the Spotify API returns an error (i.e. a non-2xx status code)',
    },

    success: {
      description: '{"access_token":"NgCXRKc...MzYjw", "token_type":"bearer", "expires_in":"3600"}',
    },

  },


  fn: function (inputs,exits) {
    var request = require('request'); // "Request" library

    var redirect_uri = 'http://localhost:8888/callback'; // Your redirect uri

    // your application requests authorization
    var authOptions = {
      url: 'https://accounts.spotify.com/api/token',
      headers: {
        'Authorization': 'Basic ' + (new Buffer(inputs.clientId + ':' + inputs.clientSecret).toString('base64'))
      },
      form: {
        grant_type: 'client_credentials'
      },
      json: true
    };

    request.post(authOptions, function(error, response, body) {
      if (!error && response.statusCode === 200) {
        // Return token to access the Spotify Web API
        return exits.success(body.access_token);
      } else {
        return exits.error(error)
      }
    });
  },



};
