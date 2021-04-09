<?php

namespace App\Traits;

use Carbon\Carbon;

trait ApiResponser{

	protected function token($personalAccessToken)
	{
		$user = auth()->user();

		$tokenData = [
			'access_token' => $personalAccessToken->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($personalAccessToken->token->expires_at)->toDateTimeString(),
            'user' => array(
				'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'username' => $user->username
                )
        ];

		return $this->success($tokenData);
	}
	
    protected function success($data)
	{
		return response()->json($data);
	}

	protected function error($message = null, $code)
	{
		return response()->json([
			'status'=>'Error',
			'message' => $message,
			'data' => null
		], $code);
	}

}