<?php
$pageTitle = "Setup & Configuration - Nexi Bot Documentation";
$pageDescription = "Complete setup guide for Nexi Bot. Learn how to invite, configure, and customize your Discord bot.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Setup Guide</h3>
                <ul>
                    <li><a href="#inviting-bot" class="active">Preparing for Launch</a></li>
                    <li><a href="#quick-setup">Quick Setup (Coming Soon)</a></li>
                    <li><a href="#detailed-config">Configuration Guide</a></li>
                    <li><a href="#feature-setup">Feature Setup</a></li>
                    <li><a href="#advanced-config">Advanced Configuration</a></li>
                    <li><a href="#server-settings">Server-Specific Settings</a></li>
                    <li><a href="#backup-migration">Backup & Migration</a></li>
                </ul>
            </div>                <div class="content-main">
                <h1>Setup & Configuration Guide</h1>
                <p>Get ready for Nexi Bot! While the bot is currently in testing, you can prepare your server and pre-order premium features. This guide will help you understand how to set up Nexi Bot when it becomes available.</p>
                
                <div class="alert alert-warning">
                    <strong>Testing Phase:</strong> Nexi Bot is currently in private testing. <a href="https://nexibot.uk/features" target="_blank">Pre-order premium</a> to get early access when we launch!
                </div>

                <h2 id="inviting-bot">1. Preparing for Bot Invite</h2>
                
                <h3>Current Status: Testing Phase</h3>
                <p>Nexi Bot is currently in private testing and not yet available for public invite. Here's how to prepare:</p>
                
                <div class="command-card">
                    <div class="command-title">
                        <h4>Join the Waitlist</h4>
                    </div>
                    <p>Stay updated on our launch progress:</p>
                    <a href="https://discord.gg/nexibot" class="btn btn-primary" target="_blank">Join Support Server</a>
                    <p><small>Get notified when public access becomes available!</small></p>
                </div>
                
                <div class="command-card">
                    <div class="command-title">
                        <h4>Pre-Order Premium Access</h4>
                    </div>
                    <p>Get early access to Nexi Bot and premium features:</p>
                    <a href="https://nexibot.uk/features" class="btn btn-premium" target="_blank">Pre-Order Premium</a>
                    <p><small>Premium pre-order customers get first access when we launch!</small></p>
                </div>
                
                <div class="command-card">
                    <div class="command-title">
                        <h4>Method 3: Website</h4>
                    </div>
                    <p>Visit our main website at <a href="https://nexibot.uk" target="_blank">nexibot.uk</a> and click the "Add to Discord" button.</p>
                </div>

                <h3>Step 2: Server Selection</h3>
                <ol>
                    <li>Select your server from the dropdown menu</li>
                    <li>Ensure you have "Manage Server" permission</li>
                    <li>Review the requested permissions</li>
                    <li>Click "Authorize"</li>
                </ol>

                <h3>Step 3: Permission Verification</h3>
                <p>We recommend granting <strong>Administrator</strong> permission for full functionality. If you prefer specific permissions, ensure the bot has:</p>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Permission</th>
                                <th>Required For</th>
                                <th>Critical</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Manage Server</td>
                                <td>Server configuration</td>
                                <td><span class="status-indicator status-yes">REQUIRED</span></td>
                            </tr>
                            <tr>
                                <td>Manage Roles</td>
                                <td>Auto-roles, moderation</td>
                                <td><span class="status-indicator status-yes">REQUIRED</span></td>
                            </tr>
                            <tr>
                                <td>Manage Channels</td>
                                <td>Channel setup, logging</td>
                                <td><span class="status-indicator status-yes">REQUIRED</span></td>
                            </tr>
                            <tr>
                                <td>Moderate Members</td>
                                <td>Kicks, bans, timeouts</td>
                                <td><span class="status-indicator status-yes">REQUIRED</span></td>
                            </tr>
                            <tr>
                                <td>Read/Send Messages</td>
                                <td>Basic functionality</td>
                                <td><span class="status-indicator status-yes">REQUIRED</span></td>
                            </tr>
                            <tr>
                                <td>Embed Links</td>
                                <td>Rich message formatting</td>
                                <td><span class="status-indicator status-yes">REQUIRED</span></td>
                            </tr>
                            <tr>
                                <td>Attach Files</td>
                                <td>Image moderation, logs</td>
                                <td><span class="status-indicator status-recommended">RECOMMENDED</span></td>
                            </tr>
                            <tr>
                                <td>Connect/Speak</td>
                                <td>Music functionality</td>
                                <td><span class="status-indicator status-optional">MUSIC ONLY</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="quick-setup">2. Quick Setup Wizard</h2>
                
                <p>Once invited, start with the quick setup wizard for basic configuration:</p>
                
                <div class="command-card">
                    <div class="command-title">
                        <h3><code>/setup quick</code></h3>
                    </div>
                    <p>This interactive wizard will configure:</p>
                    <ul>
                        <li><span class="status-indicator status-yes">INCLUDED</span> Basic moderation settings</li>
                        <li><span class="status-indicator status-yes">INCLUDED</span> Welcome system setup</li>
                        <li><span class="status-indicator status-yes">INCLUDED</span> Essential logging channels</li>
                        <li><span class="status-indicator status-yes">INCLUDED</span> Auto-role assignment</li>
                        <li><span class="status-indicator status-yes">INCLUDED</span> Spam protection</li>
                    </ul>
                    
                    <div class="alert alert-success">
                        <strong>Professional Setup:</strong> The quick setup takes approximately 2-3 minutes and covers 80% of common server requirements. Advanced customization options are available post-setup.
                    </div>
                </div>

                <h3>Quick Setup Steps</h3>
                <ol>
                    <li><strong>Welcome Channel:</strong> Choose where to greet new members</li>
                    <li><strong>Moderation Log:</strong> Select channel for moderation actions</li>
                    <li><strong>Auto Role:</strong> Pick a role for new members (optional)</li>
                    <li><strong>Spam Protection:</strong> Enable basic anti-spam measures</li>
                    <li><strong>Verification:</strong> Test bot permissions and functionality</li>
                </ol>

                <h2 id="detailed-config">3. Detailed Configuration</h2>
                
                <p>For comprehensive customization, use the main configuration panel:</p>
                
                <div class="command-card">
                    <div class="command-title">
                        <h3><code>/config</code></h3>
                    </div>
                    <p>Access the full configuration interface with these sections:</p>
                    
                    <h4>Feature Toggles</h4>
                    <ul>
                        <li>Enable/disable individual features</li>
                        <li>Configure feature-specific settings</li>
                        <li>View premium feature availability</li>
                    </ul>
                    
                    <h4>Channel Configuration</h4>
                    <ul>
                        <li>Set welcome/farewell channels</li>
                        <li>Configure logging destinations</li>
                        <li>Assign music and gaming channels</li>
                    </ul>
                    
                    <h4>API Keys <span class="premium-badge">PREMIUM</span></h4>
                    <ul>
                        <li>Google Calendar integration</li>
                        <li>ERLC API configuration</li>
                        <li>Custom webhook setup</li>
                    </ul>
                    
                    <h4>Advanced Settings <span class="premium-badge">PREMIUM</span></h4>
                    <ul>
                        <li>Automation rule creation</li>
                        <li>Custom trigger configuration</li>
                        <li>Analytics preferences</li>
                    </ul>
                </div>

                <h2 id="feature-setup">4. Feature Configuration</h2>

                <h3>Welcome System</h3>
                <div class="command-card">
                    <h4>Setup Steps:</h4>
                    <ol>
                        <li>Run <code>/config</code> → Select "Channels"</li>
                        <li>Set welcome channel from dropdown</li>
                        <li>Navigate to "Settings" → Customize welcome message</li>
                        <li>Enable "Welcome System" in feature toggles</li>
                    </ol>
                    
                    <h4>Customization Options:</h4>
                    <ul>
                        <li><strong>Message Variables:</strong> <code>{user}</code>, <code>{server}</code>, <code>{membercount}</code></li>
                        <li><strong>Embed Styling:</strong> Colors, images, thumbnails</li>
                        <li><strong>Auto-Delete:</strong> Remove welcome messages after time</li>
                    </ul>
                </div>

                <h3>Moderation Setup</h3>
                <div class="command-card">
                    <h4>Essential Configuration:</h4>
                    <ol>
                        <li>Ensure bot role is above member roles in hierarchy</li>
                        <li>Enable "Moderation System" in <code>/config</code> → "Features"</li>
                        <li>Set moderation log channel</li>
                        <li>Configure auto-moderation rules</li>
                        <li><strong>Premium:</strong> Enable AI moderation for advanced filtering</li>
                    </ol>
                    
                    <div class="alert alert-warning">
                        <strong>Important:</strong> The bot's role must be higher than roles it needs to moderate. Drag the bot role near the top of your role hierarchy.
                    </div>
                </div>

                <h3>Music System</h3>
                <div class="command-card">
                    <h4>Quick Start:</h4>
                    <ol>
                        <li>Join a voice channel</li>
                        <li>Use <code>/music play &lt;song&gt;</code> to start</li>
                        <li>Configure dedicated music channel (optional)</li>
                        <li><strong>Premium:</strong> Access high-quality audio and effects</li>
                    </ol>
                    
                    <h4>Advanced Configuration:</h4>
                    <ul>
                        <li>Set volume limits and defaults</li>
                        <li>Configure DJ role requirements</li>
                        <li>Enable/disable specific music sources</li>
                    </ul>
                </div>

                <h3>Leveling System</h3>
                <div class="command-card">
                    <h4>Setup Process:</h4>
                    <ol>
                        <li>Enable in <code>/config</code> → "Features"</li>
                        <li>Configure XP rates and multipliers</li>
                        <li>Set level-up notification channel</li>
                        <li>Create role rewards for milestones</li>
                    </ol>
                    
                    <h4>Customization:</h4>
                    <ul>
                        <li><strong>XP Sources:</strong> Messages, voice chat, reactions</li>
                        <li><strong>Channel Multipliers:</strong> Boost XP in specific channels</li>
                        <li><strong>Role Rewards:</strong> Automatic role assignment at levels</li>
                    </ul>
                </div>

                <h3>Custom Commands</h3>
                <div class="command-card">
                    <h4>Creating Commands:</h4>
                    <ol>
                        <li>Use <code>/customcommands create &lt;name&gt; &lt;response&gt;</code></li>
                        <li>Test with the command name</li>
                        <li>Edit with <code>/customcommands edit &lt;name&gt; &lt;response&gt;</code></li>
                        <li>View all with <code>/customcommands list</code></li>
                    </ol>
                    
                    <h4>Advanced Features:</h4>
                    <ul>
                        <li><strong>Variables:</strong> User mentions, server info, timestamps</li>
                        <li><strong>Conditions:</strong> Role-based responses</li>
                        <li><strong>Embeds:</strong> Rich message formatting</li>
                    </ul>
                </div>

                <h2 id="advanced-config">5. Advanced Configuration <span class="premium-badge">PREMIUM</span></h2>

                <h3>API Integrations</h3>
                
                <h4>Google Calendar Integration</h4>
                <div class="command-card">
                    <ol>
                        <li>Create a Google Cloud project</li>
                        <li>Enable the Google Calendar API</li>
                        <li>Generate a service account key</li>
                        <li>Add the key to <code>/config</code> → "API Keys" → "Google Calendar"</li>
                        <li>Test with <code>/googlecalendar events</code></li>
                    </ol>
                </div>

                <h4>ERLC Integration</h4>
                <div class="command-card">
                    <ol>
                        <li>Obtain your ERLC API key from the game</li>
                        <li>Configure in <code>/config</code> → "API Keys" → "ERLC"</li>
                        <li>Test with <code>/erlc player &lt;username&gt;</code></li>
                        <li>Set up automatic notifications</li>
                    </ol>
                </div>

                <h4>Roblox Integration</h4>
                <div class="command-card">
                    <ol>
                        <li>Get Roblox API credentials</li>
                        <li>Configure in bot settings</li>
                        <li>Enable account verification system</li>
                        <li>Test with <code>/roblox verify &lt;username&gt;</code></li>
                    </ol>
                </div>

                <h3>Automation Setup</h3>
                <div class="command-card">
                    <h4>Creating Automation Rules:</h4>
                    <ol>
                        <li>Access <code>/config</code> → "Advanced Settings"</li>
                        <li>Click "Create New Automation"</li>
                        <li>Define triggers (events, conditions)</li>
                        <li>Set actions (messages, roles, moderation)</li>
                        <li>Test automation workflows</li>
                    </ol>
                    
                    <h4>Example Automations:</h4>
                    <ul>
                        <li><strong>Welcome Sequence:</strong> Multiple messages over time</li>
                        <li><strong>Activity Rewards:</strong> Roles for active members</li>
                        <li><strong>Moderation Escalation:</strong> Progressive punishments</li>
                    </ul>
                </div>

                <h3>Analytics Configuration</h3>
                <div class="command-card">
                    <h4>Setup Steps:</h4>
                    <ol>
                        <li>Enable in <code>/config</code> → "Features"</li>
                        <li>Configure data collection preferences</li>
                        <li>Set up automated reports</li>
                        <li>Access insights via <code>/analytics</code></li>
                    </ol>
                    
                    <h4>Available Metrics:</h4>
                    <ul>
                        <li>Member growth and retention</li>
                        <li>Message activity patterns</li>
                        <li>Channel usage statistics</li>
                        <li>Command popularity data</li>
                    </ul>
                </div>

                <h2 id="server-settings">6. Server-Specific Settings</h2>

                <h3>Channel Configuration</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Channel Type</th>
                                <th>Purpose</th>
                                <th>Required</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Welcome Channel</strong></td>
                                <td>New member join/leave messages</td>
                                <td>Recommended</td>
                            </tr>
                            <tr>
                                <td><strong>Moderation Logs</strong></td>
                                <td>Automated moderation actions</td>
                                <td>Essential</td>
                            </tr>
                            <tr>
                                <td><strong>General Logs</strong></td>
                                <td>Server activity tracking</td>
                                <td>Recommended</td>
                            </tr>
                            <tr>
                                <td><strong>Appeals Channel</strong></td>
                                <td>Ban appeal submissions</td>
                                <td>Premium</td>
                            </tr>
                            <tr>
                                <td><strong>Music Channel</strong></td>
                                <td>Music command restrictions</td>
                                <td>Optional</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Role Configuration</h3>
                <div class="command-card">
                    <h4>Essential Roles:</h4>
                    <ul>
                        <li><strong>Muted Role:</strong> For moderation timeouts</li>
                        <li><strong>Auto Roles:</strong> Assigned to new members</li>
                        <li><strong>Level Roles:</strong> Rewards for active members</li>
                        <li><strong>Premium Roles:</strong> Special access permissions</li>
                    </ul>
                    
                    <div class="alert alert-info">
                        <strong>Pro Tip:</strong> The bot can create a properly configured muted role automatically. Use <code>/moderation setup</code> for quick configuration.
                    </div>
                </div>

                <h3>Permission Setup</h3>
                <div class="command-card">
                    <h4>Recommended Bot Permissions:</h4>
                    
                    <h5>Option 1: Administrator (Recommended)</h5>
                    <p>Grants full functionality with no permission conflicts.</p>
                    
                    <h5>Option 2: Specific Permissions</h5>
                    <ul>
                        <li>Manage Server</li>
                        <li>Manage Roles</li>
                        <li>Manage Channels</li>
                        <li>Moderate Members</li>
                        <li>Read/Send Messages</li>
                        <li>Embed Links</li>
                        <li>Attach Files</li>
                        <li>Connect/Speak (for music)</li>
                    </ul>
                </div>

                <h2 id="backup-migration">7. Backup and Migration</h2>

                <h3>Configuration Backup <span class="premium-badge">PREMIUM</span></h3>
                <div class="command-card">
                    <h4>Creating Backups:</h4>
                    <ol>
                        <li>Use <code>/config</code> → "Export Configuration"</li>
                        <li>Download the generated backup file</li>
                        <li>Store securely for disaster recovery</li>
                        <li>Set up automatic backup scheduling</li>
                    </ol>
                    
                    <h4>What's Included:</h4>
                    <ul>
                        <li>All feature configurations</li>
                        <li>Channel and role assignments</li>
                        <li>Custom commands and responses</li>
                        <li>Automation rules and triggers</li>
                        <li>API keys and integrations</li>
                    </ul>
                </div>

                <h3>Migrating Servers</h3>
                <div class="command-card">
                    <h4>Migration Process:</h4>
                    <ol>
                        <li>Export configuration from old server</li>
                        <li>Invite bot to new server with proper permissions</li>
                        <li>Import configuration using backup file</li>
                        <li>Verify all settings transferred correctly</li>
                        <li>Update channel/role IDs as needed</li>
                    </ol>
                    
                    <div class="alert alert-warning">
                        <strong>Note:</strong> Some settings (like channel/role IDs) need manual adjustment after migration due to Discord's unique ID system.
                    </div>
                </div>

                <div class="alert alert-success">
                    <h4>Setup Complete!</h4>
                    <p>Your Nexi Bot is now configured and ready to enhance your Discord server. Need help? Join our <a href="https://discord.gg/nexibot" target="_blank">support server</a> or check out the <a href="/troubleshooting">troubleshooting guide</a>.</p>
                    
                    <div style="margin-top: 20px;">
                        <a href="/features" class="btn btn-primary">Explore Features</a>
                        <a href="/commands" class="btn btn-secondary">Browse Commands</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
