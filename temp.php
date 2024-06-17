
<?php

                          // Load field settings and values.
                          $field = get_field_object('lang_check');
                          $langs = $field['value'];

                          // Display labels.
                          if( $langs ): ?>
                          <ul>
                              <?php foreach( $langs as $lang ): ?>
                                  <li><?php echo $field['choices'][ $lang ]; ?></li>
                              <?php endforeach; ?>
                          </ul>
                          <?php endif; ?>