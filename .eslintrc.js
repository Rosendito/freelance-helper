module.exports = {
  env: {
    node: true,
  },
  extends: ['eslint:recommended', 'plugin:vue/vue3-recommended', 'prettier'],
  rules: {
    // override/add rules settings here, such as:
    'vue/multi-word-component-names': 'off',
    'vue/require-default-prop': 'off',
    'no-func-assign': 'off',
    'no-unused-vars': 'off',
    'no-undef': 'off',
    'no-prototype-builtins': 'off'
  },
}
