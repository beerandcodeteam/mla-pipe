<?php

$folders = PhpCsFixer\Finder::create()
    ->in('app/', 'tests/', 'database/', 'routes/');

$config = new PhpCsFixer\Config();

return $config
    ->registerCustomFixers([
        new \Tombenevides\DumpLinter\DumpRemovalFixer()
    ])
    ->setRiskyAllowed(true)
    ->setRules([
            '@PSR12' => true,
            'no_trailing_comma_in_singleline' => true,
            'Tombenevides/dump_removal' => true,
            //WHITESPACES
            'method_chaining_indentation' => true,
            'no_extra_blank_lines' => true,
            'no_spaces_around_offset' => true,
            'types_spaces' => true,
            //STRING NOTATION
            'explicit_string_variable' => true,
            'simple_to_complex_string_variable' => true,
            'single_quote' => true,
            //SEMICOLON
            'multiline_whitespace_before_semicolons' => true,
            'no_empty_statement' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'space_after_semicolon' => true,
            //RETURN NOTATION
            'return_assignment' => true,
            'simplified_null_return' => true,
            //OPERATOR
            'assign_null_coalescing_to_coalesce_equal' => true,
            'increment_style' => ['style' => 'post'],
            'object_operator_without_whitespace' => true,
            'operator_linebreak' => true,
            'ternary_to_null_coalescing' => true,
            'unary_operator_spaces' => true,
            //NAMESPACE NOTATION
            'blank_line_after_namespace' => true,
            'clean_namespace' => true,
            'no_leading_namespace_whitespace' => true,
            //LIST NOTATION
            'list_syntax' => ['syntax' => 'short'],
            //LANGUAGE CONSTRUCT
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'declare_equal_normalize' => ['space' => 'none'],
            'declare_parentheses' => true,
            'explicit_indirect_variable' => true,
            'single_space_after_construct' => true,
            //IMPORT
            'fully_qualified_strict_types' => true,
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => true
            ],
            'no_unneeded_import_alias' => true,
            'no_unused_imports' => true,
            'ordered_imports' => [
                'imports_order' => ['class', 'function', 'const'],
                'sort_algorithm' => 'alpha'
            ],
            'single_import_per_statement' => true,
            //FUNCTION NOTATION
            'function_typehint_space' => true,
            'lambda_not_used_import' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'single_line_throw' => true,
            //CONTROL STRUCTURE
            'control_structure_continuation_position' => true,
            'empty_loop_body' => ['style' => 'braces'],
            'empty_loop_condition' => true,
            'include' => true,
            'no_superfluous_elseif' => true,
            'no_unneeded_curly_braces' => true,
            'no_useless_else' => true,
            'simplified_if_return' => true,
            'switch_continue_to_break' => true,
            'trailing_comma_in_multiline' => [
                'elements' => ['arrays','arguments']
            ],
            'yoda_style' => true,
            //COMMENT
            'multiline_comment_opening_closing' => true,
            'no_empty_comment' => true,
            'single_line_comment_spacing' => true,
            'single_line_comment_style' => true,
            //CLASS NOTATION
            'class_attributes_separation' => [
                'elements' => [
                    'const' => 'one',
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                    'case' => 'none'
                ],
            ],
            'class_definition' => true,
            'no_null_property_initialization' => true,
            'ordered_class_elements' => ['sort_algorithm' => 'alpha'],
            'self_static_accessor' => true,
            'single_class_element_per_statement' => true,
            //CAST NOTATION
            'cast_spaces' => true,
            'no_short_bool_cast' => true,
            //CASING
            'class_reference_name_casing' => true,
            'integer_literal_case' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'native_function_casing' => true,
            'native_function_type_declaration_casing' => true,
            //ARRAY NOTATION
            'array_syntax' => ['syntax' => 'short'],
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_whitespace_before_comma_in_array' => true,
            'normalize_index_brace' => true,
            'trim_array_spaces' => true,
            'whitespace_after_comma_in_array' => true,
            //ALIAS
            'backtick_to_shell_exec' => true,
            'no_mixed_echo_print' => true,
        ])
    ->setFinder($folders);