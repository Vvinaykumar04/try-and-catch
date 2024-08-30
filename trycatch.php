<?php

    use Exception
    use Illuminate\Support\Facades\Log; 
    use Illuminate\Database\QueryException;  

    public function switch_provider(Request $request){ 

        try { 

        }catch (QueryException $e) {
            Log::error('Database query error: ' . $e->getMessage());
            $response['status'] = 0;
            return response($response);
            }
        catch (Exception $e) {
            Log::error('General error: ' . $e->getMessage());
            $response['status'] = 0;
            return response($response);
        } 
    }
?>