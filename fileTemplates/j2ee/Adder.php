/**
 * @param ${TYPE_HINT} $value
 * @return $this
 */
public function ${METHOD_NAME}(${TYPE_HINT} $value)
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}->add($value);
    // uncomment if you want to update other side
    //${PARAM_NAME}->set${THIS_CLASS_NAME}($value);
#else
    $this->${FIELD_NAME}[] = $value;
#end
    return $this;
}
