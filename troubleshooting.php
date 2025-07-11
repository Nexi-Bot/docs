<?php
$pageTitle = "Troubleshooting Guide - Nexi Bot Documentation";
$pageDescription = "Comprehensive troubleshooting guide for common Nexi Bot issues with step-by-step solutions.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Troubleshooting</h3>
                <ul>
                    <li><a href="#overview" class="active">Overview</a></li>
                    <li><a href="#common-issues">Common Issues</a></li>
                    <li><a href="#performance">Performance Issues</a></li>
                    <li><a href="#integrations">Integration Problems</a></li>
                    <li><a href="#premium-issues">Premium Issues</a></li>
                    <li><a href="#diagnostic-tools">Diagnostic Tools</a></li>
                    <li><a href="#contact-support">Contact Support</a></li>
                </ul>
            </div>
            
            <div class="content-main">
                <h1>Troubleshooting Guide</h1>
                <p>Comprehensive guide to resolving common issues with Nexi Bot. Follow these step-by-step solutions to get your bot working perfectly.</p>

                <div class="alert alert-info">
                    <strong>Quick Start:</strong> Try the most common solutions first: check permissions, wait and retry, or restart the bot feature. If issues persist, follow the detailed guides below.
                </div>

                <h2 id="overview">Troubleshooting Overview</h2>
                
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
                            </svg>
                        </div>
                        <h3>Before You Start</h3>
                        <p>Essential checks to perform before diving into specific troubleshooting steps.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                            </svg>
                        </div>
                        <h3>Diagnostic Steps</h3>
                        <p>Systematic approach to identifying the root cause of your issue.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7 6.3A1 1 0 0 0 13 5H6A1 1 0 0 0 5 6V18A1 1 0 0 0 6 19H18A1 1 0 0 0 19 18V11A1 1 0 0 0 17.7 9.7L14.7 6.3Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M14 2V8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 12H14M10 16H14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3>Common Solutions</h3>
                        <p>Proven fixes for the most frequently encountered problems.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
                            </svg>
                        </div>
                        <h3>When to Get Help</h3>
                        <p>Know when to escalate to our support team for assistance.</p>
                    </div>
                </div>

                <h3>Pre-Troubleshooting Checklist</h3>
                <div class="command-card">
                    <h4>Essential Checks</h4>
                    <ol>
                        <li><strong>Bot Status:</strong> Is the bot online and responding?</li>
                        <li><strong>Permissions:</strong> Does the bot have required permissions?</li>
                        <li><strong>Recent Changes:</strong> Have you changed any settings recently?</li>
                        <li><strong>Server Issues:</strong> Are other bots working normally?</li>
                        <li><strong>Error Messages:</strong> Are you receiving any error codes?</li>
                    </ol>
                    
                    <div class="alert alert-warning">
                        <strong>Wait Before Troubleshooting:</strong> Many issues resolve themselves within 2-3 minutes. Try waiting and retrying before starting complex troubleshooting.
                    </div>
                </div>

                <h2 id="common-issues">Common Issues and Solutions</h2>

                <h3>Bot Not Responding</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>Slash commands don't appear or work</li>
                        <li>Bot appears offline or idle</li>
                        <li>No response to any commands</li>
                        <li>Bot seems to ignore mentions</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Check Bot Status:</strong>
                            <ul>
                                <li>Look for the green "Online" indicator next to the bot</li>
                                <li>If offline, check our status page for downtime</li>
                                <li>Try mentioning the bot: <code>@Nexi Bot ping</code></li>
                            </ul>
                        </li>
                        
                        <li><strong>Verify Permissions:</strong>
                            <ul>
                                <li>Ensure bot has "Administrator" permission (recommended)</li>
                                <li>Check specific permissions: Read Messages, Send Messages, Use Slash Commands</li>
                                <li>Verify channel-specific permission overrides</li>
                            </ul>
                        </li>
                        
                        <li><strong>Command Sync Issues:</strong>
                            <ul>
                                <li>Wait 5-10 minutes for Discord to sync commands</li>
                                <li>Try using commands in different channels</li>
                                <li>Leave and re-invite the bot if commands still don't appear</li>
                            </ul>
                        </li>
                        
                        <li><strong>Server-Specific Issues:</strong>
                            <ul>
                                <li>Check if other bots work normally</li>
                                <li>Test commands in DMs with the bot</li>
                                <li>Try creating a temporary channel for testing</li>
                            </ul>
                        </li>
                    </ol>
                    
                    <div class="alert alert-error">
                        <strong>Still Not Working?</strong> If the bot remains unresponsive after these steps, check our status page and contact support if there are no known issues.
                    </div>
                </div>

                <h3>Commands Not Working</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>Specific commands fail or show errors</li>
                        <li>Commands work sometimes but not others</li>
                        <li>Error messages appear when using commands</li>
                        <li>Commands are slow to respond</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Check Command Syntax:</strong>
                            <ul>
                                <li>Verify you're using the correct command format</li>
                                <li>Check our <a href="/commands">commands reference</a> for proper syntax</li>
                                <li>Use Discord's auto-complete suggestions</li>
                                <li>Ensure all required parameters are provided</li>
                            </ul>
                        </li>
                        
                        <li><strong>Permission Verification:</strong>
                            <ul>
                                <li>Check if you have the required permission level for the command</li>
                                <li>For moderation commands, ensure bot role is above target roles</li>
                                <li>Verify bot has specific permissions (e.g., Manage Roles for role commands)</li>
                            </ul>
                        </li>
                        
                        <li><strong>Feature Configuration:</strong>
                            <ul>
                                <li>Use <code>/config</code> to check if the feature is enabled</li>
                                <li>Verify necessary channels and roles are configured</li>
                                <li>Check if the command requires premium and your subscription status</li>
                            </ul>
                        </li>
                        
                        <li><strong>Cooldowns and Limits:</strong>
                            <ul>
                                <li>Wait for command cooldowns to expire</li>
                                <li>Check if you've hit rate limits (usually shows in error message)</li>
                                <li>Avoid rapidly repeating commands</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h3>Music Not Playing</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>Bot joins voice channel but no audio plays</li>
                        <li>Music commands fail or timeout</li>
                        <li>Audio is choppy or low quality</li>
                        <li>Bot leaves voice channel immediately</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Voice Channel Requirements:</strong>
                            <ul>
                                <li>Ensure bot has "Connect" and "Speak" permissions in voice channel</li>
                                <li>Check if voice channel has a user limit (bot needs a free slot)</li>
                                <li>Try different voice channels to isolate the issue</li>
                                <li>Verify you're in a voice channel when starting music</li>
                            </ul>
                        </li>
                        
                        <li><strong>Music Source Issues:</strong>
                            <ul>
                                <li>Try different music sources (YouTube, Spotify, etc.)</li>
                                <li>Verify the song/video is available in your region</li>
                                <li>Check if the source has age restrictions</li>
                                <li>Try searching with different keywords</li>
                            </ul>
                        </li>
                        
                        <li><strong>Audio Configuration:</strong>
                            <ul>
                                <li>Check volume level with <code>/music volume</code></li>
                                <li>Verify server region supports audio (some regions have issues)</li>
                                <li>Try resetting audio effects if using premium features</li>
                            </ul>
                        </li>
                        
                        <li><strong>Queue Management:</strong>
                            <ul>
                                <li>Clear the queue and try playing a single song</li>
                                <li>Check if the queue is too long (premium has higher limits)</li>
                                <li>Restart the music session with <code>/music stop</code> then <code>/music play</code></li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h3>Moderation Features Not Working</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>Auto-moderation not triggering</li>
                        <li>Kick/ban commands fail</li>
                        <li>Mute commands don't work</li>
                        <li>Moderation logs not appearing</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Role Hierarchy:</strong>
                            <ul>
                                <li>Move bot role higher in the server role list</li>
                                <li>Bot role must be above roles it needs to moderate</li>
                                <li>Ensure bot role is below only admin/owner roles</li>
                                <li>Check role hierarchy in Server Settings → Roles</li>
                            </ul>
                        </li>
                        
                        <li><strong>Permissions Setup:</strong>
                            <ul>
                                <li>Grant "Moderate Members" permission to the bot</li>
                                <li>Verify "Manage Roles" permission for mute functionality</li>
                                <li>Check channel-specific permission overrides</li>
                                <li>Ensure bot can read/send messages in log channels</li>
                            </ul>
                        </li>
                        
                        <li><strong>Configuration Check:</strong>
                            <ul>
                                <li>Use <code>/config</code> to verify moderation is enabled</li>
                                <li>Set up moderation log channel if not configured</li>
                                <li>Check auto-moderation rules and sensitivity settings</li>
                                <li>Verify muted role exists and is properly configured</li>
                            </ul>
                        </li>
                        
                        <li><strong>Target Verification:</strong>
                            <ul>
                                <li>Ensure target users aren't server owners (can't be moderated)</li>
                                <li>Check if target users have roles higher than the bot</li>
                                <li>Verify users are still in the server when moderating</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h2 id="performance">Performance Issues</h2>

                <h3>Slow Response Times</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>Commands take several seconds to respond</li>
                        <li>Bot appears to be lagging</li>
                        <li>Timeouts when using complex commands</li>
                        <li>Music playback is choppy</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Check Server Load:</strong>
                            <ul>
                                <li>Use commands during off-peak hours</li>
                                <li>Check Discord's status page for API issues</li>
                                <li>Monitor if slowness affects all servers or just yours</li>
                            </ul>
                        </li>
                        
                        <li><strong>Reduce Command Frequency:</strong>
                            <ul>
                                <li>Avoid rapid-fire command usage</li>
                                <li>Space out commands by 2-3 seconds</li>
                                <li>Use batch operations when available</li>
                            </ul>
                        </li>
                        
                        <li><strong>Premium Benefits:</strong>
                            <ul>
                                <li>Premium users get priority processing</li>
                                <li>Consider upgrading for better performance</li>
                                <li>Premium servers have dedicated resources</li>
                            </ul>
                        </li>
                        
                        <li><strong>Server Optimization:</strong>
                            <ul>
                                <li>Reduce active features temporarily</li>
                                <li>Clear large music queues</li>
                                <li>Disable unnecessary logging</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h3>Memory and Resource Issues</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>Bot restarts frequently</li>
                        <li>Commands fail with system errors</li>
                        <li>Features become unavailable</li>
                        <li>Data not saving properly</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Contact Support for Restart:</strong>
                            <ul>
                                <li>If you suspect memory issues, contact support</li>
                                <li>We can restart the bot instance for your server</li>
                                <li>Provide details about what features you were using</li>
                            </ul>
                        </li>
                        
                        <li><strong>Reduce Active Features:</strong>
                            <ul>
                                <li>Temporarily disable unused features</li>
                                <li>Clear large data sets (playlists, queues)</li>
                                <li>Reduce logging verbosity</li>
                            </ul>
                        </li>
                        
                        <li><strong>Premium Resources:</strong>
                            <ul>
                                <li>Premium servers get more allocated resources</li>
                                <li>Consider upgrading for resource-heavy usage</li>
                                <li>Premium features are optimized for performance</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h2 id="integrations">Integration Troubleshooting</h2>

                <h3>API Key Issues</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>External service features not working</li>
                        <li>Authentication errors</li>
                        <li>API quota exceeded messages</li>
                        <li>Connection timeouts</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Verify API Key Format:</strong>
                            <ul>
                                <li>Check for extra spaces or hidden characters</li>
                                <li>Ensure you're using the correct key type</li>
                                <li>Verify key hasn't expired</li>
                                <li>Compare with service provider documentation</li>
                            </ul>
                        </li>
                        
                        <li><strong>Check API Permissions:</strong>
                            <ul>
                                <li>Ensure API key has required scopes/permissions</li>
                                <li>Verify project settings on provider platform</li>
                                <li>Check if API is enabled for your account</li>
                            </ul>
                        </li>
                        
                        <li><strong>Monitor Usage Limits:</strong>
                            <ul>
                                <li>Check your quota usage on provider dashboard</li>
                                <li>Wait for quota reset if exceeded</li>
                                <li>Consider upgrading API plan if needed</li>
                            </ul>
                        </li>
                        
                        <li><strong>Update Configuration:</strong>
                            <ul>
                                <li>Generate new API keys if current ones are problematic</li>
                                <li>Update keys in <code>/config</code> → "API Keys"</li>
                                <li>Test integration after updating</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h3>Webhook Failures</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>External notifications not arriving</li>
                        <li>Integration events not triggering</li>
                        <li>Webhook endpoints returning errors</li>
                        <li>Delayed or missing updates</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Test Webhook URL:</strong>
                            <ul>
                                <li>Manually test the webhook endpoint</li>
                                <li>Verify URL is accessible and correct</li>
                                <li>Check if SSL/HTTPS is required</li>
                            </ul>
                        </li>
                        
                        <li><strong>Check Permissions:</strong>
                            <ul>
                                <li>Verify webhook has required permissions on the service</li>
                                <li>Check Discord channel permissions for webhook posts</li>
                                <li>Ensure webhook token is valid</li>
                            </ul>
                        </li>
                        
                        <li><strong>Update Configuration:</strong>
                            <ul>
                                <li>Recreate webhook if URL has changed</li>
                                <li>Update webhook settings in external service</li>
                                <li>Verify webhook format and payload structure</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h2 id="premium-issues">Premium Issues</h2>

                <h3>Premium Features Locked</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>Can't access premium features despite having premium</li>
                        <li>Premium status not showing in <code>/config</code></li>
                        <li>Features show as locked or unavailable</li>
                        <li>Premium commands don't appear</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Verify Premium Status:</strong>
                            <ul>
                                <li>Use <code>/config</code> to check premium status</li>
                                <li>Ensure premium is active on the correct server</li>
                                <li>Check if you have user premium vs server premium</li>
                            </ul>
                        </li>
                        
                        <li><strong>Wait for Activation:</strong>
                            <ul>
                                <li>Wait 15 minutes after purchase for activation</li>
                                <li>Premium activation is usually automatic</li>
                                <li>Try refreshing configuration panel</li>
                            </ul>
                        </li>
                        
                        <li><strong>Verify Purchase:</strong>
                            <ul>
                                <li>Check your payment method was charged successfully</li>
                                <li>Verify subscription status in customer portal</li>
                                <li>Ensure payment wasn't declined or reversed</li>
                            </ul>
                        </li>
                        
                        <li><strong>Contact Support:</strong>
                            <ul>
                                <li>Contact support with purchase receipt if issue persists</li>
                                <li>Include Discord server ID and user ID</li>
                                <li>Provide transaction ID or payment confirmation</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h3>Billing and Subscription Issues</h3>
                <div class="command-card">
                    <h4>Symptoms</h4>
                    <ul>
                        <li>Payment failed or was declined</li>
                        <li>Subscription not renewing</li>
                        <li>Wrong billing amount charged</li>
                        <li>Can't access customer portal</li>
                    </ul>
                    
                    <h4>Solutions</h4>
                    <ol>
                        <li><strong>Check Payment Method:</strong>
                            <ul>
                                <li>Verify credit/debit card details are correct</li>
                                <li>Ensure card has sufficient funds</li>
                                <li>Check if card has expired</li>
                                <li>Contact your bank if payments are being declined</li>
                            </ul>
                        </li>
                        
                        <li><strong>Access Customer Portal:</strong>
                            <ul>
                                <li>Use the link from your purchase confirmation email</li>
                                <li>Contact support if you can't access the portal</li>
                                <li>Update payment methods through the portal</li>
                            </ul>
                        </li>
                        
                        <li><strong>Contact Billing Support:</strong>
                            <ul>
                                <li>For billing issues, contact our billing team directly</li>
                                <li>Include transaction IDs and payment details</li>
                                <li>Provide screenshots of any error messages</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <h2 id="diagnostic-tools">Diagnostic Tools</h2>

                <h3>Built-in Diagnostic Commands</h3>
                <div class="command-card">
                    <h4>Essential Diagnostic Commands</h4>
                    <ul>
                        <li><code>/utility ping</code> - Check bot latency and response time</li>
                        <li><code>/utility serverinfo</code> - View server information and statistics</li>
                        <li><code>/admin permissions</code> - Check bot permissions</li>
                        <li><code>/config</code> - Review all configuration settings</li>
                        <li><code>/globalstats uptime</code> - Check bot uptime and status</li>
                    </ul>
                    
                    <h4>Configuration Verification</h4>
                    <ol>
                        <li>Use <code>/config</code> to check feature status</li>
                        <li>Verify channel and role assignments</li>
                        <li>Check premium status and subscription</li>
                        <li>Review API key configuration</li>
                        <li>Test specific features after configuration</li>
                    </ol>
                </div>

                <h3>External Diagnostic Tools</h3>
                <div class="command-card">
                    <h4>Discord-Related Tools</h4>
                    <ul>
                        <li><strong>Discord Status:</strong> <a href="https://discordstatus.com" target="_blank">discordstatus.com</a></li>
                        <li><strong>Permission Calculator:</strong> Check bot permissions with online calculators</li>
                        <li><strong>Server Audit Logs:</strong> Check Discord's built-in audit log</li>
                    </ul>
                    
                    <h4>Service Status Pages</h4>
                    <ul>
                        <li><strong>Nexi Bot Status:</strong> Check our status page for known issues</li>
                        <li><strong>YouTube:</strong> For music integration issues</li>
                        <li><strong>Spotify:</strong> For premium music features</li>
                        <li><strong>Google:</strong> For Google Calendar/Forms integration</li>
                    </ul>
                </div>

                <h2 id="contact-support">Contact Support</h2>

                <div class="command-card">
                    <h3>When to Contact Support</h3>
                    
                    <h4>Immediate Support Required</h4>
                    <ul>
                        <li>Premium license showing as invalid</li>
                        <li>Data loss or corruption</li>
                        <li>Security-related issues</li>
                        <li>Billing discrepancies</li>
                    </ul>
                    
                    <h4>Standard Support Cases</h4>
                    <ul>
                        <li>Technical issues persisting >30 minutes</li>
                        <li>Premium activation problems</li>
                        <li>Integration setup assistance</li>
                        <li>Feature requests and suggestions</li>
                        <li>Bug reports with error codes</li>
                    </ul>
                    
                    <h3>Support Response Times</h3>
                    <p><em>Note: Response times are estimated, not guaranteed. Actual response times may vary based on support volume and issue complexity.</em></p>
                    
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Support Tier</th>
                                    <th>Estimated Response Time</th>
                                    <th>Priority Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Lifetime Premium</strong></td>
                                    <td>2-6 hours</td>
                                    <td>● Highest</td>
                                </tr>
                                <tr>
                                    <td><strong>Premium User</strong></td>
                                    <td>6-12 hours</td>
                                    <td>● High</td>
                                </tr>
                                <tr>
                                    <td><strong>Premium Server</strong></td>
                                    <td>12-24 hours</td>
                                    <td>● Medium</td>
                                </tr>
                                <tr>
                                    <td><strong>Free Users</strong></td>
                                    <td>24-48 hours</td>
                                    <td>● Standard</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <h3>How to Contact Support</h3>
                    
                    <h4>Information to Include</h4>
                    <ul>
                        <li><strong>Error Codes:</strong> Include any error codes you received</li>
                        <li><strong>Steps to Reproduce:</strong> What you were trying to do</li>
                        <li><strong>Server Information:</strong> Server ID, server size, bot role position</li>
                        <li><strong>Screenshots:</strong> Error messages or configuration screens</li>
                        <li><strong>Premium Status:</strong> Your subscription type and status</li>
                        <li><strong>Recent Changes:</strong> Any recent configuration changes</li>
                    </ul>
                    
                    <h4>Contact Methods</h4>
                    <ul>
                        <li><strong>Discord Support Server:</strong> <a href="https://discord.gg/nexibot" target="_blank">discord.gg/nexibot</a></li>
                        <li><strong>Email Support:</strong> <a href="mailto:info@nexibot.uk">info@nexibot.uk</a></li>
                        <li><strong>Website:</strong> <a href="https://nexibot.uk" target="_blank">nexibot.uk</a></li>
                    </ul>
                </div>

                <div class="alert alert-success">
                    <h4>Pro Tips for Faster Resolution</h4>
                    <ul>
                        <li><strong>Search First:</strong> Check this documentation and our FAQ</li>
                        <li><strong>Be Specific:</strong> Provide detailed descriptions and error codes</li>
                        <li><strong>Try Basic Solutions:</strong> Restart features, check permissions, wait and retry</li>
                        <li><strong>Include Context:</strong> What changed recently? What were you trying to accomplish?</li>
                        <li><strong>Follow Up:</strong> Respond promptly to support requests for faster resolution</li>
                    </ul>
                    
                    <div style="margin-top: 20px;">
                        <a href="https://discord.gg/nexibot" class="btn btn-primary" target="_blank">Get Support</a>
                        <a href="/error-codes" class="btn btn-secondary">Error Codes Reference</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
