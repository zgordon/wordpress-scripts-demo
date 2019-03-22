import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { TextControl } from '@wordpress/components';

export default registerBlockType( 'jsforwpadvgb/shoutout' , {
  title: __( 'Shoutout', 'jsforwpadvblocks' ),
  description: __( 'Shoutout', 'jsforwpadvblocks' ),
  category: 'common',
  icon: 'star-filled',
  keywords: [ 'CTA Call to Action Random' ],
  attributes: {
    message: {
      type: 'string',
      default: 'Edit me!'
    }
  },
  edit: ({ setAttributes, attributes: { message }}) => {
    return (
      <TextControl
        label={__('Edit field', 'jsforwpadvblocks')}
        value={message}
        onChange={message => {
          setAttributes({ message });
        }}
      />
    );
  },
  save: props => {
    return <p>{props.attributes.message}</p>;
  }
});
