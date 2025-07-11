<?php
$pageTitle = "Error Codes Reference - Nexi Bot Documentation";
$pageDescription = "Complete reference guide for Nexi Bot error codes with solutions and troubleshooting steps.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Error Codes</h3>
                <ul>
                    <li><a href="#overview" class="active">Overview</a></li>
                    <li><a href="#system-errors">System Errors (SYS)</a></li>
                    <li><a href="#command-errors">Command Errors (CMD)</a></li>
                    <li><a href="#config-errors">Configuration Errors (CFG)</a></li>
                    <li><a href="#premium-errors">Premium Errors (PRM)</a></li>
                    <li><a href="#integration-errors">Integration Errors (INT)</a></li>
                    <li><a href="#quick-solutions">Quick Solutions</a></li>
                </ul>
            </div>
            
            <div class="content-main">
                <h1>Error Codes Reference</h1>
                <p>Comprehensive guide to all Nexi Bot error codes. Use this reference to quickly identify and resolve issues with your bot configuration and commands.</p>

                <div class="alert alert-info">
                    <strong>How to Use This Guide:</strong> Find your error code below and follow the recommended solution. If the issue persists after following the steps, contact our support team with the error code for faster assistance.
                </div>

                <h2 id="overview">Error Code Overview</h2>
                
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 1V5M12 19V23M4.22 4.22L7.05 7.05M16.95 16.95L19.78 19.78M1 12H5M19 12H23M4.22 19.78L7.05 16.95M16.95 7.05L19.78 4.22" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>System Errors (SYS)</h3>
                        <p>Core system issues including database connections, API failures, and general system errors.</p>
                        <span class="tag tag-system">5 Error Types</span>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Command Errors (CMD)</h3>
                        <p>Command execution failures, permission issues, and parameter validation errors.</p>
                        <span class="tag tag-command">5 Error Types</span>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7 6.3A1 1 0 0 0 13 5H6A1 1 0 0 0 5 6V18A1 1 0 0 0 6 19H18A1 1 0 0 0 19 18V11A1 1 0 0 0 17.7 9.7L14.7 6.3Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M14 2V8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 12H14M10 16H14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3>Configuration Errors (CFG)</h3>
                        <p>Setup and configuration issues including invalid values and permission problems.</p>
                        <span class="tag tag-config">7 Error Types</span>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L14.09 8.26L22 9L16 14.74L17.18 22.68L12 19.77L6.82 22.68L8 14.74L2 9L9.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Premium Errors (PRM)</h3>
                        <p>Premium subscription and licensing issues affecting premium features.</p>
                        <span class="tag tag-premium">4 Error Types</span>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 4H5c-1.11 0-2 .9-2 2v12c0 1.1.89 2 2 2h4v-2H5V8h14v10h-4v2h4c1.1 0 2-.9 2-2V6c0-1.1-.89-2-2-2zM12 10l-4 4h3v6h2v-6h3l-4-4z"/>
                            </svg>
                        </div>
                        <h3>Integration Errors (INT)</h3>
                        <p>External service integration failures including API key and connection issues.</p>
                        <span class="tag tag-integration">4 Error Types</span>
                    </div>
                </div>

                <h3>Error Severity Levels</h3>
                <div class="command-card">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Severity</th>
                                    <th>Description</th>
                                    <th>User Action</th>
                                    <th>Support Required</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="severity-low">● Low</span></td>
                                    <td>Minor issues, retry usually works</td>
                                    <td>Wait and retry</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td><span class="severity-medium">● Medium</span></td>
                                    <td>Configuration or permission issues</td>
                                    <td>Check settings, adjust permissions</td>
                                    <td>If issue persists</td>
                                </tr>
                                <tr>
                                    <td><span class="severity-high">● High</span></td>
                                    <td>Feature unavailable, service issues</td>
                                    <td>Check documentation, verify setup</td>
                                    <td>Yes, if not resolved</td>
                                </tr>
                                <tr>
                                    <td><span class="severity-critical">● Critical</span></td>
                                    <td>System failure, data corruption</td>
                                    <td>Stop using feature, backup data</td>
                                    <td>Immediate</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h2 id="system-errors">System Error Codes (SYS_XXX)</h2>
                <p>These errors relate to core system functionality and usually require no user action other than waiting and retrying.</p>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>SYS_001</h3>
                            <span class="severity-low">● Low</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">General system error or unknown interaction</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The bot encountered an unexpected error while processing your request. This is usually a temporary issue.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Wait 30 seconds and try the command again</li>
                            <li>If the error persists, try using the command in a different channel</li>
                            <li>Check if other commands are working normally</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if the error persists for more than 5 minutes or affects multiple commands.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>SYS_002</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Database connection failure</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The bot cannot connect to its database to save or retrieve information. This affects all data-dependent features.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Wait 1-2 minutes for the connection to restore</li>
                            <li>Avoid making configuration changes during this time</li>
                            <li>Check our status page for known issues</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if the database is unreachable for more than 5 minutes.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>SYS_003</h3>
                            <span class="severity-low">● Low</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">API rate limit exceeded</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The bot has hit Discord's rate limits due to high usage. This is a normal protective measure.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Wait 60 seconds before retrying the command</li>
                            <li>Avoid rapidly executing multiple commands</li>
                            <li>Space out command usage if you're testing features</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>No support needed - this is normal behavior to prevent abuse.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>SYS_004</h3>
                            <span class="severity-high">● High</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">External service unavailable</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>A third-party service that the bot depends on (like music sources or APIs) is currently unavailable.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check the service status page if known</li>
                            <li>Try alternative sources if available (e.g., different music platform)</li>
                            <li>Wait 15-30 minutes and retry</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if the service appears to be working but the error persists.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>SYS_005</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Discord interaction timeout</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The command took too long to process and Discord's 3-second timeout was exceeded.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Try the command again - it may work on retry</li>
                            <li>For complex commands, break them into smaller steps</li>
                            <li>Check if the command actually completed despite the error</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if commands consistently timeout or the bot seems unusually slow.</p>
                    </div>
                </div>

                <h2 id="command-errors">Command Error Codes (CMD_XXX)</h2>
                <p>These errors occur when commands fail to execute properly due to permissions, parameters, or command-specific issues.</p>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>CMD_001</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Command execution failed</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The command started but failed during execution, usually due to insufficient permissions or invalid targets.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check that the bot has the required permissions for this command</li>
                            <li>Verify the command parameters are correct</li>
                            <li>Ensure the target (user, channel, role) exists and is accessible</li>
                            <li>Check bot role hierarchy for moderation commands</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if permissions appear correct but the command still fails.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CMD_002</h3>
                            <span class="severity-low">● Low</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Invalid command parameters</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The command was provided with invalid, missing, or incorrectly formatted parameters.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Review the command syntax in our documentation</li>
                            <li>Check that all required parameters are provided</li>
                            <li>Verify parameter formats (numbers, dates, etc.)</li>
                            <li>Use Discord's auto-complete suggestions when available</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Check the documentation first. Contact support only if the syntax appears correct.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CMD_003</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Missing required permissions</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>Either you or the bot lacks the Discord permissions required to execute this command.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check that you have the required permission level for this command</li>
                            <li>Verify the bot has necessary permissions in the server</li>
                            <li>For moderation commands, ensure the bot role is above target roles</li>
                            <li>Check channel-specific permission overrides</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Admin action needed - contact your server administrator to grant required permissions.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CMD_004</h3>
                            <span class="severity-low">● Low</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Command cooldown active</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>You're trying to use a command that has a cooldown period to prevent spam or abuse.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Wait for the cooldown period to expire</li>
                            <li>The error message usually indicates how long to wait</li>
                            <li>Avoid rapidly repeating commands</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>This is normal behavior - no support needed.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CMD_005</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Command disabled in this server</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>This command has been disabled by the server administrators.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Ask a server administrator to enable the command</li>
                            <li>They can use <code>/config</code> to manage feature toggles</li>
                            <li>Check if there's an alternative command available</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Server admin action needed - contact your administrators.</p>
                    </div>
                </div>

                <h2 id="config-errors">Configuration Error Codes (CFG_XXX)</h2>
                <p>These errors occur during bot setup and configuration, usually requiring administrator intervention.</p>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>CFG_001</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Configuration load failed</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The bot cannot load the server configuration, possibly due to corruption or database issues.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Try the <code>/config</code> command again</li>
                            <li>Wait 2-3 minutes and retry</li>
                            <li>Check if other configuration commands work</li>
                            <li>Try accessing different configuration sections</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if the configuration consistently fails to load.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CFG_002</h3>
                            <span class="severity-low">● Low</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Invalid configuration value</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>A configuration value you entered is invalid or outside the acceptable range.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check the input format requirements</li>
                            <li>Verify numbers are within valid ranges</li>
                            <li>Ensure text fields don't exceed length limits</li>
                            <li>Use the configuration interface helpers when available</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if the value appears valid but is still rejected.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CFG_003</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Permission denied for configuration</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>You don't have the required permissions to modify bot configuration.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Ensure you have Administrator permission</li>
                            <li>Check if you're the server owner or have sufficient roles</li>
                            <li>Verify the bot recognizes your permissions</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Admin action needed - get Administrator permission from the server owner.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CFG_004</h3>
                            <span class="severity-high">● High</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Configuration save failed</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>Your configuration changes couldn't be saved to the database.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check database connection status</li>
                            <li>Wait 2-3 minutes and try saving again</li>
                            <li>Make smaller configuration changes if possible</li>
                            <li>Note down your changes in case you need to re-enter them</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if saves consistently fail after several attempts.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CFG_005</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Feature not available</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>You're trying to configure a feature that isn't available on your current plan.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check your premium status in <code>/config</code></li>
                            <li>Review what features are included in your plan</li>
                            <li>Consider upgrading to premium if needed</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Upgrade to premium if needed, or contact support if you believe you should have access.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CFG_006</h3>
                            <span class="severity-low">● Low</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Invalid API key format</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The API key you entered doesn't match the expected format for that service.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Verify the API key format with the service provider</li>
                            <li>Check for extra spaces or missing characters</li>
                            <li>Ensure you're using the correct key type (not client ID, etc.)</li>
                            <li>Generate a new API key if the current one appears corrupted</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Check the API provider documentation first. Contact support if format appears correct.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>CFG_007</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Configuration UI error</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The configuration interface encountered an error and cannot display properly.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Close the configuration panel and open it again</li>
                            <li>Try accessing configuration from a different channel</li>
                            <li>Clear your Discord cache if using desktop app</li>
                            <li>Try using the command from mobile or web Discord</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if the configuration UI consistently fails to load properly.</p>
                    </div>
                </div>

                <h2 id="premium-errors">Premium Error Codes (PRM_XXX)</h2>
                <p>These errors relate to premium subscription status and feature access.</p>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>PRM_001</h3>
                            <span class="severity-high">● High</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Premium verification failed</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The bot cannot verify your premium subscription status.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check your premium status in <code>/config</code></li>
                            <li>Wait 15 minutes after purchase for activation</li>
                            <li>Verify the subscription is active on the correct server</li>
                            <li>Check your payment method and subscription status</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support with your purchase receipt if verification continues to fail.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>PRM_002</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Premium feature locked</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>You're trying to access a feature that requires a premium subscription.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Review our premium features on the website</li>
                            <li>Consider upgrading to unlock advanced features</li>
                            <li>Use <code>/config</code> to see which features are available</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Purchase premium access to unlock this feature.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>PRM_003</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Premium subscription expired</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>Your premium subscription has expired and premium features are no longer accessible.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check your subscription status in customer portal</li>
                            <li>Renew your subscription to restore premium access</li>
                            <li>Your configuration is saved for 30 days for easy reactivation</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Purchase a new premium subscription to restore access.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>PRM_004</h3>
                            <span class="severity-critical">● Critical</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Invalid premium license</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>Your premium license appears to be invalid, possibly due to a billing issue or system error.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Do not attempt to use premium features</li>
                            <li>Check your payment method for issues</li>
                            <li>Gather your purchase receipts and transaction IDs</li>
                            <li>Contact support immediately</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Immediate support required - contact billing support with all payment details.</p>
                    </div>
                </div>

                <h2 id="integration-errors">Integration Error Codes (INT_XXX)</h2>
                <p>These errors occur when connecting to external services like Google Calendar, ERLC, or other APIs.</p>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>INT_001</h3>
                            <span class="severity-high">● High</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">API connection failed</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The bot cannot establish a connection to the external API service.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check the API key validity and format</li>
                            <li>Verify the API service is online and operational</li>
                            <li>Wait 15-30 minutes and retry</li>
                            <li>Check if you've exceeded API rate limits</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Verify with the API provider first. Contact our support if the service is operational.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>INT_002</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Invalid API credentials</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The API credentials you provided are incorrect or have been revoked.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Generate new API credentials from the service provider</li>
                            <li>Update the API keys in <code>/config</code> → "API Keys"</li>
                            <li>Verify the credentials have the required permissions</li>
                            <li>Check if the API key has expired</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact the API provider for credential issues. Contact us if credentials are valid but still rejected.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>INT_003</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">API quota exceeded</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>You've exceeded the usage limits for the external API service.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check your API usage limits with the provider</li>
                            <li>Wait until the quota resets (usually monthly)</li>
                            <li>Consider upgrading your API plan if needed</li>
                            <li>Reduce the frequency of API-dependent commands</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Upgrade your API plan with the provider if needed.</p>
                    </div>

                    <div class="command-card">
                        <div class="command-title">
                            <h3>INT_004</h3>
                            <span class="severity-medium">● Medium</span>
                        </div>
                        <div class="command-meta">
                            <div class="meta-item">
                                <span class="meta-label">Description:</span>
                                <span class="meta-value">Service temporarily unavailable</span>
                            </div>
                        </div>
                        
                        <h4>What This Means</h4>
                        <p>The external service is experiencing downtime or maintenance.</p>
                        
                        <h4>What to Do</h4>
                        <ol>
                            <li>Check the service provider's status page</li>
                            <li>Wait 15-30 minutes and retry</li>
                            <li>Use alternative features if available</li>
                            <li>Monitor service status for updates</li>
                        </ol>
                        
                        <h4>When to Contact Support</h4>
                        <p>Contact support if the service appears operational but integration fails for more than 2 hours.</p>
                    </div>
                </div>

                <h2 id="quick-solutions">Quick Solutions</h2>
                
                <div class="command-card">
                    <h3>Most Common Solutions</h3>
                    
                    <h4>General Troubleshooting</h4>
                    <ol>
                        <li><strong>Wait and Retry:</strong> Many errors are temporary - wait 30-60 seconds</li>
                        <li><strong>Check Permissions:</strong> Ensure bot has required Discord permissions</li>
                        <li><strong>Verify Configuration:</strong> Use <code>/config</code> to check settings</li>
                        <li><strong>Check Status:</strong> Visit our status page for known issues</li>
                    </ol>
                    
                    <h4>Permission Issues</h4>
                    <ul>
                        <li>Ensure bot role is high in the hierarchy</li>
                        <li>Grant "Administrator" permission for full functionality</li>
                        <li>Check channel-specific permission overrides</li>
                        <li>Verify user permissions match command requirements</li>
                    </ul>
                    
                    <h4>Premium Issues</h4>
                    <ul>
                        <li>Wait 15 minutes after purchase for activation</li>
                        <li>Check subscription status in customer portal</li>
                        <li>Verify payment method is valid and charged successfully</li>
                        <li>Contact billing support with transaction details</li>
                    </ul>
                    
                    <h4>Integration Issues</h4>
                    <ul>
                        <li>Regenerate API keys from the service provider</li>
                        <li>Check API service status pages</li>
                        <li>Verify API quota and usage limits</li>
                        <li>Update credentials in <code>/config</code></li>
                    </ul>
                </div>

                <div class="alert alert-success">
                    <h4>Still Need Help?</h4>
                    <p>If you can't resolve the issue using this guide, our support team is here to help:</p>
                    
                    <ul>
                        <li><strong>Discord:</strong> Join our <a href="https://discord.gg/nexibot" target="_blank">support server</a></li>
                        <li><strong>Email:</strong> <a href="mailto:info@nexibot.uk">info@nexibot.uk</a></li>
                        <li><strong>Include:</strong> Error code, what you were trying to do, and any relevant details</li>
                    </ul>
                    
                    <div style="margin-top: 20px;">
                        <a href="https://discord.gg/nexibot" class="btn btn-primary" target="_blank">Get Support</a>
                        <a href="/troubleshooting" class="btn btn-secondary">Troubleshooting Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.tag {
    display: inline-block;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-top: 10px;
}

.tag-system {
    background: rgba(88, 101, 242, 0.2);
    color: var(--primary-color);
}

.tag-command {
    background: rgba(87, 242, 135, 0.2);
    color: var(--success-color);
}

.tag-config {
    background: rgba(250, 166, 26, 0.2);
    color: var(--warning-color);
}

.tag-premium {
    background: rgba(255, 215, 0, 0.2);
    color: var(--premium-color);
}

.tag-integration {
    background: rgba(237, 66, 69, 0.2);
    color: var(--error-color);
}

.severity-low {
    color: var(--success-color);
}

.severity-medium {
    color: var(--warning-color);
}

.severity-high {
    color: #ff8c00;
}

.severity-critical {
    color: var(--error-color);
}

.command-card h4 {
    margin-top: 20px;
    margin-bottom: 10px;
}

.command-card ol, .command-card ul {
    margin-bottom: 15px;
}
</style>

<?php include 'includes/footer.php'; ?>
