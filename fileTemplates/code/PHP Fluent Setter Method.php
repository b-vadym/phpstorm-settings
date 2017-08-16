/**
 * @param ${TYPE_HINT} $value
 * @return $this
 */
public function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #else#end$value)#if(${RETURN_TYPE}): ${CLASS_NAME}#else#end
{
    $this->${FIELD_NAME} = $value;

    return $this;
}
