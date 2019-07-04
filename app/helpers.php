<?php
/**
 * custom message error for response
 */
if (! function_exists('getErrorValidatorForJsonResponse')) {
    function getErrorValidatorForJsonResponse($validator) {
        $messages = $validator->errors()->messages();
        $result = [];
        foreach ($messages as $key => $value) {
            $result[$key] = $value[0];
        }
        return $result;
    }
}