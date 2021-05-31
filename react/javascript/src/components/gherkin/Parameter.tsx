import React from 'react'
import {
  DefaultComponent,
  ParameterClasses,
  ParameterProps,
  useCustomRendering,
} from '../customise/CustomRendering'
import defaultStyles from './Parameter.module.scss'

const DefaultRenderer: DefaultComponent<ParameterProps, ParameterClasses> = ({
  parameterTypeName,
  children,
  styles,
}) => {
  return (
    <span title={parameterTypeName} className={styles.parameter}>
      {children}
    </span>
  )
}

const Parameter: React.FunctionComponent<ParameterProps> = (props) => {
  const ResolvedRenderer = useCustomRendering<ParameterProps, ParameterClasses>(
    'Parameter',
    defaultStyles,
    DefaultRenderer
  )
  return <ResolvedRenderer {...props} />
}

export default Parameter
