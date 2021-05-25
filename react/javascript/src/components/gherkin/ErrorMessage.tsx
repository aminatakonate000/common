import React from 'react'
import defaultStyles from './ErrorMessage.module.scss'
import {
  DefaultComponent,
  ErrorMessageClasses,
  ErrorMessageProps,
  useCustomRendering,
} from '../customise/CustomRendering'

const DefaultRenderer: DefaultComponent<ErrorMessageProps, ErrorMessageClasses> = ({
  message,
  styles,
}) => {
  return <pre className={styles.message}>{message}</pre>
}

const ErrorMessage: React.FunctionComponent<ErrorMessageProps> = (props) => {
  const ResolvedRenderer = useCustomRendering<ErrorMessageProps, ErrorMessageClasses>(
    'ErrorMessage',
    defaultStyles,
    DefaultRenderer
  )
  return <ResolvedRenderer {...props} />
}

export default ErrorMessage
